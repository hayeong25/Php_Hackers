<?php
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    
    session_start();

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql");

    $userid = $_POST['userid'];
    $pw = $_POST['pw'];

    $sql = "select pw from member where userid = '$userid'";

    $result = mysqli_query($con, $sql);

    password_verify($pw, $result) ? 'true' : 'false';

    if(mysqli_num_rows($result) > 0) {
        if(password_verify($pw, $result)) {
            // �α��� ����
            echo "1";
        }else {
            // ����� ���Դµ� ��й�ȣ ��ġ���� ���� ���
            echo "0";
        }
    }else {
        // �ش� ���̵� ���� ���
        echo "-1";
    }

?>