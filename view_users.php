<html>
<head>
    <meta charset="utf-8">
    <title>Users</title>
 <link rel="stylesheet" type="text/css" href="project.css">  
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;
    }

</style>

<body>

<div style="background-color: 'blue';" class="table-scrol ">
    
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>
            <th>UserName</th>
            <th>E-mail</th>
            <th>Your Score</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_name=$row[1];
            $user_email=$row[3];
            $user_score=$row[4];



        ?>

        <tr>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_score;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
    </div>
</div>


</body>

</html>
