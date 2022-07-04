<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('euckr');

    $data = $_GET['data'];
    $mode = $_GET['mode'];

    switch($mode) {
        case 'phone':
            $sql = "select name, userid from member where phone = '$data'";
            break;
        case 'email':
            $sql = "select name, userid from member where email = '$data'";
            break;
    }
    
    $result = mysqli_fetch_assoc(mysqli_query($con, $sql));

    $data = array(
        "name" => $result['name'],
        "userid" => $result['userid']
    );

    // print_r($data);
    // print_r(json_encode($data));
    // print_r(str_replace(array("\r\n","\r","\n"), '', $data));
    echo json_encode($data);
    // echo json_encode($data, JSON_UNESCAPED_UNICODE);
    // echo json_encode(print_r($data), JSON_UNESCAPED_UNICODE);
?>