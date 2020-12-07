<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "hiit_app_db_user";
$password = "jFL/c-3z+tq2wG%";
$dbname = "hiit_appDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  $sql = "SELECT * FROM Workouts";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) >= 0) { 
    // output data of each row
    $workout_array=array();
    while($row = mysqli_fetch_assoc($result)) {
      // echo "id: " . $row["id"]. "  " . $row["thumbnail_link"]. " " . $row["exercise_name"]. " " . $row["description"]. "<br>";
      $workout_array[]=$row;

    }
}



    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="server.css">
    <link rel="stylesheet" href="bootstrap_tabs.css">
    <script src="server.js"></script>
    <script src="bootstrap_tabs.js"></script>
    <link rel="stylesheet" href="server.css">
</head>
<body onload="onload()">
    <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'workouts')">workouts</button>
    <button class="tablinks" onclick="openCity(event, 'create')">create workout</button>
    <button class="tablinks" onclick="openCity(event, 'edit')">edit workout</button>
  
    </div>

    <!-- Tab content -->
    <div id="create" class="tabcontent">
        <h3>create workout</h3>
        <form action="" class="grid_1">
            <h3>create new workout</h3>
            <input type="text">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <select name="" id="">
                <option value="1">published</option>
                <option value="0">private</option>
            </select>
            <input type="file">
            <input type="submit">
        </form>
    </div>



    <div id="edit" class="tabcontent">
    <h3>edit workout</h3>
    <p>.</p>
    </div>

    <div id="workouts" class="tabcontent">
    <h3>All workouts</h3>
        <div class = "workout_list">
            <?php foreach($workout_array as $each_workout)  { ?>
                <div class = "workout_box">
                   <div class = "workout_title"> <?php echo($each_workout["exercise_name"]) ?> </div>
                </div>
            <?php } ?>

        </div>
    </div>
 

    
</body>
</html>
