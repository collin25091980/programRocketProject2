<?php 
   class Project {
      // Attributes 
      private $_title;
      private $_description;
      private $_imageLink;

      // Constructor
      public function __construct($title, $description, $imageLink) {
         $this->setTitle($title);
         $this->setDescription($description);
         $this->setImageLink($imageLink);
      }

      // Getters
      public function getTitle() {
         return $this->_title;
      }

      public function getDescription() {
         return $this->_description;
      }

      public function getImageLink() {
         return $this->_imageLink;
      }

      // Setters
      public function setTitle($title) {
         return $this->_title = $title;
      }

      public function setDescription($description) {
         return $this->_description = $description;
      }

      public function setImageLink($imageLink) {
         return $this->_imageLink = $imageLink;
      }

      // Methods

      public function saveProjectInDataBase() {
         require('src/connection.php');
         $req =  $bdd->prepare('INSERT INTO projects(title, description, image_link) VALUES(?, ?, ?)');
         $req->execute([$this->getTitle(), $this->getDescription(), $this->getImageLink()]);
      }

      // Statics

      public static function displayProjects() {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT * FROM projects ORDER BY RAND() LIMIT 3');
         $req->execute();

         while($result = $req->fetch()) {
         ?>   
            <div class="col-lg-4 mx-auto mb-5">
            <div class="card h-100 shadow-lg border-0 bg-light">
               <img src="<?= $result['image_link'] ?>" alt="Project project title" class="card-img-top">
               <div class="card-body p-4">
                  <h5 class="card-title mb-3"><?= $result['title']; ?></h5>
                  <div class="mb-2">
                     <div class="badge bg-primary rounded-pill">Danjo</div>
                     <div class="badge bg-primary rounded-pill">React</div>
                     <div class="badge bg-primary rounded-pill">Material UI</div>
                  </div>
                  <p class="card-text">
                     <?= $result['description'] ?>
                  </p>
               </div>
               <div class="card-footer bg-transparent mb-3">
                  <a 
                     class="btn btn-outline-primary btn-sm text-uppercase"
                     href="#"
                     targer="_blank">
                     <span class="material-icons-outlined me-1">code</span>
                     Code source
                  </a>
               </div>
            </div>
         </div>
         <?php }
      }

      public static function displayAllProjects() {
         require('src/connection.php');
         $req = $bdd->prepare('SELECT * FROM projects');
         $req->execute();

         while($result = $req->fetch()) { ?>
            <tr>
               <td><?= $result['id'] ?></td>
               <td><img src="<?= $result['image_link'] ?>" alt="Projet <?= $result['id'] ?>" width="50" height="50" ></td>
               <td><?=$result['title']?></td>
               <td><?= $result['description']?></td>
               <td>
                  <div class="d-grid gap-2">
                  <a href="updateProject.php?id=<?= $result['id']?>" onclick="return confirm('Êtes vous sur de vouloir modifier ce projet ?');" type="button" class="btn btn-warning">Modifier</a><span> </span>
                  <a href="deleteProject.php?id=<?= $result['id']?>" onclick="return confirm('Êtes vous sur de vouloir supprimer ce projet ?');" type="button" class="btn btn-danger">Supprimer</a>
                  </div>
               </td>
            </tr>
         <?php }
      }


   }
