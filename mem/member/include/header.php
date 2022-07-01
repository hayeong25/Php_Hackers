<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>해커스패스 통합사이트</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="/css/default.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<p class="logo"><img src="/img/integrate/logo.gif" alt="해커스패스" /></p>
			<div class="topmenu">
				<?php if(!isset($_SESSION['userid'])) { ?>
				<a href="#dialog" name="modal"><img src="/img/integrate/top_icon01.gif" alt="로그인" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="/member/gateway.php?menu=join&page=step1"><img src="/img/integrate/top_icon02.gif" alt="회원가입" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<?php } else { ?>
				<a href="#" onclick="<?unset($_SESSION['userid']);?>"><img src="/img/integrate/top_icon01_1.gif" alt="로그아웃" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="/member/gateway.php?menu=modify&page=modify"><img src="/img/integrate/top_icon02_1.gif" alt="개인정보수정" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<?php } ?>
				<a href="/"><img src="/img/integrate/top_icon03.gif" alt="홈" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon04.gif" alt="시작페이지로 추가" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon05.gif" alt="즐겨찾기 추가" /></a>
				<a href="#" class="family_site"><img src="/img/integrate/img_familysite.gif" alt="해커스 패밀리사이트" /></a>
				<ul class="family_link">
					<li><a href="http://www.hackerspass.com/" target="_blank">해커스 패스ㅣ공무원</a></li>
					<li><a href="#" target="_blank">해커스 패스ㅣ금&nbsp;&nbsp;&nbsp;융</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">해커스토익</a></li>
					<li><a href="http://www.hackers.ac" target="_blank">해커스어학원</a></li>
					<li><a href="http://www.champstudy.com" target="_blank">동영상강의</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">해커스텝스</a></li>
					<li><a href="http://www.gohackers.com" target="_blank">해커스토플</a></li>
					<li><a href="http://www.jumphackers.com" target="_blank">해커스수능</a></li>
					<li><a href="http://recruit.hackers.com/" target="_blank">인재채용</a></li>
					<li><a href="#" target="_blank">해커스교육그룹</a></li>
				</ul>
			</div>
		</div>
		<div id="boxes">
			<div id="dialog" class="window">
				<div class="popup_login">
					<form method="post" action="">
						<p class="btnClose"><a href="#" class="close"><img src="/img/integrate/btn_login_close.gif" alt="닫기" /></a></p>
						<h2><img src="/img/integrate/h2_login.gif" alt="로그인" /></h2>
						<div class="loginBox">
							<div class="textInput">
								<p><label><img src="/img/integrate/login_textID.gif" alt="아이디" /></label><input type="text" class="text" value="" name="userid" /></p>
								<p><label><img src="/img/integrate/login_textPW.gif" alt="비밀번호" /></label><input type="password" class="text" onkeyup="" name="pw" /></p>
							</div>
							<a href="" class="btnLogin"><img src="/img/integrate/btn_login.gif" alt="로그인" /></a>
						</div>
						<div class="loginText">
							<p class="script"><img src="/img/integrate/login_textDivision.gif" alt="비밀번호는 대소문자를 구분합니다." /></p>
							<input type="checkbox" class="checkbox"><label><img src="/img/integrate/login_textSave.gif" alt="아이디저장" /></label>
						</div>
						<div class="btnJoin">
							<a href="/member/gateway.php?menu=join&page=step1"><img src="/img/integrate/btn_login_join.gif" alt="회원가입" /></a>
							<a href="/member/gateway.php?menu=find&page=idPhone"><img src="/img/integrate/btn_login_find.gif" alt="아이디/비밀번호찾기" /></a>
						</div>
					</form>
				</div>
			</div>
			<!-- Mask to cover the whole screen -->
			<div id="mask"></div>
		</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
			$(".btnLogin").click(function() {
				if($("[name='userid']").val() == "") {
					alert('아이디를 입력해주세요.');
				}
				if($("[name='pw']").val() == "") {
					alert('비밀번호를 입력해주세요.');
				}
				
				alert("userid : " + $("[name='userid']").val() + "\npw : " + $("[name='pw']").val());

				$.ajax({
						type: 'post',
						url: '/member/login.php',
						dataType : "html",
						contentType: "application/json; charset=utf-8",
						data:{
							userid:$("[name='userid']").val(),
							pw:$("[name='pw']").val(),
						},
						success: function(data) {
							if (data == '1') {
								alert($("[name='userid']").val() + " 로그인 성공");
								location.href = "/";
							} else if (data == '0') {
								alert('비밀번호가 틀렸습니다.');
							} else {
								alert("아이디가 틀렸습니다.");
							}
						},
					});
			})
		</script>
		<div id="container">