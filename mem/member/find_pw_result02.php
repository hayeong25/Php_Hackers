			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 회원가입 &gt; <em>아이디/비밀번호찾기</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_password02.gif" alt="비밀번호찾기 결과" /></h3>
					<div class="password_wrap mgb50">
						<p class="mgb10"><img src="/img/member/text_pw01.gif" alt="" /><strong class="red" style="margin:0 5px;" id="email"></strong><img src="/img/member/text_pw02.gif" alt="" /></p>
						<p class="mgb30"><img src="/img/member/text_pw03.gif" alt="임시 비밀번호를 확인하신 후, 바로 로그인 하셔서 마이페이지에서 비밀번호를 꼭 변경하시기 바랍니다. 이메일 주소가 정확하지 않아 발송이 되지 않을 경우, 고객센터로 문의하시기 바랍니다." /></p>
						<div class="btnC"><a href="/"><img src="/img/member/btn_login_gray.gif" alt="로그인하기" /></a></div>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$("#email").append(localStorage.getItem('email'));
			</script>