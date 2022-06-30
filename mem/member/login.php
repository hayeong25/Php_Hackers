<?php
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    
    session_start();

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $userid = $_POST['userid'];
    $pw = $_POST['pw'];

    $sql = "select pw from member where userid = '$userid'";

    $result = mysqli_query($con, $sql);

    password_verify($pw, $result) ? 'true' : 'false';

    if(mysqli_num_rows($result) > 0) {
        if(password_verify($pw, $result)) {
            // 로그인 성공
            echo "1";
        }else {
            // 결과는 나왔는데 비밀번호 일치하지 않을 경우
            echo "0";
        }
    }else {
        // 해당 아이디 없을 경우
        echo "-1";
    }

?>