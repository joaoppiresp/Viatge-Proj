<?php

include 'database/init_connection.php';

$email = $_POST['uemail'];
//$email = 'testuser@gmail.com';

$result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'");

if(!$result){
    $value = '0'; //user not found
    echo json_encode($value);
}else{
    while($row = pg_fetch_row($result)){ 
        echo json_encode($row);
   }
}

CloseCon($dbconn);

?>