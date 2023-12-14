<?php

try{
$dsn = 'mysql:hots=localhost;dbname=colyseum';

$username = 'root';

$password = '';

$database = new PDO($dsn, $username, $password);
}
catch (Exception $message){

    echo "il y a un problème <br>" . $message;

}