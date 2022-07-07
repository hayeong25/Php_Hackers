			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 회원가입 &gt; <em>아이디/비밀번호찾기</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_password02.gif" alt="비밀번호찾기 결과" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<h4 class="mgb40"><img src="/img/member/h4_password01.gif" alt="" /></h4>
							<div class="PW_usemail mgb20">
								<p class="mgb20"><img src="/img/member/text_check15.gif" alt="가입 시 등록한 메일주소로 임시비밀번호 받기"></p>
								<p class=""><strong class="red" id="email"></strong></p>
							</div>
							<div class="btnC_2"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="확인"></a></div>
						</div>
						<div class="right">
							<h4 class="mgb40"><img src="/img/member/h4_password02.gif" alt="" /></h4>
							<div class="PW_usephone mgb20">
								<p class="mgb20"><img src="/img/member/text_check16.gif" alt="가입 시 등록한 휴대폰으로 임시비밀번호 받기"></p>
								<p class=""><strong class="red" id="phone"></strong></p>
							</div>
							<div class="btnC_3"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="확인"></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$("#email").append(localStorage.getItem('email'));
				$("#phone").append(localStorage.getItem('phone'));
				
				$(".btnC_2").on("click", "a", function() {
					$.ajax({
						type: 'post',
						url: '/member/findMember.php',
						dataType : "JSON",
						data:{
							data:localStorage.getItem('email'),
							mode:'updatePw_email'
						},
						success: function(data) {
							alert(data);
							location.href = "/member/gateway.php?menu=find&page=pw2";
						},
					});
				})

				$(".btnC_3").on("click", "a", function() {
					$.ajax({
						type: 'post',
						url: '/member/findMember.php',
						dataType : "JSON",
						data:{
							data:localStorage.getItem('phone'),
							mode:'updatePw_phone'
						},
						success: function(data) {
							alert(data);
							location.href = "/member/gateway.php?menu=find&page=pw3";
						},
					});
				})
			</script>