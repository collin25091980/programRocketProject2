<?php 
   class Testimonial {
      // Attributes
      private $_content;
      private $_userId;
      
      // Constructor 
      public function __construct($content, $userId) {
         $this->setContent($content);
         $this->setUserId($userId);
      }

      // Getters
      public function getContent(){
         return $this->_content;
      }

      public function getUserId() {
         return $this->_userId;
      }

      // Setters
      public function setContent($content) {
         return $this->_content = $content;
      }
      
      public function setUserId($userId) {
         return $this->_userId = $userId;
      }

      // Methods
      public function saveTestimonialInDataBase() {
         require('src/connection.php');
         $req = $bdd->prepare('INSERT INTO testimonials(content, user_id) VALUES(?, ?)');
         $req->execute([$this->getContent(), $this->getUserId()]);
      }

      // Statics
      public static function displayTestimonials() {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT testimonials.content, users.first_name, users.last_name FROM testimonials, users WHERE testimonials.user_id = users.id ORDER BY RAND() LIMIT 3');
         $req->execute();

         while($result = $req->fetch()) {
            echo '<div class="col-lg-4 mx-auto mb-5">'.
                     '<div class="text-center fs-4 fst-italic mb-4 px2">'.
                        $result["content"].
                     '</div>'.
                     '<div class="d-flex align-items-center justify-content-center testimonial">'.
                        '<div class="fw-bold">'.
                           $result['first_name'] . ' ' . $result['last_name'].
                        '</div>'.
                     '</div>'.
                  '</div>';
         }
      }
   }
