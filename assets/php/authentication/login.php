<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testuser@gmail.com';
$password = 'password1234';

if(!empty($email) && !empty($password))
{
    //true || false boolean return
    $result = pg_query($dbconn, "SELECT EXISTS(SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "')");

    while($row = pg_fetch_row($result)){ 
        
        if(json_encode($row)==='f'){
            echo 'user not found';
        }else{
            echo json_encode($row);
        }
        
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>