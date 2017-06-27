 <?php
if (isset($_POST['submit'])) {                   
$titre = $_POST['titre'];
$description = $_POST['description'];
$auteur = $_POST['auteur'];
$pseudo = $_POST['pseudo'];
$date_publication = $_POST['date_publication'];
$theme = $_POST['theme'];
$langue = $_POST['langue'];
$mail= $_POST['mail'];
$editeur= $_POST['editeur'];
$conception_graph= $_POST['conception_graph'];
echo '<br>' .$langue. '</br>';
echo '<br>' .$date_publication. '</br>';
echo '<br>' .$pseudo. '</br>';
echo '<br>' .$theme. '</br>';
echo '<br>' .$auteur. '</br>';
echo '<br>' .$mail. '</br>';
echo '<br>' .$editeur. '</br>';
echo '<br>' .$conception_graph. '</br>';
echo '<br>' .$description. '</br>'; }

if(isset($_FILES['scan']['name']))  {
  // on récupère les infos :
    $fichier_temp = $_FILES['scan']['tmp_name'];
    $fichier_nom = $_FILES['scan']['name'];
list($fichier_larg, $fichier_haut, $fichier_type, $fichier_attr) = getimagesize($fichier_temp);
    $fichier_poids_max = 500000;
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
            echo '<a href="' .$fichier_dossier. $fichier_n_nom . '"><img src="'  .$fichier_dossier. $fichier_n_nom . '"></a><br />';
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
    }}
    else
    echo "Pas de fichier à uploader<br />";


   /////DEUX IMAGES :

  $file_count = count($_FILES['deuximages']['name']);
	
	echo $file_count . " file(s) sent... <BR><BR/>";
    
    if(count($_FILES['deuximages']['name']) > 0){
        
for($i=0; $i<count($_FILES['deuximages']['name']); $i++) {
    
    //Get the temp file path
    $tmpFilePath = $_FILES['deuximages']['tmp_name']["$i"];
    $nom_plus = $_FILES['deuximages']['name']["$i"];

    //Make sure we have a filepath
    if($tmpFilePath != ""){
 //save the filename
        
    
    // renomme toi de manière chelou :
//   $extension = substr($nom_plus, strrpos($nom_plus, '.') + 1);
//   $file_date = date("ymdhis");
//   $shortname = $file_date . "." . $extension;
//        
     //   $extension = end(explode(".", $_FILES["contenu"]["name"]));
     
$extension = end(explode(".", $_FILES['deuximages']['name']["$i"]));

$shortname = date("ymdhis").$nom_plus.'.'.$extension;
    
    
    //$_FILES['imageplus']['name'][$i];

//save the url and the file
$filePath = "formulaire_deuximages/" ;
    //. date('d-m-Y-H-i-s').'-'.$_FILES['imageplus']['name'][$i];

//Upload the file into the temp dir
//if(move_uploaded_file($tmpFilePath, $filePath)) {
    
if (move_uploaded_file($_FILES['deuximages']['tmp_name']["$i"], $filePath . $shortname)) {
    
    $count++;
    
//$query  = "UPDATE INTO article(imageplus)";
//$query .= "VALUES ('$filePath.$shortname')";
//$result = mysqli_query($link, $query);
    
     echo "Le fichier a été uploadé avec succès<br /><br />";
            echo '<a href="' .$filePath . $shortname . '"><img src="'  .$filePath . $shortname . '"></a><br />';
            echo $_FILES['deuximages']['tmp_name']["$i"];
            
            }
            else
            echo "Le fichier n'a pas pu être uploadé<br />";
        }
  
}} 
    
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
$query  = "INSERT INTO information(id, titre, description, pseudo,auteur,theme, langue, mail, conception_graph, editeur, scan, date_publication, deuximages )";
$query .= "VALUES ('','$titre','$description','$pseudo','$auteur', '$theme', '$langue', '$mail','$conception_graph','$editeur', '$fichier_n_nom', '$date_publication', '.$filePath . $shortname .')";
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
