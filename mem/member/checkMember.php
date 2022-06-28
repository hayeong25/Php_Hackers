<?php
    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $sql = "select phone from member where phone = ".$_POST['phone1'].$_POST['phone2'].$_POST['phone3'];
    $result = mysqli_query($con, $sql);
    
    echo "phone : ".$_POST['phone1'].$_POST['phone2'].$_POST['phone3'];

    if(mysqli_num_rows($result) > 0) {
        echo "true";
    }else {
        echo "false";
    }

    mysqli_close($con);
?>