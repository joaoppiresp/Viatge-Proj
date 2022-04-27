<?php

include '../database/init_connection.php';

$email = $_POST['uemail'];
$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);

if(!empty($email) && !empty($password))
{
    //true || false boolean return
    $result = pg_query($dbconn, "SELECT EXISTS(SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "')");

    while($row = pg_fetch_row($result)){ 
        
        if(json_encode($row)==='["f"]'){
            $value = '0'; //user not found
            echo json_encode($value);
            
        }else{
           $value = '1'; //user found
           echo json_encode($value);
        }
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>