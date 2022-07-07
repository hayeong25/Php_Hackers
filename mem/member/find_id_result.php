			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 회원가입 &gt; <em>아이디/비밀번호찾기</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_id02.gif" alt="아이디 결과" /></h3>
					<div class="findID_wrap mgb50">
						<p>
							<strong class="blue" id="name"></strong>
							<img src="/img/member/text_id01.gif" alt="회원님의 통합아이디는" style="margin:0 5px;"/>
							<strong class="blue" id="userid"></strong>
							<img src="/img/member/text_id02.gif" alt="입니다" />
						</p>
						<a href="/"><img src="/img/member/btn_login_gray.gif" alt="로그인하기" /></a>
						<a href="/member/gateway.php?menu=find&page=pw"><img src="/img/member/btn_find_password.gif" alt="비밀번호 찾기" /></a>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$("#name").append(localStorage.getItem('name'));
				$("#userid").append(localStorage.getItem('userid'));

				localStorage.clear();
			</script>