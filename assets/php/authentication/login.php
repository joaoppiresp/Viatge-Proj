<?php

include '../database/init_connection.php';

//$email = $_POST['uemail'];
//$password = $_POST['psw'];
//$password = md5($_POST['passwrd']);
$email = 'testuser@gmail.com';
$password = 'password123';


if(!empty($email) && !empty($password))
{
    $sql = "SELECT * FROM users WHERE email=$email AND passwrd=$password;";
 
    $result = pg_query($dbconn, $sql);

    if($result)
    {
        while($arr = pg_fetch_array($result)){
            //$result_array[] = $row;
            echo $arr[0],"<br></br>";
            echo $arr[1],"<br></br>";
            echo $arr[2],"<br></br>";
            echo $arr[3],"<br></br>";
            echo $arr[4],"<br></br>";
        }
        //echo json_encode($result_array);
    }
    else
    {
        echo'failed to follow through';
    }
}

CloseCon($dbconn);

?>