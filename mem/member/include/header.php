<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��Ŀ���н� ���ջ���Ʈ</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="/css/default.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/integrate.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<p class="logo"><img src="/img/integrate/logo.gif" alt="��Ŀ���н�" /></p>
			<div class="topmenu">
				<?php if(!isset($_SESSION['userid'])) { ?>
				<a href="#dialog" name="modal"><img src="/img/integrate/top_icon01.gif" alt="�α���" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="/member/gateway.php?menu=join&page=step1"><img src="/img/integrate/top_icon02.gif" alt="ȸ������" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<?php } else { ?>
				<a href="#" onclick="<?unset($_SESSION['userid']);?>"><img src="/img/integrate/top_icon01_1.gif" alt="�α׾ƿ�" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="/member/gateway.php?menu=modify&page=modify"><img src="/img/integrate/top_icon02_1.gif" alt="������������" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<?php } ?>
				<a href="/"><img src="/img/integrate/top_icon03.gif" alt="Ȩ" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon04.gif" alt="������������ �߰�" /></a>
				<img src="/img/integrate/top_iconbar.gif" alt="|" class="bar" />
				<a href="#"><img src="/img/integrate/top_icon05.gif" alt="���ã�� �߰�" /></a>
				<a href="#" class="family_site"><img src="/img/integrate/img_familysite.gif" alt="��Ŀ�� �йи�����Ʈ" /></a>
				<ul class="family_link">
					<li><a href="http://www.hackerspass.com/" target="_blank">��Ŀ�� �н��Ӱ�����</a></li>
					<li><a href="#" target="_blank">��Ŀ�� �н��ӱ�&nbsp;&nbsp;&nbsp;��</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">��Ŀ������</a></li>
					<li><a href="http://www.hackers.ac" target="_blank">��Ŀ�����п�</a></li>
					<li><a href="http://www.champstudy.com" target="_blank">��������</a></li>
					<li><a href="http://www.hackers.co.kr" target="_blank">��Ŀ���ܽ�</a></li>
					<li><a href="http://www.gohackers.com" target="_blank">��Ŀ������</a></li>
					<li><a href="http://www.jumphackers.com" target="_blank">��Ŀ������</a></li>
					<li><a href="http://recruit.hackers.com/" target="_blank">����ä��</a></li>
					<li><a href="#" target="_blank">��Ŀ�������׷�</a></li>
				</ul>
			</div>
		</div>
		<div id="boxes">
			<div id="dialog" class="window">
				<div class="popup_login">
					<form method="post" action="">
						<p class="btnClose"><a href="#" class="close"><img src="/img/integrate/btn_login_close.gif" alt="�ݱ�" /></a></p>
						<h2><img src="/img/integrate/h2_login.gif" alt="�α���" /></h2>
						<div class="loginBox">
							<div class="textInput">
								<p><label><img src="/img/integrate/login_textID.gif" alt="���̵�" /></label><input type="text" class="text" value="" name="userid" /></p>
								<p><label><img src="/img/integrate/login_textPW.gif" alt="��й�ȣ" /></label><input type="password" class="text" onkeyup="" name="pw" /></p>
							</div>
							<a href="" class="btnLogin"><img src="/img/integrate/btn_login.gif" alt="�α���" /></a>
						</div>
						<div class="loginText">
							<p class="script"><img src="/img/integrate/login_textDivision.gif" alt="��й�ȣ�� ��ҹ��ڸ� �����մϴ�." /></p>
							<input type="checkbox" class="checkbox"><label><img src="/img/integrate/login_textSave.gif" alt="���̵�����" /></label>
						</div>
						<div class="btnJoin">
							<a href="/member/gateway.php?menu=join&page=step1"><img src="/img/integrate/btn_login_join.gif" alt="ȸ������" /></a>
							<a href="/member/gateway.php?menu=find&page=idPhone"><img src="/img/integrate/btn_login_find.gif" alt="���̵�/��й�ȣã��" /></a>
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
					alert('���̵� �Է����ּ���.');
				}
				if($("[name='pw']").val() == "") {
					alert('��й�ȣ�� �Է����ּ���.');
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
								alert($("[name='userid']").val() + " �α��� ����");
								location.href = "/";
							} else if (data == '0') {
								alert('��й�ȣ�� Ʋ�Ƚ��ϴ�.');
							} else {
								alert("���̵� Ʋ�Ƚ��ϴ�.");
							}
						},
					});
			})
		</script>
		<div id="container">