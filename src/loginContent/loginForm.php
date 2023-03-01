   <section class="vh-100" style="background-color: #eee;">
   <div class="container pt-5 h-75 w-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col-lg-12 col-xl-11">
         <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
               <div class="row justify-content-center">
               <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Se Connecter</p>
                  
                  <?php 
                     if(isset($_GET['error']) && !empty($_GET['message'])) {
                        echo '<p class="alert alert-danger">' . htmlspecialchars($_GET['message']) . '</p>';
                     } 
                  ?>

                  <form class="mx-1 mx-md-4" method="POST" action="login.php">

                     <div class="d-flex flex-row align-items-center mb-4">
                     <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                           <input type="email" id="email" name="email" class="form-control" required/>
                           <label class="form-label" for="email">Adresse Email</label>
                        </div>
                     </div>

                     <div class="d-flex flex-row align-items-center mb-4">
                     <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                           <input type="password" id="password" name="password" class="form-control" required/>
                           <label class="form-label" for="password">Mot de passe</label>
                        </div>
                     </div>

                     <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="auto" name="auto" checked />
                              <label class="form-check-label" for="auto"> Se souvenir de moi </label>
                        </div>
                     </div>

                     <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Se connecter</button>
                     </div>

                  </form>

               </div>
               <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="img/loginImg.jpg"
                     class="img-fluid" alt="Sample image">

               </div>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
   </section>