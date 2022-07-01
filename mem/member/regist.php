<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $type = $_GET['user_type'];
    $userid = $_GET['userid'];
    $pw = password_hash($_GET['pw'], PASSWORD_DEFAULT); // 비밀번호 암호화
    $name = $_GET['name'];
    $nick = $_GET['nick'];
    $birth = $_GET['birth'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $sns = $_GET['sns'];
    $phone = $_GET['phone'];
    $parent_phone = $_GET['parent_phone'];
    $address = $_GET['address'];

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $sql = "insert into member 
        (type, userid, pw, name, nick, birth, gender, email, sns, phone, parent_phone, address) 
        values('$type', '$userid', '$pw', '$name', '$nick', DATE_FORMAT('$birth', '%Y-%m-%d'), '$gender', '$email', '$sns', '$phone', '$parent_phone', '$address')";
    
    $result = mysqli_query($con,$sql);

    session_start();

    $_SESSION['userid'] = $userid;

    echo $result;
?>