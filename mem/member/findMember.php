<?php
    // header('Content-Type: text/html; charset=UTF-8');    
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');

    // $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
   
    // $data = $_POST;
    // // print_r($data);
    // // echo "ddddddd";
    // // echo $data['data'];
    // // echo $data['mode'];
    // // exit;
    // $phone_data = $data['data'];
    // $phone_mode = $data['mode'];

    // switch($phone_mode) {
    //     case 'phone':
    //         $sql = "select name, userid from member where phone = '$phone_data'";
    //         break;
    //     case 'email':
    //         $sql = "select name, userid from member where email = '$phone_mode'";
    //         break;
    // }
    
    // $result = mysqli_fetch_assoc(mysqli_query($con, $sql));

    // $data = array(
    //     "name" => $result['name'],
    //     "userid" => $result['userid']
    // );

    // // print_r($data);
    // // exit;
    // // echo json_encode($result['name']);
    // // echo "11111111111111111";
    // // exit;
    // // echo 1; 
    // echo json_encode(array("name" => $result['name'], "userid" => $result['userid']));
    // // echo $result['name'];
    // // echo json_encode(array("name" => $result['name'],"userid" => $result['userid']));
    // exit;
    // // print_r($data);
    // // print_r(json_encode($data));
    // // print_r(str_replace(array("\r\n","\r","\n"), '', $data));
    // // echo json_encode($data);
    // // echo json_encode($data, JSON_UNESCAPED_UNICODE);
    // // echo json_encode(print_r($data), JSON_UNESCAPED_UNICODE);
    // // echo array("name" => $result['name'],"userid" => $result['userid']);
    // // echo json_encode(array("name" => $result['name'],"userid" => $result['userid']));
?>

<?php
    header('Content-Type: text/html; charset=UTF-8');   
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");
    $con -> set_charset('utf8');

    $data = $_POST;

    $send_data = $data['data'];
    $send_mode = $data['mode'];

    switch($send_mode) {
        case 'phone':
            $sql = "select name, userid from member where phone = '$send_data'";
            break;
        case 'email':
            $sql = "select name, userid from member where email = '$send_data'";
            break;
    }
   
    $result = mysqli_fetch_assoc(mysqli_query($con, $sql));

    $data = array(
        "name" => $result['name'],
        "userid" => $result['userid']
    );

    // print_r($data);
    // exit;
    // echo json_encode($result['name']);
    // echo "11111111111111111";
    // exit;
    // echo 1;
    echo json_encode(array("name" => $data['name'], "userid" => $data['userid']));
    // echo $result['name'];
    // echo json_encode(array("name" => $result['name'],"userid" => $result['userid']));
    exit;
    // print_r($data);
    // print_r(json_encode($data));
    // print_r(str_replace(array("\r\n","\r","\n"), '', $data));
    // echo json_encode($data);
    // echo json_encode($data, JSON_UNESCAPED_UNICODE);
    // echo json_encode(print_r($data), JSON_UNESCAPED_UNICODE);
    // echo array("name" => $result['name'],"userid" => $result['userid']);
    // echo json_encode(array("name" => $result['name'],"userid" => $result['userid']));
?>