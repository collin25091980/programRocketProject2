<?php
   class User {
      // Attributes
      private $_firstName;
      private $_lastName;
      private $_password;
      private $_email;
      private $_secret;

      // constructor
      public function __construct($firstName, $lastName, $password, $email, $secret) {
         $this->setFirstName($firstName);
         $this->setLastName($lastName);
         $this->setPassword($password);
         $this->setEmail($email);
         $this->setSecret($secret);
      }

      // getters
      public function getFirstName() {
         return $this->_firstName;
      }
      public function getLasName() {
         return $this->_lastName;
      }

      public function getPassword() {
         return $this->_password;
      }

      public function getEmail() {
         return $this->_email;
      }

      public function getSecret() {
         return $this->_secret;
      }

      // setters
      public function setFirstName($firstName) {
         return $this->_firstName = $firstName;
      }

      public function setLastName($lastName) {
         return $this->_lastName = $lastName;
      }

      public function setPassword($password) {
         return $this->_password = $password;
      }

      public function setEmail($email) {
         return $this->_email = $email;
      }

      public function setSecret($secret) {
         return $this->_secret = $secret;
      }

      // Methods 
      public function saveUserInDatabase() {
         require('src/connection.php');
         $req = $bdd->prepare('INSERT INTO users(first_name, last_name, password, email, secret) VALUES (?, ?, ?, ?, ?)');
         $req->execute([
                        $this->getFirstName(),
                        $this->getLasName(),
                        $this->getPassword(),
                        $this->getEmail(),
                        $this->getSecret()
         ]);
      }

   }