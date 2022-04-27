<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testusers@gmail.com';
$password = 'password123';

if(!empty($email) && !empty($password))
{
    //$sql = "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'";
    
    $result = pg_query($dbconn, "SELECT * FROM users WHERE users.email='" . $email . "'AND users.passwrd='" . $password . "'");
    $result = pg_fetch_array($result);

    if($result)
    {
        while($row = pg_fetch_row($result)){ 
            echo $row[0],"<br></br>";
            echo $row[1],"<br></br>";
            echo $row[2],"<br></br>";
            echo $row[3],"<br></br>";
            echo $row[4],"<br></br>";
        //echo json_encode($result_array);
        }
    }

}else{
    echo'param email and password not empty';
}

CloseCon($dbconn);

?>