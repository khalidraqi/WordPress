<?php 
/**
 * Plugin Name:       Form
 * Plugin URI: https://github.com/khalidraqi/WordPress
 * Description:       formulaire de contact.
 * Author:           khalid Version 1
 */




          add_shortcode( 'cantact',  function(){
          return require __DIR__."/contact.php";
         });
          
          ?>