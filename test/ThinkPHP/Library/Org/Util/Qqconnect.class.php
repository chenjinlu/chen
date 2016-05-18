<?php
namespace Org\Util;
    // +----------------------------------------------------------------------
    // | Copyright (c) 2015.
    // +----------------------------------------------------------------------
    // | Author: qiandutianxia <852997402@qq.com>
    // +----------------------------------------------------------------------
    
    /**
     *  qq第三方登录认证
     */
    class Qqconnect {
        private static $data;
        //APP ID
        private $app_id="";
        //APP KEY
        private $app_key="";
        //回调地址
        private $callBackUrl="";
        //Authorization Code
        private $code="";
        //access Token
        private $accessToken="";
        public function __construct(){
            $this->app_id="";
            $this->app_key="";
            $this->callBackUrl="";
            //检查用户数据
            if(empty($_SESSION['QC_userData'])){
                self::$data = array();
            }else{
                self::$data = $_SESSION['QC_userData'];
            }
        }
        //获取Authorization Code
        public function getAuthCode(){
            $url="https://graph.qq.com/oauth2.0/authorize";
            $param['response_type']="code";
            $param['client_id']=$this->app_id;
            $param['redirect_uri']=$this->callBackUrl;
            //-------生成唯一随机串防CSRF攻击
                    $state = md5(uniqid(rand(), TRUE));
                    $_SESSION['state']=$state;
            $param['state']=$state;
                    $param['scope']="get_user_info";
            $param =http_build_query($param,'','&');
            $url=$url."?".$param;
            header("Location:".$url);
        }
        //通过Authorization Code获取Access Token
        private function getAccessToken(){
            $url="https://graph.qq.com/oauth2.0/token";
            $param['grant_type']="authorization_code";
            $param['client_id']=$this->app_id;
            $param['client_secret']=$this->app_key;
            $param['code']=$this->code;
            $param['redirect_uri']=$this->callBackUrl;
            $param =http_build_query($param,'','&');
            $url=$url."?".$param;
            return $this->getUrl($url);
        }
        //获取openid
        private function getOpenID(){
            $rzt=$this->getAccessToken();
            parse_str($rzt,$data);
            $this->accessToken=$data['access_token'];
            $url="https://graph.qq.com/oauth2.0/me";
            $param['access_token']=$this->accessToken;
            $param =http_build_query($param,'','&');
            $url=$url."?".$param;
            $response=$this->getUrl($url);
            //--------检测错误是否发生
            if(strpos($response, "callback") !== false){
                $lpos = strpos($response, "(");
                $rpos = strrpos($response, ")");
                $response = substr($response, $lpos + 1, $rpos - $lpos -1);
            }
            $user = json_decode($response);
            if(isset($user->error)){
                exit("错误代码：100007");
            }
            return $user->openid;
        }
        //获取信息
        public function getUsrInfo(){
            if($_GET['state'] != $_SESSION['state']){
                exit("错误代码：300001");
            }
            $this->code=$_GET['code'];
            $openid=$this->getOpenID();
            if(empty($openid)){
                return false;
            }
            $url="https://graph.qq.com/user/get_user_info";
            $param['access_token']=$this->accessToken;
            $param['oauth_consumer_key']=$this->app_id;
            $param['openid']=$openid;
            $param =http_build_query($param,'','&');
            $url=$url."?".$param;
            $rzt=$this->getUrl($url);
            return $rzt;
        }
        //CURL GET
        private function getUrl($url){
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            if (!empty($options)){
                curl_setopt_array($ch, $options);
            }
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        //CURL POST
        private function postUrl($url,$post_data){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            ob_start();
            curl_exec($ch);
            $result = ob_get_contents();
            ob_end_clean();
            return $result;
        }
    }