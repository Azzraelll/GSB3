<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GSB 3</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <?php
      echo validation_errors();
      echo form_open('Controleur/login');
      echo form_label('Nom :');
      echo form_input('nom', set_value('nom'));
      echo br(2);
      echo form_label('Mot de passe :');
      echo form_password('mdp', set_value('mdp'));
      echo br(2);
      echo form_submit('valider','Valider');
      echo form_close();
      echo br(1);
    ?>
  </body>
</html>
