<?php

class MyFormulaire_Widget extends WP_Widget{

    public function __construct(){
        
        parent::__construct("my_formulaire", "Formulaire newsletter", [
            "description"=>"formulaire d'inscription à la NL"
        ]);
    }
    /** 
     * Générer le display du widget sur le site
     */
    public function widget($args, $instance){
        echo($args["before_widget"]);
        echo($args["before_title"]);
        echo($instance["title"]);
        echo($args["after_title"]);

        echo("
            <form action='' method='POST'>
                <p>
                    <label for='my-formulaire-name'>Your Name:</label>
                    <input type='text' name='nom' id='my-formulaire-name'>
                </p>
                <p>
                    <label for='my-formulaire-email'>Your Email <i>(required)</i> :</label>
                    <input type='email' name='email' id='my-formulaire-email'
                        require>
                </p>
                <input type='submit' value='Subscribe'>
            </form>
        ");

        echo($args["after_widget"]);

        
    }


    public function form($instance){
        // $var = condition ? si true : si false //CONDITION TERNAIRE
        $title = isset($instance["title"]) ? $instance["title"] : "";
        
        echo("
            <p>
                <label for='" . $this->get_field_id("title") ."'>Titre</label>
                <input id='" . $this->get_field_id("title") . "'
                    name='" . $this->get_field_name("title") . "'
                    type='text' value='$title' class='widefat'>
            </p>
        ");
    }

}