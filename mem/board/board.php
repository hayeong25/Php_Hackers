<?php
    include  "./db.php";

    $data = $_POST;
    $send_mode = $data['mode'];

    switch($send_mode) {
        // 게시글 등록
        case 'write':
            // $send_data = $data['data'];
        
            // $result = mysqli_query($con, $sql);
        
            // if($result > 0) {
            //     echo "1";
            // }else {
            //     echo "0";
            // }
            break;
    }
?>