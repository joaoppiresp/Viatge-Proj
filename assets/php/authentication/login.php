<?php

include '../database/init_connection.php';

$email = $_POST['email'];
$passwrd = $_POST['passwrd'];
//$passwrd = md5($_POST['passwrd']);
if(!empty($email) && !empty($passwrd))
{
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `passwrd` = '$passwrd'";

    // insert in database 
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            $result_array[] = $row;
        }

        echo json_encode($result_array);
    }
    else
    {
        printf("Error message: %s\n", mysqli_error($conn));
    }
}

CloseCon($conn);

?>