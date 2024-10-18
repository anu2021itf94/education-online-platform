<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "studi";

$connect = new mysqli($host, $user, $password, $dbname);

if($connect -> connect_error)
{
    //die ("Connection Error");

}
else{
    //echo("Connection sucess");
}

?>