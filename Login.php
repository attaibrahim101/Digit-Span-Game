<?php
session_start();//session starts here

?>
<!DOCTYPE html>
<html>

<head>
    <script>
    function myFunction(){
        var x= document.getElementById("myInput");
        if (x.type == "password"){
            x.type = "text";
        }
        else {
            x.type = "password";
        }
    }
    </script>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>
Login Page
</title>
</head>
<body>
    <div class = "container-fluid">
        <div class="col-md-12 text-center mt-5">
           <!-- <img src="Web/Web/sub-log-trans-wh1.png">-->
        </div>
        <div class="row">  
    <!--        <div class="col-md-1"></div>-->
            <div class="col-md-12">
                <div class="form-cnt">    
                    <h3 class="text-center">Login</h3>
                    <p class="text-center">Please enter your details </p>
                    <div class="reg-form">
                        <form role="form" method="post" action="login.php">
                            <label>E-mail</label>
                            <br>
                            <input class="align border col-md-12" type="text" name="email">
                            <br>
                            <label>Password</label>
                            <br>
                            <input class="align border col-md-12" id="myInput" value="" type="text" placeholder="" name="pass">
                            <br>
                            <input type="checkbox" onclick="myFunction()">Hide Password
                            <br>
                            <input class="border btn btn-primary bord" type="submit" value="login" name="login" >
                        </form>
                    </div>
                </div>
                
                <center><a class="" href="Registration.php" role="button"><footer>Register</footer></a></center>
             </div>
    <!--        <div class="col-md-1"></div>-->
         </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>

<?php
include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('Home.html','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>