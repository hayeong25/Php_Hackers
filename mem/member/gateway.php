<?php
    include ("./include/header.php");

    // 사이드바 영역
    switch($_GET['menu']) {
        case 'join':
            include ("./include/joinlnb.php");
            break;
        case 'privacy':
            include ("./include/privacylnb.php");
            break;
        case 'find':
            include ("./include/findlnb.php");
            break;
        case 'modify':
            include ("./include/modifylnb.php");
            break;
        case 'secession':
            include ("./include/secessionlnb.php");
            break;
        case 'terms':
            include ("./include/termslnb.php");
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
        case 'modify':
            include ("modify.php");
            break;
        case 'privacy':
            include ("privacy.php");
            break;
        case 'terms':
            include ("terms.php");
            break;
        case 'secession':
            include ("secession.php");
            break;
        case 'id':
            include ("find_id.php");
            break; 
        case 'idResult':
            include ("find_id_result.php");
            break;
        case 'pw':
            include ("find_pw.php");
            break;
        case 'pw1':
            include ("find_pw_result01.php");
            break;
        case 'pw2':
            include ("find_pw_result02.php");
            break;
        case 'pw3':
            include ("find_pw_result03.php");
            break;
    }

    include ("./include/footer.php");
?>