<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testuser@gmail.com';
$password = 'password1234';

if(!empty($email) && !empty($password))
{

    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'");

    if($result === FALSE){
        $error = pg_last_error();
        echo $error;
       
    }else{
        while($row = pg_fetch_row($result)){ 
            echo json_encode($row);
        }
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>