<?php

class MyFormulaire_Session{
    public function __construct(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    public function createMessage($type, $message){
        $_SESSION['my-formulaire'] = [
            "type" =>$type, 
            "message" => $message
        ];
    }

    public function getMessage(){
        if(isset($_SESSION['my-formulaire']) && count($_SESSION['my-formulaire'])>0){
            return $_SESSION['my-formulaire'];
        } else {
            return false;
        }

        //condition ternaire : 
        // return isset($_SESSION['my-formulaire']) && count($_SESSION['my-formulaire'])>0 ? 
        //     $_SESSION['my-formulaire'] : false;

    }

    public function destroy(){
        $_SESSION['my-formulaire'] = [];
    }
}