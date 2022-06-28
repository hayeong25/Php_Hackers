<?php
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $phone = $_GET['phone'];

    $sql = "select * from member where phone = '$phone'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo json_encode('true');
    }else {
        echo json_encode('false');
    }
?>