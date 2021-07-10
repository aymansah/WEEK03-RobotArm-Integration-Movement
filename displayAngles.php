<?php
    include "db_conn.php";
    $con = OpenCon();

    // Retrieve the last saved value, to turn on the moving arm
    $q = "SELECT * FROM motors where id=(SELECT MAX(id) FROM motors) ";
    if($result = mysqli_query($con, $q)){
        while($row = $result -> fetch_assoc()){
            print_r($row);
       
    }
    }
    

?>