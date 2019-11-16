<?php

include("functions.php");

$id=$_REQUEST['id'];
$query = "DELETE FROM food WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>