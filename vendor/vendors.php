<?php

function thephpleague_oauth_client_autoloader($class) {
    if (str_contains($class,"League\OAuth2")) {
        echo $class . '<br />';
        include str_replace("\\","/",str_replace("League\OAuth2","/home3/tmfspace/public_html/prod/oa2/vendor/thephpleague/oauth2-client/src",$class) . '.php');
    }
}
spl_autoload_register('thephpleague_oauth_client_autoloader');



?>