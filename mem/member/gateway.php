<?php
    include ("./include/header.php");

    // 사이드바 영역
    switch($_GET['menu']) {
        case 'join':
            include ("./include/joinlnb.php.php");
            break;
        case 'privacy':
            include ("./include/privacylnb.php");
            break;
        case 'find':
            include ("./include/findlnb.php");
            break;
    }

    // content 영역
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