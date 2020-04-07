<?php
      $host = 'localhost';
      $dbname = 'covid';
      $username = 'root';
      $password = '';
        
      $dsn = "mysql:host=$host;dbname=$dbname"; 
      // récupérer tous les utilisateurs
      $sql = "SELECT * FROM ft_form_1 ORDER BY submission_date DESC";
       
      try{
       $pdo = new PDO($dsn, $username, $password);
       $stmt = $pdo->query($sql);
       
       if($stmt === false){
        die("Erreur");
       }
       
      }catch (PDOException $e){
        echo $e->getMessage();
      }
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  

  <title>Projets</title>

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <!-- page start-->
        
        <div class="row">
          <div class="col-lg-12">
            
            <section class="panel">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Titre</th>
                    <th> Résumé</th>
                    <th> Domaine du projet</th>
                    <th>Porteur du projet</th>
                    <th> Stade du projet</th>
                    <th> Voir le projet</th>
                  </tr>

                  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['titre_du_projet']); ?></td>
                      <td><?php echo htmlspecialchars($row['rsum_du_projet']); ?></td>
                      <td><?php echo htmlspecialchars($row['domaine_du_projet']); ?></td>
                      <td><?php echo htmlspecialchars($row['institue_du_contact']); ?></td>
                      <td><?php echo htmlspecialchars($row['stade_du_projet']); ?></td>
                      <td><?php echo '<a href="details.php?submission_id=' .$row['submission_id'].'">'; ?>Voir</a></td>
                      
                      
                      
                    </tr>
                    <?php endwhile; ?>

                  
                  
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
