<?php
session_start();
require "functions/safe.php";
require "functions/routing.ptp";

if($SERVER["REQUEST_METHOD"]=="POST"){
    $username=security($_POST["username"]);
    $password=security($_POST["password"]);
}
else{
    // echo 'Bu sayfayı görüntüleme yetkiniz bulunmamaktadIr.
    // ..';
   go("index.php",2);

   exit("Bu sayfayı görüntüleme yetkiniz bulunmamaktadır.");
}
?>