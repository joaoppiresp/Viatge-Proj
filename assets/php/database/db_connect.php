<?php

function OpenCon()
{
    $dbhost = "ec2-63-32-248-14.eu-west-1.compute.amazonaws.com";
    $dbuser = "zktcmdwimhgred";
    $dbpass = "e4db533510772eaa0fc6096147667a412250f43cd57f2dc60cb5cabb6a6c7ffb";
    $db = "d7l5frqabneo71";
    //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    $conn = pg_connect("host=$dbhost dbname=$db user=$dbuser password=$dbpass"); 
    echo "connected to database"
    if(!$conn){
        die("Connection failed: %s\n". $conn -> error);
    }
    
    //or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}
?>