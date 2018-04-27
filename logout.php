<?php
session_start();
$_SESSION = array();
session_destroy();
sleep(5);
?>

<html>
<head>
  <script>setTimeout(function(){window.location.href='index.php'},3000);</script>
</head>
<body>
Vous allez être redirigé sur la page d'accueil.
</body>
</html>


