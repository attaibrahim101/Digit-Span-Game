<!DOCTYPE html>
<html>

<head>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>
Registration Page
</title>
</head>
<body>
    <div class = "container-fluid">
        <div class="col-md-12 text-center mt-5">
           <!-- <img src="Web/Web/sub-log-trans-wh1.png"> -->
            <h3 class="text-center">DIGIT</h3>
            <h3 class="text-center">SPAN</h3>
        </div>
        <div class="row">  
    <!--        <div class="col-md-1"></div>-->
            <div class="col-md-12">
                <div class="form-cnt">    
                    <h3 class="text-center">Registration</h3>
                    <p class="text-center">Please enter your details </p>
                    <div class="reg-form">
                        <form role="form" method="post" action = "registration.php">
                            <label>Name</label><br>
                            <input class="align border col-md-12" type="text" name="name">
                            <br>
                            
                            <label>E-mail</label>
                            <br>
                            <input class="align border col-md-12" type="text" placeholder="you@example.com" name="email">
                            <br>

                            <label class = "dis">Password</label>
                            <br>
                            <input class="border align col-md-12" type="text" placeholder="" name = "pass">
                            <br>
                            <input type= "checkbox"> Agree to our terms and conditions
                            <input class="btn btn-primary bord" type="submit" value="Submit" name="register" >
                        </form>
                    </div>
                </div>
                <center>
                        <div class = "container-fluid">
                            <div class="col-md-12 text-center mt-5">
                               <!-- <img src="Web/Web/sub-log-trans-wh1.png"> -->
                                <a class="btn text-center" href="Login.php">Login</a>
                            </div>
                            <div class="row">
                     </center>
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

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('Login.php','_self')</script>";
    }

}

?>