<?php
    include ("./include/header.php");

    // content ����
        // $url = $_SERVER["PHP_SELF"]; // ���� ����ǰ� �ִ� ������ (�Ű����� ������ URL)
        
        // ��ü url���� ȸ������ ��������
        // $user_type = $_POST['user_type'];

        // if(isset($_GET['page'])) {
        //     include ($_GET['page'].".php");
        // }else {
        //     include ("regist_step_01.php");
        // }

        switch($_GET['page']) {
            case 'step1':
                include ("regist_step_01.php");
                break;
            case 'step2':
                include ("regist_step_02.php");
                break;
            case 'step3':
                include ("regist_step_03.php");
                break;
            case 'step4':
                include ("regist_step_04.php");
                break;
            case 'step5':
                include ("regist_complete.php");
                break;
        }

    include ("./include/footer.php");
?>

<!-- gitlab.teamcode88.com -->