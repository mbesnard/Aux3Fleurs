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
  <title>Aux Trois Fleurs - Fleurs</title>
  
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

<div id="contenu" align="center"> 
    <p> <br> Le directeur Mr Blaise vous souhaite la bienvenue sur le site de "Aux Trois Fleurs". </br>
    <br> Veuillez trouver ici nos magasins, où vous pourrez trouver nos professionnels pour vos differents évènements... </br> </p>

    <div id="tableau">
        <br> <strong> Au Bouton D'Or </strong> </br>  <!-- adresse du magasin avec une carte Google MAPS -->
         84 Rte Beauvallon 
        <br> 26000 VALENCE </br> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.154660243822!2d4.885484451402342!3d44.89984947883948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5580698598377%3A0x8eac8e10a32c2fb0!2s84+Chemin+de+Valence-sur-Rh%C3%B4ne+%C3%80+Beauvallon%2C+26000+Valence!5e0!3m2!1sfr!2sfr!4v1484207324813" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
    
       <div id="tableau">
        <br> <strong>Nervure</strong> </br>
          2 Bis Av St Roch
         <br> 38000 GRENOBLE </br> 
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.7259480906137!2d5.736279751409123!3d45.19264355943998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af4f5fc4f49b7%3A0x7614d92c982aea6d!2s2+Avenue+Saint-Roch%2C+38000+Grenoble!5e0!3m2!1sfr!2sfr!4v1484207390052" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
      
        <div id="tableau">
            <br> <strong> Planet'Flor </strong> </br>
       7 Quai Des Céléstins
        <br> 62002 LYON </br> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.5402470925187!2d4.828608351419393!3d45.76036222155061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea5493c865d3%3A0x27caff356aee3962!2s7+Quai+des+C%C3%A9lestins%2C+69002+Lyon!5e0!3m2!1sfr!2sfr!4v1484207452390" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
    
        <div id="tableau">
            <br> <strong>D'une Fleur à L'autre</strong> </br>
        35 Rue Jean Pierre Veyrat 
        <br> 73000 CHAMBERY </br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.211123683125!2d5.915666851417939!3d45.566192834550094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8f8aa006995%3A0xcb3da2cfe8effdb0!2s35+Rue+Jean+Pierre+Veyrat%2C+73000+Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1484207535015" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
      
        <div id="tableau">
            <br> <strong> L'Atelier Du Rêve </strong> </br>
        32 Rue Gambetta 
        <br> 73200 ALBERVILLE </br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.64913115144!2d6.389136751420573!3d45.677943627073525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478bc3055f8f7987%3A0x771822a8a0b02174!2s32+Rue+Gambetta%2C+73200+Albertville!5e0!3m2!1sfr!2sfr!4v1484207585847" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>

        <div id="tableau">
            <br> <strong> Alp'Flor </strong> </br>
          46 Av Genève
        <br> 74000 ANNECY </br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2775.840038222628!2d6.121906251426141!3d45.914507911200666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b8f8a6f3958f7%3A0x21c1dffd2ebca253!2s46+Avenue+de+Gen%C3%A8ve%2C+74000+Annecy!5e0!3m2!1sfr!2sfr!4v1484207639818" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
   
</div> 
 

 
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
