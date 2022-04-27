<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testusers@gmail.com';
$password = 'password123';

if(!empty($email) && !empty($password))
{
    $sql = "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'";
    
    $result = pg_query($dbconn, $sql);
    $result = pg_fetch_array($result);

    if($result)
    {
        while($result = pg_fetch_array($result)){
            echo $result[0]."<br></br>";
            echo $result[1]."<br></br>";
            echo $result[2]."<br></br>";
            echo $result[3]."<br></br>";
            echo $result[4]."<br></br>";
        }
        //echo json_encode($result_array);
    }
    else
    {
        echo'failed to follow through';
    }
}

CloseCon($dbconn);

?>