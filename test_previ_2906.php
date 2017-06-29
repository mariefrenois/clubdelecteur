<?php



if (isset($_POST['submit'])) { 
    
$titre = $_POST['titre'];
$esc_titre = mysql_escape_string($titre);
$description = $_POST['description'];
$esc_description = mysql_escape_string($description);
$auteur = $_POST['auteur'];
$esc_auteur = mysql_escape_string($auteur);
$pseudo = $_POST['pseudo'];
$esc_pseudo = mysql_escape_string($pseudo);
$date_publication = $_POST['date_publication'];
$theme = $_POST['theme'];
$theme2 = $_POST['theme2'];
$theme3 = $_POST['theme3'];
$esc_theme = mysql_escape_string($theme);
$esc_theme2 = mysql_escape_string($theme2);
$esc_theme3 = mysql_escape_string($theme3);    
$langue = $_POST['langue'];
$mail= $_POST['mail'];
$editeur= $_POST['editeur'];
$esc_editeur = mysql_escape_string($editeur);
$conception_graph= $_POST['conception_graph'];
$esc_conception_graph = mysql_escape_string($conception_graph);
//$escaped_item= $_POST['texte_brut'];
$text_brut = $_POST['texte_brut'];
$esc_text = mysql_escape_string($text_brut);
//printf("Chaîne protégée : %s\n", $escaped_item);
    
    
echo '<br>' .$langue. '</br>';
echo '<br>' .$date_publication. '</br>';
echo '<br>' .$esc_pseudo. '</br>';
echo '<br>' .$esc_theme. '</br>';
echo '<br>' .$esc_theme2. '</br>';
echo '<br>' .$esc_theme3. '</br>';    
echo '<br>' .$esc_auteur. '</br>';
echo '<br>' .$mail. '</br>';
echo '<br>' .$esc_editeur. '</br>';
echo '<br>' .$esc_conception_graph. '</br>';
echo '<br>' .$esc_description. '</br>';
echo '<br>' .$esc_text. '</br>';
}




if(isset($_FILES['scan']['name']) && file_exists($_FILES['scan']['name']))  {
  // on récupère les infos :
    $fichier_temp = $_FILES['scan']['tmp_name'];
    $fichier_nom = $_FILES['scan']['name'];
list($fichier_larg, $fichier_haut, $fichier_type, $fichier_attr) = getimagesize($fichier_temp);
    $fichier_poids_max = 10000000;
    $fichier_h_max = 2448;
    $fichier_l_max = 3264;
 $fichier_dossier = 'formulaire_files/' ;
    echo "L'envoi a bien été effectué !";

    $fichier_ext = substr($fichier_nom, strrpos($fichier_nom, '.') + 1);
    $fichier_date = date("ymdhis");
    $fichier_n_nom = $fichier_date . "." . $fichier_ext;

    if (isset($fichier_temp) && is_uploaded_file($fichier_temp)) {
// on vérifie le poids du fichier
    if (filesize($fichier_temp) < $fichier_poids_max) {
         
// types de fichiers autorises 1=gif / 2=jpg / 3=png
 if (($fichier_type === 1) || ($fichier_type === 2) || ($fichier_type === 3)) {
// on vérifie si l'image n'est pas trop grande
 if (($fichier_larg <= $fichier_l_max) && ($fichier_haut <= $fichier_h_max)) {
// si le fichier est ok, on l'upload sur le serveur
            if (move_uploaded_file($_FILES['scan']['tmp_name'], $fichier_dossier . $fichier_n_nom)) {
                
            echo "Le fichier a été uploadé avec succès<br /><br />";
            echo '<a href="' .$fichier_dossier. $fichier_n_nom . '"><img src="'  .$fichier_dossier. $fichier_n_nom . '"/></a><br />';
            echo $_FILES['scan']['tmp_name'];
                 
            }
            else
            echo "Le fichier n'a pas pu être uploadé<br />";
        }
        else
            echo "Le fichier est trop grand<br />";
        }
        else
        echo "Le fichier n'a pas le bon format<br />";
    }
    else
        echo "Le fichier est trop lourd<br />";
    }
    }
    else {
        echo "Pas de fichier à uploader<br />";    
    }
    


   /////DEUX IMAGES :


