<!DOCTYPE html>
<html>
    <head>
    	<title>article</title>
    	<meta charset= "UTF-8" />


    </head>
    <body>
    	<?php
        
        $id = $_GET["id"];

        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
        
      ?>
      <?php
        
        foreach($db->query("SELECT * FROM information WHERE id='$id'") as $result){
        echo '<h1>'.$result['titre'].'</h1>';
        echo '<h2>'.$result['auteur'].'</h2>';
        echo '<h2>'.$result['theme'].'</h2>';
        echo '<h2>'.$result['pseudo'].'</h2>';
        echo '<h5>'.$result['langue'].'</h5>'; 

        }
		

		  ?>

        je comprends pas pourquoi ca s'affiche pas ¯\_(ツ)_/¯ 

    </body>
 </html>
