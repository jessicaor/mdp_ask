<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <title>codes d'accés NASA</title>
  </head>
  <body>

    <?php 
    if($_POST['mdp'] == 'kangourou')
    {
    
     echo '<h1>Code d\'accés</h1>';
    
    }else{
        echo '<p>mot de passe incorrect</p>';
    }
    ?>
    

  </body>
 </html>