<?php
   $hostName         = "localhost";
   $dataBaseName     = "portfolio";
   $userName         = "root";
   $password         = "";

   try {
      $bdd = new PDO("mysql:host=$hostName;dbname=$dataBaseName;charset=utf8",$userName,$password);
   }
   catch (Exception $e) {
      die('Error : ' . $e->getMessage());
   }