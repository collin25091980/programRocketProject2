<?php
   ob_start();
   session_start();
   session_unset();
   session_destroy();
   setcookie('auth', '', time() - 1);
   header('location: index.php');
   exit();
