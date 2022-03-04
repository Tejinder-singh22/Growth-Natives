<?php 
/*
Plugin Name: Form Data
Plugin URI: 
Description: A simple wordpress plugin
Author: Teji
Author URI: 
Version: 1.0

*/

use ParagonIE\Sodium\Core\Curve25519\Ge\P2;
//file path where plugin file is located
// call back function to activate or deactivate
register_activation_hook(__FILE__,'form_data_activate');

register_deactivation_hook(__FILE__,'form_data_dactivate');


//make table
function form_data_activate(){

    global $wpdb;
    global $table_prefix;
    $table = 'wp_'.'form_data';
    $sql = "CREATE TABLE $table (
        `name` varchar(20) NOT NULL,
        `address` varchar(255) NOT NULL,
        `email` varchar(50) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
       

      //run that query
      $wpdb->query($sql); 



}

 

//delete table

function form_data_dactivate(){

    global $wpdb;
    global $table_prefix;
    $table= $table_prefix.'form_data';
    $sql="DROP TABLE $table";
    $wpdb->query($sql);

}
 
//to add section in admin menue

//predefined admin-menu action
add_action('admin_menu','form_data_menu');

function form_data_menu(){
     
    //main function name,name,index,location,function
    add_menu_page('Form Data','Form Data',8,__FILE__,'form_data_list');

}

 

//short code to show data on some other page
//@param name of the shortcode
//@param what do you want to desplay
// copy first param to wordpress page editor and paste over there
// if you want to show through php code in template then copy 1st param paste it as. do_shortcode('[form_data_list_shortcode]');
add_shortcode('form_data_list_shortcode','form_data_list');



function form_data_list(){

    //in this we have select query and respective data displayed
    include('form_data_list.php');
    
}



