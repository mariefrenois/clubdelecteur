 <?php

if (isset($_POST['submit'])) {                   
$titre = $_POST['titre'];
$description = $_POST['description'];
$auteur = $_POST['auteur'];
$pseudo = $_POST['pseudo'];
$theme = $_POST['theme'];
$langue = $_POST['langue'];
echo '<br>' .$langue. '</br>';
echo '<br>' .$pseudo. '</br>';
echo '<br>' .$theme. '</br>';
}


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
$query  = "INSERT INTO information(id, titre, description, pseudo,auteur,theme, langue)";
$query .= "VALUES ('','$titre','$description','$pseudo','$auteur', '$theme', '$langue')";




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




  
   