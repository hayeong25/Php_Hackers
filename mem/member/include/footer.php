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
</body>
</html>