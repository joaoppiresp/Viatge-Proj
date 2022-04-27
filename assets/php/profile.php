<?php

include 'database/init_connection.php';

//$email = $_POST['uemail'];
$email = 'testuser@gmail.com';

$result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'");

if(!$result){
    echo 'query failed';
}else{
    while($row = pg_fetch_row($result)){ 
        $uid = json_encode($row[0]);
        $uname = json_encode($row[1]);
        $urole = json_encode($row[4]);
        $arr = array($uid, $uname, $urole);
        echo $arr[0];
        echo $arr[1];
        echo $arr[2];

   }
}

CloseCon($dbconn);

?>