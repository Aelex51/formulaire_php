<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="thanks.php"  method="post">

      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="nom">

      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="prenom">

      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="email"  name="email">

      <label  for="phoneNumber">Number :</label>
      <input type="tel" id="phone" name="phone">
   
      <label for="sujet">Select an option: </label>
      
      <select name="sujets" id="sujets">
        <option value="Please choose an option">--Please choose an option--</option>
        <option value="réclamations">réclamation</option>
        <option value="suggestions">suggestion</option>
        <option value="SAV"> demande de SAV</option>
      </select>
      
      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" cols="50">
      </textarea>
    
      <button type="submit" name="submit">Submit</button>
    <?php
      
    ?>
  </form>
</body>
</html>
