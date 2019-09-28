<?php
include 'connect.php';

$prop_id = $_GET[prop_id];
echo $prop_id;
$sql= "DELETE FROM `books` WHERE `books`.`book_id` = '$prop_id'" ;
$sqlrun = mysqli_query($conn,$sql);
echo '<script LANGUAGE="JavaScript">
window.alert("book details removed successfully");
window.location.href="dashlibrarian.php";
</script>'
  // header("Location: dashlibrarian.php");


?>
