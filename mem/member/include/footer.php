</div>
		<div class="underBlank"></div>
		<div id="footer">
			<p class="logo_footer"><img src="/img/integrate/logo_footer.gif" alt="��Ŀ���н�" /></p>
			<div>
				<p class="policy">
					<a href="/member/gateway.php?menu=terms&page=terms"><img src="/img/integrate/footer_icon01.gif" alt="�̿���" /></a>
					<img src="/img/integrate/footer_iconbar.gif" alt="" class="bar" />
					<a href="/member/gateway.php?menu=privacy&page=privacy"><img src="/img/integrate/footer_icon02.gif" alt="����������޹�ħ" /></a>
					<img src="/img/integrate/footer_iconbar.gif" alt="" class="bar" />
					<a href="#"><img src="/img/integrate/footer_icon03.gif" alt="���޹���" /></a>
				</p>
				<address><img src="/img/integrate/address.gif" alt="����� ���ʱ� ���ʵ� 1316-15 ���뼺����� 203ȣ|TEL.02-554-7272|FAX.02-554-0551|����ڵ�Ϲ�ȣ 120-87-09984|(��)è�����͵� ��ǥ�̻�.����|������������å����.�躴ö|COPYRIGHT �� 2012 HACKERSPASS ALL RIGHTS RESERVED" /></address>
			</div>
		</div>
	</div>
	<!--�˾� : �α���-->
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
						<a href="/member/gateway.php?menu=find&page=id"><img src="/img/integrate/btn_login_find.gif" alt="���̵�/��й�ȣã��" /></a>
					</div>
				</form>
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div id="mask"></div>
	</div>
	<script src="/js/jquery-1.8.1.min.js"></script>
	<script>
		function allPopClose(setName) {
			$("#" + setName).hide();
		}
		$(function() {
			rollingB("issue_tab", "issue_banner");
			rollingC("book_tab", "book_banner");

			$("#mainMenu li").hover(function() {
				$(this).children().children("img.passimg").attr("src", $(this).children().children("img.passimg").attr("src").replace("_off", "_on"));
				$(this).children().children("img.passicon").attr("src", $(this).children().children("img.passicon").attr("src").replace("_off", "_on"));
			}, function() {
				$(this).children().children("img.passimg").attr("src", $(this).children().children("img.passimg").attr("src").replace("_on", "_off"));
				$(this).children().children("img.passicon").attr("src", $(this).children().children("img.passicon").attr("src").replace("_on", "_off"));
			});

		});
		
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
</body>
</html>