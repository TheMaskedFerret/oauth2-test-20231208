<?php

function thephpleague_oauth_client_autoloader($class) {
    if (str_contains($class,"League\OAuth2")) {
        echo $class . '<br />';
        include str_replace("League\OAuth2","thephpleague/oauth2-client/src",$class) . '.php';
    }
}
spl_autoload_register('thephpleague_oauth_client_autoloader');



?>