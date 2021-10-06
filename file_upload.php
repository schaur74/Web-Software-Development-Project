<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $upload_dir= "uploads"; // match your system file path to your uploads directory
  $tmp_name= $_FILES["fileToUpload"]["tmp_name"];
  $name = basename($_FILES["fileToUpload"]["name"]); // ignore path info in filename
  move_uploaded_file($tmp_name, "$upload_dir/$name");
  header("Location: schauer_Towers_Careers.php");
}
?>
