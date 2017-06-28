<?php

//Cztery zmiannych dla połączenia z lokalną BD
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "test";

//Tworzymę nową instanję połaczenia z BD
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

?>