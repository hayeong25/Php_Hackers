<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;
    
    $userid = $data['userid'];
    $pw = password_hash($data['pw'], PASSWORD_DEFAULT);
    $email = $data['email'];
    $sns = $data['sns'];
    $address = $data['address'];
    
    $sql = "update member set pw = '$pw', email = '$email', sns = '$sns', address = '$address' where userid = '$userid'";
    
    $result = mysqli_fetch_assoc(mysqli_query($con, $sql));

    $data = array(
        "address" => $result['address'],
        "email" => $result['email'],
        "sns" => $result['sns']
    );

    if(mysqli_query($con, $sql) != 1) {
        echo "false";
        return;
    }
    
    echo json_encode(array("address" => $data['address'], "email" => $data['email'], "sns" => $data['sns']));
?>