<?php
    $zipcode = isset($_GET['zipcode']) ? $_GET['zipcode'] : "";
    $juso = isset($_GET['juso']) ? $_GET['juso'] : "";
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
                <td align=center><b><font color=white>�����ȣ �Է� </b>(Insert Zipcode)</td>
            </tr>
            <tr bgcolor=white>
                <td align=center height=100%>
                ������ �ּ� �κ��� �Է� �Ͻ��� Ȯ���� ���� �ֽʽÿ�.<br><br>
                <br>
            <input type=text name=juso2 class='input' size=40><input type='button' value='Ȯ ��' class='submit' name=p>
            <input type="hidden" name="zipcode" value="<?=$zipcode ?>">
            <input type="hidden" name="juso" value="<?=$juso ?>">
            <input type="hidden" name="juso2" value="">
        </form>
    </table>
    <script src="/js/jquery-1.8.1.min.js"></script>
    <script>
        $(".submit").click(function() {
            $("input[name='juso2']").val() == $(".input").val();

            var zipcode = $("input[name='zipcode']").val();
            var juso = $("input[name='juso']").val();
            var juso2 = $("input[name='juso2']").val();

            opener.jusoCallBack(zipcode, juso, juso2);
		    window.close();
        })
    </script>
</body>
</html>