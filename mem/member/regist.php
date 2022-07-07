<?php
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    header('Content-Type: text/html; charset=UTF-8');
    
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;
    $send_mode = $data['mode'];

    switch($send_mode) {
        // 회원가입
        case 'regist':
            $type = $data['user_type'];
            $userid = $data['userid'];
            $pw = password_hash($data['pw'], PASSWORD_DEFAULT); // 비밀번호 암호화
            $name = $data['name'];
            $nick = $data['nick'];
            $birth = $data['birth'];
            $gender = $data['gender'];
            $email = $data['email'];
            $sns = $data['sns'];
            $phone = $data['phone'];
            $parent_phone = $data['parent_phone'];
            $address = $data['address'];

            $sql = "insert into member 
                (type, userid, pw, name, nick, birth, gender, email, sns, phone, parent_phone, address) 
                values('$type', '$userid', '$pw', '$name', '$nick', DATE_FORMAT('$birth', '%Y-%m-%d'), '$gender', '$email', '$sns', '$phone', '$parent_phone', '$address')";
            
            $result = mysqli_query($con,$sql);

            $_SESSION['userid'] = $userid;
            $_SESSION['username'] = $name;

            echo $result;

            break;
        // 로그인
        case 'login':
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

            break;
        // 회원정보수정
        case 'modify':
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

            break;
    }
    
?>