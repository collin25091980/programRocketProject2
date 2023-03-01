<?php
   class Security {
      public static function encryptPassword($password) {
         $password =  "aq1". sha1($password . "123"). "25";
         return $password;
      }

   }
