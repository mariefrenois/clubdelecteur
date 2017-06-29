<!DOCTYPE html>

<html lang="fr">
    <head>
    	<title>titre</title>
    	<meta charset= "UTF-8" />
               <link rel="stylesheet" type="text/css" href="css/style_flux.css">
         <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    </head>
    <body>
        
        
    	   	<?php
        

        
$db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
      

     

 //$audio = $_GET['audio'];

      //  echo $_GET['auteur'];
    	//faire une requête pour récupérer des éléments de la db
        
		foreach($db->query("SELECT * FROM information WHERE audio IS NOT NULL AND audio != ''") as $result){
		//echo '<h5>'.$result['langue'].'</h5>';
      
         echo '<div class="col-md-3">';
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
          echo '<div class="slips">', $result['titre'],'<h4>'.$result['auteur'].'</h4>','<div class="index">',  $result['id'],'</div>','</div>';
        echo '</a>';
echo '</div>';
          }    


		?>
    

    </body>
 </html>
