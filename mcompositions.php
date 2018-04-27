<?php
require "config.php";
if(!isset($_SESSION['id'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Aux Trois Fleurs - Compositions</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
</head>

<body id="indexbody">
  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="mindex.php">Aux Trois Fleurs</a>
    </div>
   <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Accueil</a></li>
      <li><a href="mplantes.php">Plantes</a></li>
      <li><a href="mfleurs.php">Fleurs</a></li>
      <li><a href="mcompositions.php">Compositions</a></li>
      <li><a href="formulaire.php">Nous Contacter</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="moncompte.php"> Mon compte</a></li>
      <li><a href="logout.php"> D&eacute;connexion</a></li>
      <li><a href="panier.php">Panier</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top: 40px">
<ul>
 <?php
    $pdo = new PDO("mysql:host=localhost;dbname=aux3fleurs",'root','');
    $ps=$pdo->prepare("SELECT * FROM compositions");    
    $ps->execute();
  
  
    while($prd= $ps->fetch()) {?>
        <li> 
       <div class='card'>
     
       <div id="couvre">
   
   <img src="<?php echo $prd['image']?>" alt="Avatar" style="width:100%">
    </div> 
    <?php echo '<span><i>'.$prd['description'].'</i>'; ?>
    <br>
    <?php echo '<i>'.$prd['prix'].' €</i></span>'; ?>
  <div class="container">
    <?php echo '<i>'.$prd['nom'].'</i>'; ?>
    <a href="panier.php?action=ajout&amp;l=<?php echo $prd['nom']?>&amp;q=<?php echo 1 ?>&amp;p=<?php echo $prd['prix']?>"><img src="fleurs/panier.png" style="height: 30px"/></a>
    </div>
    </div>
    </li>
    
    <?php } ?>
</ul>
</body>       


 
<footer class="footer-bs">
        <div class="row">
          <div class="col-md-3 footer-brand animated fadeInLeft">
              <h2>Aux Trois Fleurs</h2>
                <p>Votre magasin de fleurs en ligne.</p>
                <p>© 2017, Tous droits réservés</p>
            </div>
          <div class="large footer-nav animated fadeInUp">
              <h4>Menu </h4>
              <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="mindex.php">Accueil</a></li> <br>
                        <li><a href="mplantes.php">Plantes</a></li> <br>
                        <li><a href="mfleurs.php">Fleurs</a></li> <br>
                        <li><a href="mcompositions.php">Compositions</a></li> <br>
                         <li><a href="mcontact.php">Contact</a></li>
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="apropos.php">A propos</a></li>
                        <li><a href="CGU.php">CGU</a></li>
                        <li><a href="pdc.php">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                </ul>
            </div>
          <div class="col-md-3 footer-ns animated fadeInRight">
              <h4>Newsletter</h4>
                <p>Tenez-vous au courant des dernières informations du site.</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div>
                 </p>
            </div>
        </div>
    </footer>

</body>
</html>
