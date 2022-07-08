<?php
    include ("./include/header.php");

    // content 영역
    switch($_GET['menu']) {
        case 'list':
            include ("list.php");
            break;
        case 'view':
            include ("view.php");
            break;
        case 'write':
            include ("write.php");
            break;
    }

    include ("./include/footer.php");
?>