
<?php
   if(isset($_COOKIE['auth']) && !isset($_SESSION['connect'])) {
      // Connexion à la bdd
      require('src/connection.php');

      // Variable 
      $secret = htmlspecialchars($_COOKIE['auth']);

      // Le secret existe-t-il ?
      $req = $bdd->prepare('SELECT COUNT(*) AS secretNumber FROM users WHERE secret = ?');
      $req->execute([$secret]);

      while($user = $req->fetch()) {
         if($user['secretNumber']   == 1) {
            // Lire tout ce qui concerne l'utilisateur
            $informations = $bdd->prepare('SELECT * FROM users WHERE secret = ?');
            $informations->execute([$secret]);
            while($userInformations = $informations->fetch()) {
               $_SESSION['connect']    = true;
               $_SESSION['firstName']  = $userInformations['first_name'];
               $_SESSION['lastName']   = $userInformations['last_name'];
               $_SESSION['role']       = $userInformations['role'];
            }
         }
      }
   }