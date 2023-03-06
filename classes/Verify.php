<?php 
   class Verify {
      public static function emailSyntax($email) {
         return filter_var($email, FILTER_VALIDATE_EMAIL);
      }

      public static function emailInDatabase($email) {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT COUNT(*) AS emailNumber FROM users WHERE email = ? ');
         $req->execute([$email]);

         while($result = $req->fetch()){
            if($result['emailNumber'] == 0) {
               return false;
            }
            return true;
         }
      }

      public static function passwordGivenByEmailInDatabase($email) {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
         $req->execute([$email]);

         while($result = $req->fetch()) {
            return $result['password'];
         }
      }

      public static function imageSizeIsCorrect($image) {
         return $image['size'] <= 3000000;
      }

      public static function imageExtensionIsCorrect($extensionImage, $extensionArray) {
         return (in_array($extensionImage, $extensionArray));
      }

   }
