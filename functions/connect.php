<?php
    $host_name  = "db680500349.db.1and1.com";
    $database   = "db680500349";
    $user_name  = "dbo680500349";
    $password   = "memes123";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    
    if(mysqli_connect_errno())
    {
    echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
    }
    else
    {
    echo '<p>Connection to MySQL server successfully established.</p>';
    }
?>