<?php

// DATABASE CONENCTION
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "signuptb"; // DATABASE NAME

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Bağlantı hatası!");
}
