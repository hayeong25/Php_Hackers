<?php
    include ("./include/header.php");

    // content ����
        $url = $_SERVER["PHP_SELF"]; // ���� ����ǰ� �ִ� ������
        $user_type = isset($_GET['type']); // url���� ȸ������ ��������

        switch($url) {
            case '/member/gateway.php':
                include ("regist_step_01.php");
                break;
            case '/member/regist_step_01.php':
                include ("regist_step_02.php");
                break;
            case '/member/regist_step_02.php':
                include ("regist_step_03.php");
                break;
            case '/member/regist_step_03.php':
                include ("regist_step_04.php");
                break;
            case '/member/regist_step_04.php':
                include ("regist_complete.php");
                break;
        }

    include ("./include/footer.php");
?>