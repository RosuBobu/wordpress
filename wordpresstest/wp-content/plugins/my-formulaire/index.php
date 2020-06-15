<?php
/*
Plugin Name: Formulaire pour news letter
Description: un plugin incroyable crafté avec amour
Version: 0.1
Author: moi
Author URI: https://9gag.com/
*/

use Symfony\Component\Validator\Constraints\IsNull;

require_once "formulaire-widget.php";
require_once "formulaire-session.php";
require_once "formulaire-admin.php";

class MyFormulaire{
    public function __construct(){
        add_action("widgets_init", function(){
            register_widget("MyFormulaire_Widget");
        });

        add_action("init", ["MyFormulaire","loadFile"]);
        add_action("wp_loaded", [$this,"saveEmail"], 10);
        add_action("wp_loaded", [$this,"displayMessages"], 20);


        register_activation_hook(__FILE__, ["MyFormulaire", "install"]);
        register_uninstall_hook(__FILE__, ["MyFormulaire", "uninstall"]);

        new MyFormulaire_Admin();
    }
    
    public function saveEmail(){
        // var_dump($_POST);
        // var_dump($_POST);
        if (isset($_POST['email']) && !empty($_POST['email'])){
            $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
            $myFormulaire_Session = new MyFormulaire_Session;
            $email = $_POST['email'];
            if(preg_match($regex, $email)){
                global $wpdb;

                $user = $wpdb->get_row("
                    SELECT * FROM {$wpdb->prefix}my_formulaire
                    WHERE email = '$email'
                ");
                // var_dump($user);
            
                if(is_null($user)){
                    $datas = ["email"=>$email];
                    if (isset($_POST['nom']) && !empty($_POST['nom'])){
                        $datas["name"] = $_POST["nom"];
                    }


                    $result = $wpdb->insert("{$wpdb->prefix}my_formulaire",
                            $datas);
                    if($result == false){
                        $myFormulaire_Session->createMessage("error", "error with insert");
                    } else {
                        $myFormulaire_Session->createMessage("success", "subscription successful");
                    }
                } else {
                    $myFormulaire_Session->createMessage("error", "email already used");
                }
            } else {
                $myFormulaire_Session->createMessage("error", "input email not valid");
            }




        }
    }
    
    public function displayMessages(){
        $myFormulaire_Session = new MyFormulaire_Session();
        $message = $myFormulaire_Session->getMessage();
        if($message != false){
            echo ("
                <p class='my-formulaire-info " . $message["type"] . "'>
                    " . $message["message"] . "
                </p>
            "); 
            $myFormulaire_Session->destroy();
        } 
    }

    public static function loadFile(){
        wp_register_style('MyFormulaire', plugins_url('styles.css', __FILE__));
        wp_enqueue_style('MyFormulaire');
        wp_register_script('MyFormulaire', plugins_url('main.js', __FILE__));
        wp_enqueue_script('MyFormulaire');

    }

    public static function install(){
        global $wpdb;
        $wpdb->query("
            CREATE TABLE IF NOT EXISTS {$wpdb->prefix}my_formulaire
            (id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL UNIQUE,
            name VARCHAR(50) NULL);
        ");
    }

    public static function uninstall(){
        global $wpdb;
        $wpdb->query("
            DROP TABLE IF EXISTS {$wpdb->prefix}my_formulaire;
        ");
    }
}

new MyFormulaire();