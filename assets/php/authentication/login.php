<?php

include '../database/init_connection.php';

$email = $_POST['uemail'];
$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
//$email = 'testuser@gmail.com';
//$password = 'password123';

if(!empty($email) && !empty($password))
{

    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'");

    if($result){
        while($row = pg_fetch_row($result)){ 
            return json_encode($row);
        }
    }else{
        echo'failed to query database';
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>