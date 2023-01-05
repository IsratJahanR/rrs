
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rrs";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}