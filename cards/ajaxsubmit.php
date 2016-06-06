<?php
$con = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server..

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$db = mysqli_select_db($con, "damage_counter"); // Selecting Database
//Fetching Values from URL
$name2=mysqli_real_escape_string($con, $_POST['name1']);
$faction2=mysqli_real_escape_string($con, $_POST['faction1']);
$game2=mysqli_real_escape_string($con, $_POST['game1']);

//Insert query
$query = mysqli_query($con, "INSERT INTO card_list(name, faction, game) VALUES ('$name2', '$faction2', '$game2')");
echo "Form Submitted Succesfully";
mysqli_close($con); // Connection Closed
?>