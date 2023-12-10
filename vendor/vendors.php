<?php

function thephpleague_oauth_client_autoloader($class) {
    if (str_contains($class,"League\OAuth2")) {
        echo $class . '<br />';
        echo __DIR__."<br>";
        echo $_SERVER['DOCUMENT_ROOT_DIR']."<br>";
        include str_replace("\\","/",str_replace("League\OAuth2\Client",$_SERVER['DOCUMENT_ROOT_DIR']."/vendor/thephpleague/oauth2-client/src",$class) . '.php');
    }
}
spl_autoload_register('thephpleague_oauth_client_autoloader');



?>