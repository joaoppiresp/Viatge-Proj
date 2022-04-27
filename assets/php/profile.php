<?php

include 'database/init_connection.php';

//$email = $_POST['uemail'];
$email = 'testuser@gmail.com';

$result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'");

if(!$result){
    echo 'query failed';
}else{
    while($row = pg_fetch_row($result)){ 
        echo json_encode($row[0]);
        echo '<br></br>'
        echo json_encode($row[1]);
        echo '<br></br>'
        echo json_encode($row[2]);
        echo '<br></br>'
        echo json_encode($row[3]);
        echo '<br></br>'
        echo json_encode($row[4]);
        echo '<br></br>'
        echo json_encode($row[5]);
        echo '<br></br>'
   }
}

CloseCon($dbconn);

?>