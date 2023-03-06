<?php
   require('src/requirements.php');

   if(isset($_FILES['image']) && $_FILES['image']['error'] === 0 && isset($_POST['title']) && isset($_POST['description'])) {
      $image         = $_FILES['image'];
      $description   = htmlspecialchars($_POST['description']);
      $title         = htmlspecialchars($_POST['title']);

      // Verifications      
      if(!Verify::imageSizeIsCorrect($image)) {
         header('location: projects.php?error=true&message=L\'image ne doit pas dépasser 3mo');
         exit();
      }

      $informationsImage   = pathinfo($image['name']);
      $extensionImage      = $informationsImage['extension'];
      $extensionArray      = ['png', 'gif', 'jpg', 'jpeg'];

      // Extension Image is correct ? 
      if(!Verify::imageExtensionIsCorrect($extensionImage, $extensionArray )) {
         header('location: projects.php?error=true&message=L\'image doit être au format : png, gif, jpg, jpeg.');
         exit();
      }

      // Save image on site
      $newImageName = time().rand().rand().'.'.$extensionImage;
      $imageLink = 'uploads/'.$newImageName;
      move_uploaded_file($image['tmp_name'], $imageLink);

      
      // Create new project
      $project = new Project($title, $description, $imageLink);
      
      // Save Project in dataBase
      $project->saveProjectInDataBase();
      header('location: projects.php?success=true');
      exit();      
   }


   
   include('src/header.php');
   include('src/projectsContent/projectsContentForm.php');



   include('src/footer.php');
?>

