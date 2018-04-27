<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aux Trois Fleurs</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body id="indexbody">


<body id="indexbody">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Aux Trois Fleurs</a>
    </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Accueil</a></li>
      <li><a href="plantes.php">Plantes</a></li>
      <li><a href="fleurs.php">Fleurs</a></li>
      <li><a href="compositions.php">Compositions</a></li>
      <li><a href="formulaire.php">Nous Contacter</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signin.php">S'inscrire</a></li>
      <li><a href="connexion.php"> Connexion</a></li>
    </ul>
  </div>
</nav>

<form id="connexion" action="creeCompte.php" method="post"> <!-- formulaire d'inscription-->
   
<fieldset>
    <legend> <i> Données de Connection </i> </legend>
        <label for="login">Identifiant<br />
        <input type="text" name="username" id="username" size="20" /></label>
    </p> 
    <p>
        <label for="pwd">Mot de passe<br />
        <input type="password" name="password" id="password" size="20" /></label>
    </p>

</fieldset> 
        
      <div align="center">
        <input type="checkbox" name="choix" value="Accept" />J'accepte les conditions de l'inscription <br>
        <input type="submit" name="inscription" value="inscription">      
      </div>
        
</form>



 
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
                        <li><a href="index.php">Accueil</a></li> <br>
                        <li><a href="plantes.php">Plantes</a></li> <br>
                        <li><a href="fleurs.php">Fleurs</a></li> <br>
                        <li><a href="compositions.php">Compositions</a></li> <br>
                         <li><a href="contact.php">Contact</a></li>
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
