<html>
<head>
<title>Search ZipCode</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"> 
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor=white leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table border=0 cellspacing=1 cellpadding=4 width=100% bgcolor=black height=100%>
    <tr bgcolor=777777>
      <td align=center><b><font color=white>�����ȣ �˻� </b>(Search Zipcode)</td>
    </tr>
    <tr bgcolor=white>
      <td align=center height=100%>
        �����ȣ�� �˻��մϴ�.<br>
        ã���� �ϴ� ���� �̸��� �Է��Ͽ� �ֽʽÿ�.<br>
        ( ��: <b>���ﵿ</b> )<br><br>
        <input type="text" name="search" value="" size="20" class="input" style="cursor:text;"><input type="submit" value="Search" class="submit"><input type="button" value="Close" class="close" onclick=window.close()>
        <br><br><br>
      </td>
    </tr>
  </table>
  <script src="/js/jquery-1.8.1.min.js"></script>
  <script>
    $("[type='submit']").click(function(e) {
      e.preventDefault();

      if($("[name='search']").val() == "") {
        alert('�˻�� �Է����ּ���.');
        return;
      }
      
      location.href = "/member/search_zip.php?juso=" + encodeURIComponent($("[name='search']").val());
    })
  </script>
</body>
</html>
