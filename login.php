<?php
   require('src/requirements.php');


   if(!empty($_POST['email']) && !empty($_POST['password'])) {
      $email      = htmlspecialchars($_POST['email']);
      $password   = htmlspecialchars($_POST['password']);

      if(!Verify::emailSyntax($email)) {
         header('location: login.php?error=true&message=Veuillez vérifier le format de votre adresse email.');
         exit();
      }

      if(!Verify::emailInDatabase($email)) {
         header('location: login.php?error=true&message=Impossible de vous authentifier correctement.');
         exit();
      }
      
      $password = Security::encryptPassword($password);
      if(Verify::passwordGivenByEmailInDatabase($email) != $password) {
         header('location: login.php?error=true&message=Impossible de vous authentifier correctement.');
         exit();
      }
      
      Session::createSession($email);
      header('location: index.php');
      exit();
      
   }

   include('src/header.php');
   include('src/loginContent/loginForm.php');
   include('src/footer.php');
?>



