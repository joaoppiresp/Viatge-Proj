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
        $result_array = array();
        while($row = pg_fetch_row($result)){
            $result_array[] = $row;
            echo $row[0],"<br></br>";
            echo $row[1],"<br></br>";
            echo $row[2],"<br></br>";
            echo $row[3],"<br></br>";
            echo $row[4],"<br></br>";
        }
        echo json_encode($result_array);
    }
    else
    {
        $result2 = pg_get_result($dbconn);
        printf("Error message: %s\n", pg_result_error($dbconn));
    }
}

CloseCon($dbconn);

?>