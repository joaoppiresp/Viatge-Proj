<?php
    
include '../database/init_connection.php';

$username = $_POST['uename'];
$email = $_POST['uemail'];
$password = $_POST['psw'];


if(!empty($username) && !empty($email) && !empty($password)){
    //currently not creating admin or tech users
    $result = pg_query_params($dbconn, "INSERT INTO users(username, email, passwrd, role_fk) VALUES(\$1, \$2, \$3, '1')", array($username, $email, $password));

    while($row = pg_fetch_row($result)){ 
        
        if(json_encode($row)==='["f"]'){
            $value = '0'; //insert not complete
            echo json_encode($value);
            
        }else{
           $value2 = '1'; //insert complete (new users addeded)
           echo json_encode($value2);
        }
    }
}else{
    $value3 = '2'; //form not filled correctly
    echo json_encode($value3);
}
CloseCon($dbconn);
?>