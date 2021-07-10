<?php
    include "db_conn.php";

    $con = OpenCon();
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    $m5 = $_POST['m5'];
    $m6 = $_POST['m6'];

    $q = "INSERT INTO motors (m1, m2, m3, m4, m5, m6) VALUES ($m1, $m2, $m3, $m4, $m5, $m6) ";
    mysqli_query($con, $q);
    CloseCon($con);
    header("location: index.html");
?>