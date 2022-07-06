<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;
    $send_mode = $data['mode'];

    switch($send_mode) {
        // 아이디 찾기 - 해당 휴대폰 번호 or 이메일로 회원 정보 가져오기
        case 'phone': case 'email':
            $send_name = $data['username'];
            $send_data = $data['data'];
            
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
            break;
        // 비밀번호 찾기 - 휴대폰 번호 or 이메일에 해당하는 회원의 비밀번호 123456으로 임시 비밀번호 설정
        case 'updatePw_phone': case 'updatePw_email':
            $send_data = $data['data'];
            $hash_pw = password_hash('123456', PASSWORD_DEFAULT);
            
            switch($send_mode) {
                case 'updatePw_phone':
                    $sql = "update member set pw = '$hash_pw' where phone = '$send_data'";
                    break;
                case 'updatePw_email':
                    $sql = "update member set pw = '$hash_pw' where email = '$send_data'";
                    break;
            }
        
            $result = mysqli_query($con, $sql);
        
            if($result > 0) {
                echo "1";
            }else {
                echo "0";
            }
            break;
        // 비밀번호 찾기 - 해당 휴대폰 번호로 회원의 이메일 가져오기
        default:
            $send_userid = $data['userid'];
            $send_phone = $data['phone'];

            $sql = "select email, phone from member where userid = '$send_userid' and phone = '$send_phone'";

            $result = mysqli_fetch_assoc(mysqli_query($con, $sql));
        
            $data = array(
                "email" => $result['email'],
                "phone" => $result['phone']
            );
        
            echo json_encode(array("email" => $data['email'], "phone" => $data['phone']));
            break;
    }
?>