<?php
    include "db_conn.php";
    $con = OpenCon();

    if(isset($_POST['L'])){
        // echo"Left is clicked";
        $L = $_POST['L'];
        $q = "INSERT INTO movem (Left) VALUES (L)";
        mysqli_query($con, $q);
        $q = "INSERT INTO movem (Rright) VALUES ('$L')";
        $r = mysqli_query($con, $q);
        if($r){
            echo $L;
        } else{
            echo "  .> ".mysqli_error($con);
        }
    }
    if(isset($_POST['R'])){
        //  echo"R is clicked";
        $R = $_POST['R'];
        //var_dump($R);
        $q = "INSERT INTO movem (Rright) VALUES ('$R')";
        $r = mysqli_query($con, $q);
        if($r){
            echo $R;
        } else{
            echo "  .> ".mysqli_error($con);
        }
    }
    if(isset($_POST['U'])){
        //  echo"U is clicked";
        $U = $_POST['U'];
        $q = "INSERT INTO movem (Up) VALUES (U)";
        mysqli_query($con, $q);
        $q = "INSERT INTO movem (Rright) VALUES ('$U')";
        $r = mysqli_query($con, $q);
        if($r){
            echo $U;
        } else{
            echo "  .> ".mysqli_error($con);
        }
    }
    if(isset($_POST['D'])){
        // echo"D is clicked";
        $D = $_POST['D'];
        $q = "INSERT INTO movem (Down) VALUES (D)";
        mysqli_query($con, $q);
        $q = "INSERT INTO movem (Rright) VALUES ('$D')";
        $r = mysqli_query($con, $q);
        if($r){
            echo $D;
        } else{
            echo "  .> ".mysqli_error($con);
        }
    }
    if(isset($_POST['S'])){
        // echo"S is clicked";
        $S = $_POST['S'];
        $q = "INSERT INTO movem (Stop) VALUES (S)";
        mysqli_query($con, $q);
        $q = "INSERT INTO movem (Rright) VALUES ('$S')";
        $r = mysqli_query($con, $q);
        if($r){
            echo $S;
        } else{
            echo "  .> ".mysqli_error($con);
        }
    }
    
    CloseCon($con);
?>