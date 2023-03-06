<?php
   class Security {
      public static function encryptPassword($password) {
         $password =  "aq1". sha1($password . "123"). "25";
         return $password;
      }

      public static function createSecret($email) {
         $secret = sha1($email) . time();
         $secret = sha1($secret) .time();
         return $secret;
      }

   }
