<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>해커스패스 통합사이트</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="/css/popup.css" />
</head>
<body>
	<div class="popup_join">
		<h1><img src="/img/popup/tit_01.gif" alt="패스닷컴 가입인증" /></h1>
		<div class="con">
			<h3>핸드폰번호 인증</h3>
			<p class="tip_text" style="margin-bottom:20px;">핸드폰으로 받은 인증번호 입력 후 확인을 눌러 주세요.</p>
			<div class="check_num">
				<label><img src="/img/popup/text_01.gif" alt="인증번호" /></label>
				<input type="text" class="checkNum" />
			</div>
			<p class="tip_text" style="margin-bottom:35px;"><span style="font-size:12px;">※</span> 인증비용은 패스닷컴에서 부담합니다</p>
			<h3><img src="/img/popup/text_02.gif" alt="인증번호가 도착하지 않는다면?" /></h3>
			<ul class="check_text">
				<li>재인증을 시도해 주세요.</li>
				<li>재인증 실패 시 통신사에 문의하시기 바랍니다.</li>
				<li>통신사 문의 전 차단설정, 메시지함 용량 초과 여부,<br />스팸문자함을 확인해 주세요.</li>
			</ul>
			<div class="btn">
				<a href="" id="ok"><img src="/img/popup/btn_ok.gif" alt="확인" /></a>
				<a href="#"><img src="/img/popup/btn_re.gif" alt="재전송" /></a>
			</div>
		</div>
	</div>
	<script src="/js/jquery-1.8.1.min.js"></script>
	<script>
		$("#ok").click(function() {
			if($(".checkNum").val() == '1234') {
				confirm('인증되었습니다.');
				window.close();
			}else {
				alert('인증번호를 다시 확인해주세요.');
			}
		})
	</script>
</body>
</html>