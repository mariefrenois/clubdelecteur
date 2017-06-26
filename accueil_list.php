<html>
    <head>
        <title>home_list</title>
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="menu">
        <a href="formulaire.html">DÉPOT</a>
            <a href="apropos.html">À PROPOS</a>
        </div>
        <div id="column1">
        <div class="titrage">
            <a href="titre_flux.php">
            titre :
            </a>
            </div>
    <?php
    
//pour page d'acceuil
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
     
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY titre ORDER BY titre') as $result)
      {
       echo '<a href="titre.php?titre=';
        echo $result['titre'];
        echo '">';
        echo '<div class="slips">', $result['titre'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
         }  ?> </div>
        
        <div id="column2">
        <div class="titrage"> <a href="auteur.php">auteur :</a></div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY auteur ORDER BY auteur') as $result)
        {
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">', $result['auteur'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
        
    }
    ?>
        
        </div>
        <div id="column3">
        <div class="titrage"><a href="date_publication.php">publié le :</a></div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY date_publication ORDER BY date_publication') as $result)
         {
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">', $result['date_publication'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
        
    }
    ?>
        
        </div>
        
        <div id="column4">
        <div class="titrage">ajouté le :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY date_ajout  ORDER BY date_ajout') as $result)
         {
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">', $result['date_ajout'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
        
    }
    ?>
        </div>
        <div id="column5">
        <div class="titrage">langue :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY langue ORDER BY langue') as $result)
          {
       echo '<a href="langue.php?langue=';
        echo $result['langue'];
        echo '">';
        echo '<div class="slips">', $result['langue'],'</div>';
  echo '</a>';
         }
    ?></div>
        
        <div id="column6">
        <div class="titrage">conception graphique :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY conception_graph ORDER BY conception_graph ') as $result)
             {
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">', $result['conception_graph'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
         }
    ?></div>
        <div id="column7">
        <div class="titrage">thématique :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY theme ORDER BY theme') as $result)
              {
       echo '<a href="theme.php?theme=';
        echo $result['theme'];
        echo '">';
        echo '<div class="slips">', $result['theme'],'</div>';
  echo '</a>';
         }
    ?></div>
        <div id="column8">
        <div class="titrage">pseudo :</div>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    
    //faire une requête pour récupérer des éléments de la db
    foreach($db->query('SELECT * FROM information GROUP BY pseudo ORDER BY pseudo') as $result)
             {
       echo '<a href="pseudo.php?pseudo=';
        echo $result['pseudo'];
        echo '">';
        echo '<div class="slips">', $result['pseudo'],'</div>';
  echo '</a>';
         }
    ?></div>
            <div id="column9">
        <div class="titrage">fichiers scan :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
             {
       echo '<a href="article.php?id=';
        echo $result['id'];
        echo '">';
        echo '<div class="slips">', $result['scan'],'<div class="index">', $result['id'],'</div>','</div>';
  echo '</a>';
         }
    ?></div>
            <div id="column10">
        <div class="titrage">fichiers texte brut :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<div class="slips">'.$result['theme'].'</div>';}
    ?>
        </div>
            <div id="column11">
        <div class="titrage">fichiers audio :</div>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=club', 'root', 'root');
    foreach($db->query('SELECT * FROM information') as $result)
        {
        echo '<div class="slips">'.$result['theme'].'</div>';}
    ?>
        </div>


            
            
 
    </body>
</html>
