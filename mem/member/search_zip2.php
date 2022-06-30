<?php
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : "";
    $juso = isset($_POST['juso']) ? $_POST['juso'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body OnUnload='write2_close();' bgcolor=white leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
    <table border=0 cellspacing=1 cellpadding=4 width=100% bgcolor=black height=100%>
        <form name="write2" method="post">
            <tr bgcolor=777777>
                <td align=center><b><font color=white>우편번호 입력 </b>(Insert Zipcode)</td>
            </tr>
            <tr bgcolor=white>
                <td align=center height=100%>
                나머지 주소 부분을 입력 하신후 확인을 눌러 주십시오.<br><br>
                <? 
                    $juso = $_GET['juso'];
                    echo $juso;
                ?>
                <br>
            <input type=text name=juso2 class='input' size=40><input type='button' value='확 인' class='submit' name=p onclick=write2_close()>
            <input type="hidden" name="zipcode" value="<? echo $zipcode ?>">
            <input type="hidden" name="juso" value="<? echo $juso ?>">
        </form>
    </table>
</body>
</html>