<?php
   
include "config.php";

    /**
     * Classe d'autoloader - chargement automatique des différentes classes
     */
   class Autoloader {
	
	static function register(){
                spl_autoload_register(array('Autoloader', 'autoload'));
        }
        static function autoload($class_name){
                require 'class/' . $class_name . '.php';
        }
    }
