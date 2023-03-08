<?php
   $hostName         = 'db5011991226.hosting-data.io';
   $dataBaseName     = "dbs10094879";
   $userName         = "dbu906506";
   $password         = "Em3nz7ng!";

   try {
      $bdd = new PDO("mysql:host=$hostName;dbname=$dataBaseName;charset=utf8",$userName,$password);
   }
   catch (Exception $e) {
      die('Error : ' . $e->getMessage());
   }