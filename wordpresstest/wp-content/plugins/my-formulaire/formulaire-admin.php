<?php

class MyFormulaire_Admin
{

    public function __construct()
    {
        add_action("admin_menu", [$this, "addAdminMenu"]);
    }

    public function addAdminMenu()
    {
        add_menu_page(
            "My Formulaire - the admin plugin",
            "My Formulaire",
            "manage_options",
            "MyFormulaire",
            [$this, "generateHTML"],
            plugin_dir_url(__FILE__) . 'icon.png'
            // 0
        );
        add_submenu_page(
            "MyFormulaire",
            "My Formulaire - the admin plugin",
            "Dashboard",
            "manage_options",
            "MyFormulaire"
        );
        add_submenu_page(
            "MyFormulaire",
            "Subs list",
            "Subscribed",
            "manage_options",
            "MyFormulaire_List",
            [$this, "generateSubscribersHTML"]
        );
    }

    private function getAllContacts()
    {
        global $wpdb;
        return $wpdb->get_results("
            SELECT * FROM {$wpdb->prefix}my_formulaire
        ");
        // return $subscribers;
    }

    public function generateHTML()
    {
        echo ("
            <h1>" . get_admin_page_title() . "</h1>
            <p>Welcome to the NL administration</p>
        ");
    }

    public function generateSubscribersHTML()
    {
        echo ("
        <h1>" . get_admin_page_title() . "</h1>
        <p>Here are the subscribed accounts to th NL</p>
        ");
        $subscribers = $this->getAllContacts();
        // var_dump($subscribers);

        if(count($subscribers)>0){
            echo '
                <table class="my-formulaire-liste" style="border-collapse:collapse">
                <thead>
                    <tr>            
                        <td width="150" style="border:1px solid black; color:cyan; background-color:grey; font-weight:bold; text-align:center;">name</td>
                        <td width="150" style="border:1px solid black; color:pink; background-color:grey; font-weight:bold; text-align:center;">email</td>
                    </tr>
                </thead>
                <tbody>';
            foreach ($subscribers as $subscriber) {
                echo "
                    <tr>
                        <td width='150' style='border:1px solid black;'>{$subscriber->name}</td>
                        <td width='300' style='border:1px solid black;'>{$subscriber->email}</td>
                    </tr>";
            }
            echo '<tbody></table>';
        } else {
            echo("
                <h1>no subscribed 😢</h1>
            ");
        }

        
    }
}
