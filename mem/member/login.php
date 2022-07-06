<?php
    session_start();
    
    header('Content-Type: text/html; charset=UTF-8');

    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;

    $userid = $data['userid'];
    $pw = $data['pw'];

    $sql = "select * from member where userid = '$userid'";

    $result = mysqli_fetch_assoc(mysqli_query($con, $sql));
    
    $data = array(
        "name" => $result['name'],
        "userid" => $result['userid'],
        "birth" => $result['birth'],
        "gender" => $result['gender'],
        "phone" => $result['phone'],
        "parent_phone" => $result['parent_phone'],
        "address" => $result['address'],
        "email" => $result['email'],
        "sns" => $result['sns'],
        "type" => $result['type'],
    );

    if(password_verify($pw, $result['pw'])) {
        // 로그인 성공
        $_SESSION['userid'] = $result['userid'];
        $_SESSION['name'] = $result['name'];
        echo json_encode(array("name" => $data['name'], "userid" => $data['userid'], "birth" => $data['birth'], "gender" => $data['gender'], "phone" => $data['phone'], "parent_phone" => $data['parent_phone'], "address" => $data['address'], "email" => $data['email'], "sns" => $data['sns'], "user_type" => $data['type']));
        return;
    }else {
        // 결과는 나왔는데 비밀번호 일치하지 않을 경우
        echo "0";
        return;
    }
    // 해당 아이디 없을 경우
    echo "-1";
?>