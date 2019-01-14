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
    <title>Play</title>
 <link rel="stylesheet" type="text/css" href="project.css">  
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

</head>
<body>
    <div class="text-center">
        <h3 class="text-center">Digit Span</h3>
        <input class="btn bg-white" type="button" value="Start Countdown" onclick="countdown1();getvalues();this.onclick=null;"><br>
        <h2 class="container-fluid black f1" id="txt"></h2>
        <h2 class="container-fluid black f1" id="txt2"></h2>
    </div>
        <center><div>
            <div>
                    <p class="black f3" id="0"></p>
                    <p class="black f3" id="1"></p>
                    <p class="black f3" id="2"></p>
                    <p class="black f3" id="3"></p>
                    <p class="black f3" id="4"></p>
                    <p class="black f3" id="5"></p>
                    <p class="black f3" id="6"></p>
                    <p class="black f3" id="7"></p>
                    <p class="black f3" id="8"></p>
                    <p class="black f3" id="9"></p>
            </div>

        </div></center>

        <div>
            <div id="bb"> </div>
        </div>

    <!--SCRIPT-->
    <script src="project.js">
    </script>
    
</body>
</html>

<?php
include("database/db_conection.php");
//$view_users_query="SELECT * from users";//select query for viewing users.
//$run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
$NumOfDigits = $_COOKIE['NumOfDigits'];
$score = $_COOKIE['correct'];
$view_users_query="SELECT * from users";
$run=mysqli_query($dbcon,$view_users_query);
$e = $_SESSION['email'];
    $sql = "UPDATE users SET user_score=$score WHERE user_email='$e'";

?>