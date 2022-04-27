<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
$email = 'testuser@gmail.com';

$result = pg_query($dbconn, "SELECT * FROM users WHERE users.email=testuser@gmail.com");

while($row = pg_fetch_row($result)){ 
     if(json_encode($row)==='["f"]'){
        $value = '0'; //querie didn't work
        echo json_encode($value);
    }else{
        echo json_encode($row);
    }

}

CloseCon($dbconn);

?>