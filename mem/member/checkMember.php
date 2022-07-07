<?php
    header('Content-Type: text/html; charset=UTF-8');

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;
    $send_mode = $data['mode'];

    switch($send_mode) {
        case 'phone':
            $phone = $data['phone'];

            $sql = "select * from member where phone = '$phone'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'userid':
            $userid = $data['userid'];

            $sql = "select * from member where userid = '$userid'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'nick':
            $nick = $data['nick'];

            $sql = "select * from member where nick = '$nick'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'email':
            $email = $data['email'];

            $sql = "select * from member where email = '$email'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        case 'secession':
            $userid = $data['userid'];
            $pw = $data['pw'];

            $sql = "select pw from member where userid = '$userid'";

            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
                if(password_verify($pw, $result)) {
                    $sql = "delete from member where userid = '$userid' and pw = '$pw'";
                    // 삭제 성공
                    echo "1";
                }else {
                    echo "0";
                }
            }else {
                echo "-1";
            }
    }
?>