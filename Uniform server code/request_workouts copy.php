<?php 

header('Access-Control-Allow-Origin: *');
// echo("hello");


$servername = "localhost";
$username = "hiit_app_db_user";
$password = "jFL/c-3z+tq2wG%";
$dbname = "hiit_appDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Workouts WHERE published = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
  // output data of each row
  $workout_array=array();
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. "  " . $row["thumbnail_link"]. " " . $row["exercise_name"]. " " . $row["description"]. "<br>";
    $workout_array[]=$row;

  }
  echo(json_encode($workout_array));
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
