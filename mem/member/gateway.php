<?php
    include ("./include/header.php");

    // content ����
        // $url = $_SERVER["PHP_SELF"]; // ���� ����ǰ� �ִ� ������ (�Ű����� ������ URL)
        
        // ��ü url���� ȸ������ ��������
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