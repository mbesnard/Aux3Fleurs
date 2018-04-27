<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Aux Trois Fleurs</title>
   <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade" rel="stylesheet"> <!-- google font pr bienvenue-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/caroussel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
</head>

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

  <div id="contenu"> 

            <p align="center"> <U>Formulaire de Contact : </U>  <br> Vous souhaitez nous contacter (pour une question, un souhait, une commande ou une remarque) ?</br> 
          <br> Utilisez le formulaire ci-dessous et nous vous répondrons le plus vite possible ! </br> </p>   
      <form method="post" action="traitement.php">

        <label for="prenom"> Société : </label>
        <input type="text" name="societe" id="societe" placeholder="Ex : Aux 3 Fleurs" size="20" maxlength="30"/><br><br>

        <label for="nom"> Nom* : </label>
        <input type="text" name="nom" id="nom" placeholder="Ex : Blaise" size="30" maxlength="20" autofocus  required/><br><br>
      
        <label for="prenom"> Prénom* : </label>
        <input type="text" name="prenom" id="prenom" placeholder="Ex : Pascal" size="30" maxlength="20" required/><br><br>

        <label for="email"> @ mail : </label><input type="text" name="email" placeholder="Ex : aux3@fleurs.fr" size="20" maxlength="50"/><br><br>

        <label for="tel"> Téléphone : </label> <input type="tel" name="tel" placeholder="Ex : 0120304050" size="20" maxlength="14"/><br><br>
        
        <label for="objet"> Objet* : </label>
        <input type="text" name="objet" id="objet" placeholder="Ex : Objet" size="30" maxlength="20" required/><br><br>
          
        <label for="message"> Votre Message* : </label>
        <textarea name="message" id="message" required ></textarea><br><br> 

        <p> * champs obligatoires </p>

      <input type="submit" value="Envoyer">   
      <input type="reset" value="Annuler">

<p> Merci de votre visite et à bientôt ! </p>

      </form>
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
