<?php
    
include '../database/init_connection.php';

//$username = $_POST['uename'];
//$email = $_POST['uemail'];
//$password = $_POST['psw'];

$username = 'testuser2';
$email = 'testuser2@gmail.com';
$password = 'password123';

if(!empty($username) && !empty($email) && !empty($password)){

    $result = pg_query_params($dbconn, "INSERT INTO users(username, email, passwrd) VALUES(\$1, \$2, \$3)", array($username, $email, $password));

    //$result = pg_insert($dbconn, 'users', array());

    while($row = pg_fetch_row($result)){ 
        
        if(json_encode($row)==='["f"]'){
            $value = '0'; //insert not complete
            echo json_encode($value);
            
        }else{
           $value = '1'; //insert complete (new users addeded)
           echo json_encode($value);
        }
    }
}else{
    $value = '2'; //form not filled correctly
    echo json_encode($value);
}
CloseCon($dbconn);
?>