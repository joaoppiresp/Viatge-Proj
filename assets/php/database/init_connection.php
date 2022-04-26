<?php 
    include 'db_connect.php'; 

    $dbconn = OpenCon();
    
    //debug connection
    
    if($dbconn){
        echo'Connected to database<br></br>';
        $result = pg_query($dbconn, "SELECT * FROM users");
        while($row = pg_fetch_row($result)){ 
            echo $row[0],"<br></br>";
            echo $row[1],"<br></br>";
            echo $row[2],"<br></br>";
            echo $row[3],"<br></br>";
            echo $row[4],"<br></br>";

        }

    }else{
        echo'connection failed';
        exit;
    }
    
?>