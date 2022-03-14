<h5>
  Merci <?php echo (string)$_POST['user_name']; ?> <?php echo (string)$_POST['user_firstname']; ?> de nous avoir contacté à propos de <?php echo (string)$_POST['objet']; ?>.
</h5>

<p>Un de nos conseiller vous contactera soit à l’adresse <?php echo (string)$_POST['user_email']; ?> ou par téléphone au <?php echo (string)$_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande : </p>
<p><?php echo (string)$_POST['user_message']; ?></p>