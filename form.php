!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <label  for="telephone">N° de téléphone :</label>
    <input  type="text"  id="telephone"  name="user_telephone">
    </div>
    
    <div>
    <label for="choix-sujet">Choisissez un sujet:</label>
<select name="sujets" id="choix-sujet">
    <option value="ecologie">Ecologie</option>
    <option value="politique">Politique</option>
    <option value="Economie">Economie</option>
    <option value="Santé">Santé</option>
</select>
</div>

<div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  </body>
</html>
