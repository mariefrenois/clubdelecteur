<html>
    <head>
        <title>FLUX</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
      

<?php
    
//pour page d'acceuil
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT titre,auteur, theme, pseudo, langue FROM information') as $result){


   //  echo '<img src="./uploads/';
   //  echo $result['cover'];
  //   echo '">';

    echo '<h1>'.$result['titre'].'</h1>';
    echo '<h2>'.$result['auteur'].'</h2>';
    echo '<h2>'.$result['theme'].'</h2>';
    echo '<h2>'.$result['pseudo'].'</h2>';
    echo '<h5>'.$result['langue'].'</h5>';    
        
    }
    



?>

            
            
 
    </body>
</html>



