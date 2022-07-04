<?php
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $mode = $_GET['mode'];

    switch($mode) {
        case 'phone':
            $phone = $_GET['phone'];

            $sql = "select * from member where phone = '$phone'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'userid':
            $userid = $_GET['userid'];

            $sql = "select * from member where userid = '$userid'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'nick':
            $nick = $_GET['nick'];

            $sql = "select * from member where nick = '$nick'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'email':
            $email = $_GET['email'];

            $sql = "select * from member where email = '$email'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
    }
?>