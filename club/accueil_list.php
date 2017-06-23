<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="column1">
        <div class="titrage">titre :</div>
<?php
    
//pour page d'acceuil
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result){
                 echo '<div class="slips">'.$result['titre'].'</div>';}
?>
        
      </div>
        
            <div id="column2">
        <div class="titrage">auteur :</div>
<?php
    
//pour page d'acceuil
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result){
                 echo '<div class="slips">'.$result['auteur'].'</div>';}
?>
        
      </div>


            
            
 
    </body>
</html>


