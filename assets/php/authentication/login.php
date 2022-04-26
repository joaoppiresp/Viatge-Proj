<?php

include '../database/init_connection.php';

$email = $_POST['email'];
$passwrd = $_POST['passwrd'];
//$passwrd = md5($_POST['passwrd']);

if(!empty($email) && !empty($passwrd))
{
    $login_query = "SELECT * FROM users WHERE `email` = '$email' AND `passwrd` = '$passwrd'";
 
    $result = pg_query($dbconn, $login_query);

    if($result)
    {
        $result_array = array();
        while($row = pg_fetch_row($result)){
            $result_array[] = $row;
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