<?php

include 'database/init_connection.php';

//$email = $_POST['uemail'];
$email = 'testuser@gmail.com';

$result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'");

if(!$result){
    echo 'query failed';
}else{
    while($row = pg_fetch_array($result)){ 
        echo json_encode($row[0]);
       
   }
}

CloseCon($dbconn);

?>