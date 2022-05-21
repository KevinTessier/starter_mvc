<?php

class Autoloader{
    /**
     * ajout de l'autoloader
     */
    static function register(){
        spl_autoload_register(function($class){
            include_once '_classes/'.$class.'.php';
          });
    }
}