if(isset($_FILES['deuximages']['name']) && file_exists($_FILES['deuximages']['name']))  {
  // on récupère les infos :
    $img_temp = $_FILES['deuximages']['tmp_name'];
    $img_nom = $_FILES['deuximages']['name'];
list($img_larg, $img_haut, $img_type, $img_attr) = getimagesize($img_temp);
    $img_poids_max = 10000000;
    $img_h_max = 2448;
    $img_l_max = 3264;
 $img_dossier = 'formulaire_deuximages/' ;
    echo "L'envoi a bien été effectué !";

    $img_ext = substr($img_nom, strrpos($img_nom, '.') + 1);
    $img_date = date("ymdhis");
    $img_n_nom = $img_date . "." . $img_ext;

    if (isset($img_temp) && is_uploaded_file($img_temp)) {
// on vérifie le poids du fichier
    if (filesize($img_temp) < $img_poids_max) {
         
// types de fichiers autorises 1=gif / 2=jpg / 3=png
 if (($img_type === 1) || ($img_type === 2) || ($img_type === 3)) {
// on vérifie si l'image n'est pas trop grande
 if (($img_larg <= $img_l_max) && ($img_haut <= $img_h_max)) {
// si le fichier est ok, on l'upload sur le serveur
            if (move_uploaded_file($_FILES['deuximages']['tmp_name'], $img_dossier . $img_n_nom)) {
                
            echo "Le fichier a été uploadé avec succès<br /><br />";
            echo '<a href="' .$img_dossier. $img_n_nom . '"><img src="'  .$img_dossier. $img_n_nom . '"/></a><br />';
            echo $_FILES['deuximages']['tmp_name'];
                 
            }
            else
            echo "Le fichier n'a pas pu être uploadé<br />";
        }
        else
            echo "Le fichier est trop grand<br />";
        }
        else
        echo "Le fichier n'a pas le bon format<br />";
    }
    else
        echo "Le fichier est trop lourd<br />";
    }}
    else
    echo "Pas de fichier à uploader<br />";

  
    
/**
  * Connect to the database
  * http://php.net/manual/en/mysqli.real-connect.php
*/
$user = 'root';
$pass = 'root';
$db   = 'club';
$host = 'localhost';
$port = 8889;
$link = mysqli_init();
if (!$link) {
    die('mysqli_init failed');
}
if (!$link->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}
if (!$link->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}
if (!$link->real_connect(
  $host,
  $user,
  $pass,
  $db
)) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
// Quick test
// echo 'Success... ' . $link->host_info . "\n";
$connection = $link->real_connect(
  $host,
  $user,
  $pass,
  $db
);
/**
  * More testing
*/
// echo '$link: '; print_r($link); echo "\n";
// echo '$connection: '; print($connection); echo "\n";
// echo '$connection _r: '; print_r($connection); echo "\n";
if (!$connection) {
  die('Database connection failed.');
}
/**
  * Insert data into table
*/
$query  = "INSERT INTO information(id, titre, description, pseudo,auteur,theme, theme2, theme3, langue, mail, conception_graph, editeur, texte_brut, scan, date_publication, deuximages )";
$query .= "VALUES ('','$esc_titre','$esc_description','$esc_pseudo','$esc_auteur', '$esc_theme','$esc_theme2','$esc_theme3', '$langue', '$mail','$esc_conception_graph','$esc_editeur','$esc_text','$fichier_n_nom', '$date_publication', '$img_n_nom')";
//$tmpFilePath
    //  '$filePath.$shortname',
// $result = mysqli_query($connection, $query);
$result = mysqli_query($link, $query);
if (!$result) {
  die('Error: ' . mysqli_error($link));
}
/**
  * Close connection
*/
$link->close();
?>
