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
    <title>Game Page</title>
 <link rel="stylesheet" type="text/css" href="project.css">  
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

</head>
<body>
    <div class="text-center">
        <h3 class="text-center">Digit Span</h3>
        <input class="btn bg-white" type="button" value="Start Countdown" onclick="countdown();stream();this.onclick=null;"><br>
        <h2 class="container-fluid black f1" id="txt"></h2>
        <h2 class="container-fluid black f1" id="txt2"></h2>
    </div>
        <center><div>
            <div>
                    <p class="black" id="0"></p>
                    <p class="black" id="1"></p>
                    <p class="black" id="2"></p>
                    <p class="black" id="3"></p>
                    <p class="black" id="4"></p>
                    <p class="black" id="5"></p>
                    <p class="black" id="6"></p>
                    <p class="black" id="7"></p>
                    <p class="black" id="8"></p>
                    <p class="black" id="9"></p>
            </div>

        </div></center>

        <div>
            <a id="bb" href=""></p>
        </div>

    <!--SCRIPT-->
    <script src="project.js">
    </script>
    
</body>
</html>