</div>
		<div class="underBlank"></div>
		<div id="footer">
			<p class="logo_footer"><img src="/img/integrate/logo_footer.gif" alt="해커스패스" /></p>
			<div>
				<p class="policy">
					<a href="/member/gateway.php?menu=terms&page=terms"><img src="/img/integrate/footer_icon01.gif" alt="이용약관" /></a>
					<img src="/img/integrate/footer_iconbar.gif" alt="" class="bar" />
					<a href="/member/gateway.php?menu=privacy&page=privacy"><img src="/img/integrate/footer_icon02.gif" alt="개인정보취급방침" /></a>
					<img src="/img/integrate/footer_iconbar.gif" alt="" class="bar" />
					<a href="#"><img src="/img/integrate/footer_icon03.gif" alt="제휴문의" /></a>
				</p>
				<address><img src="/img/integrate/address.gif" alt="서울시 서초구 서초동 1316-15 현대성우빌딩 203호|TEL.02-554-7272|FAX.02-554-0551|사업자등록번호 120-87-09984|(주)챔프스터디 대표이사.장경원|개인정보관리책임자.김병철|COPYRIGHT ⓒ 2012 HACKERSPASS ALL RIGHTS RESERVED" /></address>
			</div>
		</div>
	</div>
	<!--팝업 : 로그인-->
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
						<a href="/member/gateway.php?menu=find&page=id"><img src="/img/integrate/btn_login_find.gif" alt="아이디/비밀번호찾기" /></a>
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
</body>
</html>