<?php 
   require('src/requirements.php');

   if(!empty($_GET['id'])) {
      $id = htmlspecialchars($_GET['id']);
   }

   Testimonial::deleteTestimonial($id);
   header('location: testimonialsList.php?success=true&message=L\'avis a bien été supprimé');
   exit();
?>