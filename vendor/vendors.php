<?php

function thephpleague_oauth_client_autoloader($class) {
    include 'classes/' . $class . '.class.php';
}

spl_autoload_register('thephpleague_oauth_client_autoloader');



?>