<?php
    include ("./include/header.php");

    // content ����
        $url = $_SERVER["PHP_SELF"]; // ���� ����ǰ� �ִ� ������ (�Ű����� ������ URL)
        // ��ü url���� ȸ������ ��������
        $components = parse_url($_SERVER["REQUEST_URI"]);
        parse_str($components['query'], $result);
        $user_type = $results['type'];

        // class Controller{
        //     public function view($menu) {
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
        //     }
        // }

    include ("./include/footer.php");
?>

<!-- gitlab.teamcode88.com -->