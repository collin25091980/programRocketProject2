<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <title>Sébastien Collin | Portfolio</title>

      <!-- Montserrat Font -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Material Icons -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

      <!-- Leaflet CSS -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/style.css">

   </head>  
   <body>
      <div class="container-fluid mx-0">

         <!-- Navbar -->
         <nav class="sticky-top bg-light navbar navbar-expand-lg navbar-light shadow">
            <div class="container-fluid">
               <a href="/" class="navbar-brand">
                  <span class="material-icons-outlined me-1">important_devices</span>
                  Sébastien Collin
               </a>
               <button
                  type=button
                  class="navbar-toggler"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
               >
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="container px-3">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item">
                           <a href="/" class="nav-link me-lg-3">Accueil</a>
                        </li>
                        <?php 
                           if(!empty($_SESSION) && $_SESSION['role'] == 'admin') {
                        ?> 
                        <li class="nav-item">
                           <a href="/#testimonials" class="nav-link me-lg-3">Gestion projets</a>
                        </li>
                        <li class="nav-item">
                           <a href="/#testimonials" class="nav-link me-lg-3">Gestion avis</a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                           <a href="/#about" class="nav-link me-lg-3">A propos</a>
                        </li>
                        <li class="nav-item">
                           <a href="/#projects" class="nav-link me-lg-3">Projets</a>
                        </li>
                        <?php 
                           if(!empty($_SESSION) && $_SESSION['role'] == 'admin') {
                        ?> 
                        <li class="nav-item">
                           <a href="projects.php" class="nav-link me-lg-3">Ajouter un projet</a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                           <a href="/#testimonials" class="nav-link me-lg-3">Avis</a>
                        </li>
                        <?php 
                           if(!empty($_SESSION) && $_SESSION['role'] == 'user') {
                        ?> 
                           <li class="nav-item">
                           <a href="testimonials.php" class="nav-link me-lg-3">Ajouter un avis</a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                           <a href="/#contact" class="nav-link me-lg-3">Contact</a>
                        </li>
                        <?php 
                           if(empty($_SESSION)) {
                        ?>   
                        <li class="nav-item">
                           <a href="login.php" class="nav-link me-lg-3">Se connecter</a>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="signup.php" class="nav-link me-lg-3">S'inscrire</a>
                        </li>
                        <?php   }
                        else { ?>
                           <li class="nav-item">
                              <a href="#" class="nav-link me-lg-3">Bonjour, <?= $_SESSION['firstName'] ?></a>
                           </li>
                           <li class="nav-item">
                              <a href="logout.php" class="nav-link me-lg-3">Se déconnecter</a>
                           </li>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
         <!-- End Navbar -->
      <main>