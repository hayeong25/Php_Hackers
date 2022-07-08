<?php
	header('Content-Type: text/html; charset=UTF-8');

	$session_id = $_SESSION['userid'];
	$session_name = $_SESSION['name'];

	echo "<script>alert('session_id : $session_id')</script>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="/css/default.css" />
<link rel="stylesheet" type="text/css" href="/css/member.css" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<title>해커스패스 통합사이트</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<p class="logo"><img src="/img/integrate/logo.gif" alt="해커스패스" /></p>
			<div class="topmenu">
				<?php if(!isset($session_id)) { ?>
				<a href="/" name="modal"><img src="/img/integrate/top_icon01.gif" alt="로그인" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="/member/gateway.php?menu=join&page=step1"><img src="/img/integrate/top_icon02.gif" alt="회원가입" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<?php } else { ?>
				<a href="#" onclick="<?php session_destroy($session_id);?>"><img src="/img/integrate/top_icon01_1.gif" alt="로그아웃" /></a>
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
		<div id="container">