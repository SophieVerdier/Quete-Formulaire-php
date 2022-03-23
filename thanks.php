<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
$username = $_POST['user_name'];
$useremail = $_POST['user_email'];
$telephone = $_POST['user_telephone'];
$sujet = $_POST['sujets'];
$message = $_POST['user_message'];

echo 'Merci '.$username .' de nous avoir contacté à propos de '. $sujet. '<br/>';

echo 'Un de nos conseillers vous contactera soit à l’adresse '. $useremail. ' ou par téléphone au '. $telephone. ' dans les plus brefs délais pour traiter votre demande : '.
$message;

?>

</body> 
</html>  
