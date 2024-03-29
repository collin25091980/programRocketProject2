<section class="vh-100" style="background-color: #eee;">
  <div class="container pt-5 h-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Ajouter un projet</p>


                <?php 
                    if(isset($_GET['error']) && !empty($_GET['message'])) {
                        echo '<p class="alert alert-danger">' . htmlspecialchars($_GET['message']) . '</p>';
                    } else if(isset($_GET['success'])) {
                      echo '<p class="alert alert-success">Votre projet a bien été ajouté</p>';
                    }
                ?>



                <form class="mx-1 mx-md-4" action="projects.php" method="POST" enctype="multipart/form-data">


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="text" id="title" name="title" class="form-control" required>
                        <label class="form-label" for="title">Titre du projet</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="file" id="image" name="image" class="form-control" required/>
                        <label class="form-label" for="image">Image du projet</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <textarea class="form-control" id="description" name="description" rows="10" style="resize:none" placeholder="Description du projet" required></textarea>
                    </div>
                  </div>

 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Ajouter projet</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/projectImg.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>