<?php
    $type = $_POST['user_type'];
    $userid = $_POST['userid'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $nick = $_POST['nick'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $sns = $_POST['sns'];
    $phone = $_POST['phone'];
    $parent_phone = $_POST['parent_phone'];
    $address = $_POST['address'];
    $job = $_POST['job'];

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $sql = "insert into member (type, userid, pw, name, nick, birth, gender, email, sns, phone, parent_phone, address, job) values('$type', '$userid', '$pw', '$name', '$nick', STR_TO_DATE('$birth', '%Y%m%d'), '$gender', '$email', '$sns', '$phone', '$parent_phone', '$address', '$job')";
    $result = mysqli_query($con,$sql);

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    echo $result;

    // if(mysqli_num_rows($result) > 0) {
    //     echo '1';
    // }else {
    //     echo "0";
    // }
?>