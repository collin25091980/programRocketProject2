<?php
   require('src/requirements.php');

   if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
      $firstName  = htmlspecialchars($_POST['firstName']);
      $lastName   = htmlspecialchars($_POST['lastName']);
      $email      = htmlspecialchars($_POST['email']);
      $password   = htmlspecialchars($_POST['password']);
      $password2  = htmlspecialchars($_POST['password2']);
      
      // Email syntax Verification
      if(!Verify::emailSyntax($email)) {
         header('location: signup.php?error=true&message=Veuillez vérifier le format de votre adresse email.');
         exit();
      }

      // Verify if email is not in dataBase
      if(Verify::emailInDatabase($email)) {
         header('location: signup.php?error=true&message=Cette Adresse Email est déjà utilisée.');
         exit();
      }

      // Check if password and password2 are equals
      if($password != $password2) {
         header('location: signup.php?error=true&message=Les mots de passe ne sont pas identiques.');
         exit();
      }

      // Password Encryption     
      $password = Security::encryptPassword($password);
      
      // Secret Creation
      $secret = Security::createSecret($email);
      

      // Create User
      $user = new User($firstName, $lastName, $password, $email, $secret);

      // Save user in database
      $user->saveUserInDatabase();

      // Create Session
      Session::createSession($email);
      header('location: https://projet2.sebastien-collin.fr/index.php');
      exit();

   }

   include('src/header.php');
   include('src/signupContent/signupForm.php');
   include('src/footer.php');
?>