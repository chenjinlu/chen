<?php
namespace Home\Event;
class UserEvent {
    public function login(){
        echo 'login event';
    }

    public function logout(){
        echo 'logout event';
    }
}