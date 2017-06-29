<!DOCTYPE html>

<html lang="fr">
    <head>
    	<title>article</title>
    	<meta charset= "UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style_article.css">
         <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        
        
    	   	<?php
        

        
$db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
      

     

 $id = $_GET['id'];

    	//faire une requête pour récupérer des éléments de la db
		foreach($db->query("SELECT * FROM information WHERE id='$id'") as $result){
		        
        echo '<div class="col-md-8">';
        echo '<div class=header>';    
        echo '<h1>'.$result['titre'].',</h1>';
        echo '</div>';
        echo '<div class=header>'; 
        echo '<h2>'.$result['auteur'].'</h2>';
        echo '</div>';
        echo '<div class=header>';    
        echo '<h2>/</h2>';
        echo '</div>';            
        echo '<div class=header>';
        echo '<h2>'.$result['date_publication'].'</h2>';
        echo '</div>';
            if($result['scan'] != null){
                echo '<img   src="./formulaire_files/';
                echo $result['scan'];
                echo '"/>';        
            }
            if($result['deuximages'] != null){
        
                echo '<img   src="./formulaire_deuximages/';
                echo $result['deuximages'];
                echo '"/>';    
            }
        echo '</div>';    
            
        echo '<div class="col-md-4">'; 
        echo '<h5>'.$result['description'].'</h5>';
        echo '<div id="vide"></div>';
        echo '<div class=soustitre>';    
        echo '<h3> Éditeur :</h3>';  
        echo '</div>';              
        echo '<h3>'.$result['editeur'].'</h3>';
        echo '<div class="soustitre">';    
        echo '<h3>Conception graphique :</h3>';  
        echo '</div>';            
        echo '<h3>'.$result['conception_graph'].'</h3>';
        echo '<div class="soustitre">';    
        echo '<h3>Langue :</h3>';  
        echo '</div>';             
        echo '<h3>'.$result['langue'].'</h3>';
        echo '<div class="soustitre"><h3>Thème(s) associé(s): </h3></div><h3>'.$result['theme'].', '.$result['theme2'].', '.$result['theme3'].'</h3>';
        echo '<br>';
        echo '<h3>Déposé par : '.$result['pseudo'].' le '.$result['date_ajout'].'</h3> ';    

            
        echo '<p>'.$result['texte_brut'].'</p>';
        echo '</div>' ;   
            
        }

		?>
    

    </body>
 </html>
