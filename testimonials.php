<?php
   require('src/requirements.php');

   if(!empty($_POST)){
      if($_POST['content'] != "") {
         $content = htmlspecialchars($_POST['content']);
         $userId  = htmlspecialchars($_SESSION['userId']);

         // Create Testiomial
         $testimonial = new Testimonial($content, $userId);

         // Add Testimonial in dataBase
         $testimonial->saveTestimonialInDataBase();
         header('location: testimonials.php?success=true');
         exit();
      }
      else {
         header('location: testimonials.php?error=true&message=Votre avis ne peut être vide');
         exit();
      }
   }
   
   include('src/header.php');
   include('src/testimonialsContent/testimonialsForm.php');



   include('src/footer.php');
?>

