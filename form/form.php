<?php 
/**
 * Plugin Name:       Form
 * Description:       formulaire de contact.
 * Author:           khalid
 */


          add_shortcode( 'cantact',  function(){
          return require __DIR__."/contact.php";
         });
          
          ?>