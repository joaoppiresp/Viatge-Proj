<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testuser@gmail.com';
$password = 'password123';

if(!empty($email) && !empty($password))
{

    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'");

    if($result){
        while($row = pg_fetch_row($result)){ 
            echo $row[0],"<br></br>";
            echo $row[1],"<br></br>";
            echo $row[2],"<br></br>";
            echo $row[3],"<br></br>";
            echo $row[4],"<br></br>";
            //echo json_encode($result_array);
            return $row;
        }
    }else{
        echo'failed to query database';
    }

}else{
    echo'paramm email and password empty';
}

CloseCon($dbconn);

?>