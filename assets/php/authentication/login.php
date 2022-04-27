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
            echo $result[0];
            echo $result[1];
            echo $result[2];
            echo $result[3];
            echo $result[4];
        }
        //echo json_encode($result_array);
    }
    else
    {
        echo'failed to follow through';
    }
}else{
    echo'param email and password not empty';
}

CloseCon($dbconn);

?>