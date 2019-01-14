<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Finish</title>
 <link rel="stylesheet" type="text/css" href="project.css">  
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

</head>
<body>
    
    <div class="text-center">
        <h1>DONE!</h1>
        <h2 id="final"></h2>
        <a href="view_users.php">View Records</a>
    </div>

    <!--SCRIPT-->
    <script src="project.js">
        
    </script>

    <script>
    scoreprint();
    </script>
    
</body>
</html>

<?php

include("database/db_conection.php");
$view_users_query="SELECT * from users";
$run=mysqli_query($dbcon,$view_users_query);
$user_score = $_COOKIE['correct'];
$row=mysqli_fetch_array($run);
  $ue = $_SESSION['email'];
  $sql = "UPDATE users SET user_score=$user_score WHERE user_email='$ue'";
  $res = mysqli_query($dbcon,$sql) or trigger_error(mysqli_error($dbcon)." in ".$sql);
  if (mysqli_query($dbcon, $sql)) {
      //echo "Record updated successfully";
      
  } else {
      echo "Error updating record: " . mysqli_error($dbcon);
  }
?>