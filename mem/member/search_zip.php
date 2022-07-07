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
            <td align=center><b><font color=white> + 아래의 주소목록에서 선택하여 주십시오. +</td>
        </tr>
    </table>
    <table border=0 cellspacing=1 cellpadding=2 width=100% bgcolor=888888>
        <tr align=center bgcolor=dddddd>
            <td width=25%>우편번호</td>
            <td width=75%>주소</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode" data-value="123-123">123-123</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">서울특별시 강남구 역삼동 1</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode" data-value="124-124">124-124</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">서울특별시 강남구 역삼동 2</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode" data-value="125-125">125-125</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">서울특별시 강남구 역삼동 3</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode" data-value="126-126">126-126</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">서울특별시 강남구 역삼동 4</span>&nbsp;</td>
        </tr>
        <tr bgcolor=white>
            <td bgcolor=white align=center height=25><span name="zipcode" data-value="127-127">127-127</span></td>
            <td bgcolor=white align=left height=25>&nbsp;&nbsp;<span name="juso">서울특별시 강남구 역삼동 5</span>&nbsp;</td>
        </tr>
    </table>
    <br>
    <div align=center>
        <a href="#" onclick=history.go(-1)><font color=black>뒤로가기</a> <font color=bbbbbb>|</font> <a href=# onclick=window.close()><font color=black>창 닫기</a>
    </div>
    <script src="/js/jquery-1.8.1.min.js"></script>
    <script>
        $("[name='juso']").click(function() {
            var juso = $(this).text();
            var zipcode = $(this).parent().prev().find($("[name='zipcode']")).data('value');
            
            location.href = "/member/search_zip2.php?zipcode=" + zipcode + "&juso=" + juso;
        })
    </script>
</html>