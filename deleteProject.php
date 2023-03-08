<?php 
   require('src/requirements.php');

   if(!empty($_GET['id'])) {
      $id = htmlspecialchars($_GET['id']);
   }

   Project::deleteProject($id);
   header('location: projectsList.php?success=true&message=Le projet a bien été supprimé');
   exit();
?>