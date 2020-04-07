<?php
      
      $host = 'localhost';
      $dbname = 'covid';
      $username = 'root';
      $password = '';
      $submission_id = $_GET['submission_id'];
      $dsn = "mysql:host=$host;dbname=$dbname"; 
      // récupérer tous les utilisateurs
       
      $sql = "SELECT * FROM ft_form_1 where submission_id=$submission_id";
       
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

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <title>Details du projets</title>

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
                  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

                    <fieldset> <legend>Titre du projet</legend><?php echo htmlspecialchars($row['titre_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Résumé du projet</legend><?php echo htmlspecialchars($row['rsum_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Description du projet</legend><?php echo htmlspecialchars($row['description_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Domaine du projet</legend><?php echo htmlspecialchars($row['domaine_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Lien web du projet</legend><?php echo htmlspecialchars($row['liens_webs_de_vos_projets_site_internet_youtube_twiter']); ?></fieldset>
                    </br></br>

                    <fieldset> <legend>Titre du projet</legend><?php echo htmlspecialchars($row['titre_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Date de soumission du projet</legend><?php echo htmlspecialchars($row['submission_date']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Dernière modification du projet</legend><?php echo htmlspecialchars($row['last_modified_date']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Durée du projet en mois</legend><?php echo htmlspecialchars($row['dure_du_projet_en_mois']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Type de structure porteur du projet</legend><?php echo htmlspecialchars($row['type_dorganisation']); ?></fieldset>
                    </br></br>

                    <fieldset> <legend>Personne ressource</legend><?php echo htmlspecialchars($row['prnoms_du_contact'].''.$row['nom_du_contact']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Téléphone</legend><?php echo htmlspecialchars($row['email_du_contact']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>E-mail</legend><?php echo htmlspecialchars($row['tlphone_du_contact']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Institues en collaboration sur projet</legend><?php echo htmlspecialchars($row['institues_en_collaboration']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Ressources disponibles</legend><?php echo htmlspecialchars($row['ressourses_disponibles']); ?></fieldset>
                    </br></br>

                    <fieldset> <legend>Ressources récommandées</legend><?php echo htmlspecialchars($row['ressources_rcommandes']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Stade du projet</legend><?php echo htmlspecialchars($row['stade_du_projet']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Autres détails</legend><?php echo htmlspecialchars($row['autres_details']); ?></fieldset>
                    </br></br>
                    <fieldset><legend>Projets liés à ce present projet</legend><?php echo htmlspecialchars($row['le_projet_est_en_relation_avec_autres_type_dtudes']); ?></fieldset>
                    </br></br>
                    
                   <?php endwhile; ?>
            </section>
          </div>
          <a class="btn btn-info btn-lg" href="index.php" title="retour aux projets">Retour</a>
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
