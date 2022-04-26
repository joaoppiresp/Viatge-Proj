<?php

function OpenCon()
{
    $conn_string ="host=ec2-63-32-248-14.eu-west-1.compute.amazonaws.com port=5432 dbname=d7l5frqabneo71 user=zktcmdwimhgred password=e4db533510772eaa0fc6096147667a412250f43cd57f2dc60cb5cabb6a6c7ffb";

    $dbconn = pg_connect($conn_string) or die("Connection not successfull");
    //return $dbconn;

    //debug connection
    if($dbconn){
        echo'Connected to database';
        $query_string = 'SELECT * FROM users;';
        pg_query($dbconn, $query_string);

    }else{
        echo'connection failed';
        exit;
    }

}

function CloseCon($dbconn)
{
    pg_close($dbconn);
}
?>