<?php 

   class Session {
      public static function createSession($email) {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
         $req->execute([$email]);

         while($result = $req->fetch()) {
            $_SESSION['connect']    = true;
            $_SESSION['firstName']  = $result['first_name'];
            $_SESSION['lastName']   = $result['last_name'];
            $_SESSION['role']       = $result['role'];

            // if user has check "Se souvenir de moi" we create cookie
            if(isset($_POST['auto'])) {
               setcookie('auth', $result['secret'], time() + 365*24*3600, '/', null, false, true);
            }
         }
         return $_SESSION;
      }



   }