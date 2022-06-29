<?php
    include ("./include/header.php");

    // content 영역
        // $url = $_SERVER["PHP_SELF"]; // 현재 실행되고 있는 페이지 (매개변수 제외한 URL)
        
        // 전체 url에서 회원유형 가져오기
        // $user_type = $_POST['user_type'];

        if(isset($_POST['page'])) {
            include ("/member/".$_POST['page'].".php");
        }else {
            include ("regist_step_01.php");
        }

        // switch(isset($_GET['page'])) {
        //     case '/member/gateway.php':
        //         include ("regist_step_01.php");
        //         break;
        //     case '/member/regist_step_01.php':
        //         include ("regist_step_02.php");
        //         break;
        //     case '/member/regist_step_02.php':
        //         include ("regist_step_03.php");
        //         break;
        //     case '/member/regist_step_03.php':
        //         include ("regist_step_04.php");
        //         break;
        //     case '/member/regist_step_04.php':
        //         include ("regist_complete.php");
        //         break;
        // }

    include ("./include/footer.php");
?>

<!-- gitlab.teamcode88.com -->