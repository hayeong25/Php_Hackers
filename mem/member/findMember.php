<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;

    if($data['mode'] == 'phone' || $data['mode'] == 'email') {
        $send_name = $data['username'];
        $send_data = $data['data'];
        $send_mode = $data['mode'];
    
        switch($send_mode) {
            case 'phone':
                $sql = "select name, userid from member where name = '$send_name' and phone = '$send_data'";
                break;
            case 'email':
                $sql = "select name, userid from member where name = '$send_name' and email = '$send_data'";
                break;
        }
       
        $result = mysqli_fetch_assoc(mysqli_query($con, $sql));
    
        $data = array(
            "name" => $result['name'],
            "userid" => $result['userid']
        );
    
        echo json_encode(array("name" => $data['name'], "userid" => $data['userid']));
    }else if($data['mode'] == 'updatePw_phone' || $data['mode'] == 'updatePw_email'){
        $send_data = $data['data'];
        
        switch($data['mode']) {
            case 'updatePw_phone':
                $sql = "update member set pw = '123456' where phone = '$send_data'";
                break;
            case 'updatePw_email':
                $sql = "update member set pw = '123456' where email = '$send_data'";
                break;
        }
       
        $result = mysqli_query($con, $sql);
    
        if(mysqli_num_rows($result) > 0) {
            echo "1";
        }else {
            echo "0";
        }
    }else{
        $send_userid = $data['userid'];
        $send_phone = $data['phone'];

        $sql = "select email, phone from member where userid = '$send_userid' and phone = '$send_phone'";

        $result = mysqli_fetch_assoc(mysqli_query($con, $sql));
    
        $data = array(
            "email" => $result['email'],
            "phone" => $result['phone']
        );
    
        echo json_encode(array("email" => $data['email'], "phone" => $data['phone']));
    }
?>