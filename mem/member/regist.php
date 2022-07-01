<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');

    $type = $_POST['user_type'];
    $userid = $_POST['userid'];
    $pw = password_hash($_POST['pw'], PASSWORD_DEFAULT); // 비밀번호 암호화
    $name = $_POST['name'];
    $nick = $_POST['nick'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $sns = $_POST['sns'];
    $phone = $_POST['phone'];
    $parent_phone = $_POST['parent_phone'];
    $address = $_POST['address'];

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $sql = "insert into member 
        (type, userid, pw, name, nick, birth, gender, email, sns, phone, parent_phone, address) 
        values('$type', '$userid', '$pw', '$name', '$nick', DATE_FORMAT('$birth', '%Y-%m-%d'), '$gender', '$email', '$sns', '$phone', '$parent_phone', '$address')";
    
    // $sql = "insert into member set
    //     type = '$_POST[user_type]',
    //     userid = '$_POST[userid]',
    //     pw = '".password_hash("'$_POST[pw]'", "'PASSWORD_DEFAULT'")."',
    //     name = '$_POST[name]',
    //     nick = '$_POST[nick]',
    //     gender = '$_POST[gender]',
    //     email = '$_POST[email]',
    //     sns = '$_POST[sns]',
    //     pwd = '$_POST[pwd]',
    //     phone = '$_POST[phone]',
    //     parent_phone = '$_POST[parent_phone]',
    //     address = '$_POST[address]',
    //     birth = '".date("'$_POST[birth]'")."'";
    
    $result = mysqli_query($con,$sql);

    session_start();

    $_SESSION['userid'] = $userid;

    echo mysqli_num_rows($result);
?>