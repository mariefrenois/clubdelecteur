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
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['titre'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column2">
        <div class="titrage">auteur :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['auteur'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column3">
        <div class="titrage">date de publication :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['date_publication'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column4">
        <div class="titrage">date d'ajout :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['date_ajout'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column5">
        <div class="titrage">langue :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['langue'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column6">
        <div class="titrage">conception graphique :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['conception_graph'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column7">
        <div class="titrage">thématique :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['theme'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div id="column7">
        <div class="titrage">taille de fichier :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<a href="article.php/';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">';
        echo $result['titre'];
        echo '</a>';
        echo '</div>';}
    ?>
        
        </div>
        <div class="titrage">type de fichier/scan :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<div class="slips">'.$result['theme'].'</div>';}
    ?>
        
        <div class="titrage">type de fichier/texte brut :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<div class="slips">'.$result['theme'].'</div>';}
    ?>
        
        <div class="titrage">type de fichier/audio :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<div class="slips">'.$result['theme'].'</div>';}
    ?>
        


            
            
 
    </body>
</html>
