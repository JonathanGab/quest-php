<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="form.css">
</head>

<body>
  <div class="App">
    <form action="thanks.php" method="post">
      <div class='form'>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" />
      </div>
      <div class='form'>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname" />
      </div>
      <div class='form'>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" />
      </div>
      <div class='form'>
        <label for="telephone">Numéro de Téléphone :</label>
        <input type="tel" id="telephone" name="user_phone" />
      </div>
      <div class="form">
        <label for="objet">Sujet : </label>
        <select name="objet" id="objet">
          <option value="rdv">Rendez-vous</option>
          <option value="devis">Devis</option>
          <option value="info">Info</option>
          <option value="divers">Divers</option>
        </select>
      </div>
      <div class='form'>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
      </div>
      <div class='button'>
        <button type="submit">Envoyer votre message</button>
      </div>
    </form>
  </div>
</body>

</html>