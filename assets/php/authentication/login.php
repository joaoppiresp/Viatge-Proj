<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testuser@gmail.com';
$password = 'password12';

if(!empty($email) && !empty($password))
{

    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'");

    if($result){
        while($row = pg_fetch_row($result)){ 
            echo json_encode($row);
            echo 'bananas';
        }
    }else{
        $false_value = "false";
        echo $false_value;
        echo json_encode($false_value);
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>