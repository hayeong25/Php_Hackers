<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor=white leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
    <table border=0 cellspacing=1 cellpadding=4 width=100% bgcolor=black>
        <tr bgcolor=777777>
            <td align=center><b><font color=white> + �Ʒ��� �ּҸ�Ͽ��� �����Ͽ� �ֽʽÿ�. +</td>
        </tr>
    </table>
    <table border=0 cellspacing=1 cellpadding=2 width=100% bgcolor=888888>
        <tr align=center bgcolor=dddddd>
            <td width=25%>�����ȣ</td>
            <td width=75%>�ּ�</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode">123-123</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">����Ư���� ������ ���ﵿ 1</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode">124-124</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">����Ư���� ������ ���ﵿ 2</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode">125-125</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">����Ư���� ������ ���ﵿ 3</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode">126-126</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">����Ư���� ������ ���ﵿ 4</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode">127-127</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">����Ư���� ������ ���ﵿ 5</span>&nbsp;</td>
        </tr>
    </table>
    <br>
    <div align=center>
        <a href="#" onclick=history.go(-1)><font color=black>�ڷΰ���</a> <font color=bbbbbb>|</font> <a href=# onclick=window.close()><font color=black>â �ݱ�</a>
    </div>
    <script src="/js/jquery-1.8.1.min.js"></script>
    <script>
        $("td").on("click", "[name='juso']", function() {
            var juso = encodeURIComponent($(this).text());
            var zipcode = $(this).parent().find($("[name='zipcode']")).text();

            // alert("zipcode : " + $(this).closest($("[name='zipcode']").text().toString()));
            alert("juso : " + $(this).text() + "\nzipcode : " + JSON.stringify(zipcode));
            location.href = "/member/search_zip2.php?zipcode=" + zipcode + "&juso=" + juso;
        })
    </script>
</html>