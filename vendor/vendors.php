<?php
function guzzle_guzzle_autoloader($class) {
    if (str_contains($class,"GuzzleHttp")) {
        $GLOBALS["logger"]->info($class);
        include str_replace("\\","/",str_replace("GuzzleHttp",$_SERVER['DOCUMENT_ROOT_DIR']."/vendor/guzzle/guzzle/src",$class) . '.php');
    }
}
spl_autoload_register('guzzle_guzzle_autoloader');

function Seldek_monolog_autoloader($class) {
    if (str_contains($class,"Monolog")) {
        $GLOBALS["logger"]->info($class);
        include str_replace("\\","/",str_replace("Monolog",$_SERVER['DOCUMENT_ROOT_DIR']."/vendor/Seldek/monolog/src/Monolog",$class) . '.php');
    }
}
spl_autoload_register('Seldek_monolog_autoloader');

function thephpleague_oauth_client_autoloader($class) {
    if (str_contains($class,"League\OAuth2")) {
        $GLOBALS["logger"]->info($class);
        include str_replace("\\","/",str_replace("League\OAuth2\Client",$_SERVER['DOCUMENT_ROOT_DIR']."/vendor/thephpleague/oauth2-client/src",$class) . '.php');
    }
}
spl_autoload_register('thephpleague_oauth_client_autoloader');


?>