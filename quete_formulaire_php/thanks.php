<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$getSujet = $_POST['sujets'];
$number = $_POST['phone'];
$message = $_POST['message'];


/*if(isset($_POST['submit'])){*/
    $getSujet = $_POST['sujets'];
    echo 'merci de ' .  $getSujet;
/*};*/


echo $getSujet;
echo '<h3>Informations récupérées en utilisant POST</h3>';
echo 'Merci'." ". $prenom ." ". $nom . " ". 'de nous avoir contacté à propos de votre'." ". $getSujet . '<br />';

echo 'Un de nos conseillers vous contactera soit à l’adresse' . " ". $email . " " .  'ou par téléphone au' . " " . $number . " " . 'dans les plus brefs délais pour traiter votre demande :'. '<br />';

echo $message;

?>