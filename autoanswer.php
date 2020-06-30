<?php
// Initialize the session
//this file is not required for distribution
//this file is for code testing purposes
//it is used to set all answers of a user to a specific answer 
session_start();
if(isset($_GET["query"])){
 require_once "config.php";
$sql = $_GET["query"];
if (mysqli_query($link, $sql)) {
    echo "SQL Query Succeeded:".$sql;
}   
}
else{
require_once "config.php";
for ($x = 1; $x <= 90; $x++) {
      $uniq = $_SESSION["id"]."uniq".$x;
$sql = "INSERT INTO answer (id, qn, answer,uniq)
VALUES ('".$_SESSION["id"]."', '".$x."', 'Q_A','".$uniq."')";

if (mysqli_query($link, $sql)) {
    echo "SQL Query Succeeded:".$sql;
} 
sleep(0.2);
}

mysqli_close($conn); 
}