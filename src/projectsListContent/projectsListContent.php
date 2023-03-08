<div class="container py-5">
   <div class="row justify-content-center">
      <h2 class="fw-bold pt-5">Liste des projets</h2>
      <?php 
         if(isset($_GET['success']) && !empty($_GET['message'])) {
            $message = htmlspecialchars($_GET['message']);
            echo "<p class='alert alert-success'>$message</p>";
         }
      ?>
   </div>
</div>
<div class="container mb-5">
   <div class="row">
      <table class="table table-striped table-hover table-bordered align-middle text-center">
         <tr><th>ID</th><th>Image</th><th>Titre</th><th>Description</th><th>Action</th></tr>
         <?php 
            Project::displayAllProjects();
         ?>
      </table>
   </div>
</div>
