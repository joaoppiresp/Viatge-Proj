<?php

include '../database/init_connection.php';

$email = $_POST['uemail'];


if(!empty($email))
{
    
    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email ."'");

    while($row = pg_fetch_row($result)){ 
        echo json_encode($row);
    }

}else{
    $value = '0'; //querie didn't work
    echo json_encode($value);
}

CloseCon($dbconn);

?>