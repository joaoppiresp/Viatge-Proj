<?php
    
include '../database/init_connection.php';

$username = $POST['uename'];
$email = $_POST['uemail'];
$password = $_POST['psw'];

if(!empty($username) && !empty($email) && !empty($password)){
    
    $arr = array(
        'username' => $username,
        'email' => $email,
        'passwrd' => $password
    );
    $values = pg_convert($dbconn, 'users', $arr);

    $result = pg_insert($dbconn, 'users', $values);

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