			<div id="sub" class="content">
				<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 통합회원가입 &gt; <em>본인확인</em></span></div>
				<div class="con join_wrap">
					<div class="top_img"><img src="/img/member/new2013/top_step03.gif" alt="" /></div>
					<h3 class="mgb10"><img src="/img/member/h3_phone.gif" alt="휴대폰인증" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<div class="phoneBox mgb20">
								<form action="" method="post">
								<p><span><img src="/img/member/text_check01.gif" alt="이름"/></span><input type="text" class="name" id="name" name="name" required/></p>
								<p>
									<span style="padding:0"><img src="/img/member/text_check03.gif" alt="성별"/></span>
									<input type="radio" class="radio" name="gender" value="male" checked><label style="margin-right:25px;">남</label>
									<input type="radio" class="radio" name="gender" value="female"><label>여</label>
								</p>
								<p>
									<span><img src="/img/member/text_check02.gif" alt="생년월일"/></span>
									<select id="year">
										<option value=""></option>
									</select>
									<label>년</label>
									<select id="month">
										<option value=""></option>
									</select>
									<label>월</label>
									<select id="day">
										<option value=""></option>
									</select>
									<label>일</label>
								</p>
								<p>
									<span><img src="/img/member/text_check04.gif" alt="핸드폰번호"/></span>
									<select id="phone1">
										<option value="010">010</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="070">070</option>
									</select>
									- <input type="text" class="phone" id="phone2"/> - <input type="text" class="phone" id="phone3"/>
									<a href="" id="send"><img src="/img/member/btn_sendNum.gif" alt="인증번호받기" /></a><br />
								</p>
								<ul class="under_text">
									<li>주민등록번호 입력 없이 핸드폰번호로 회원가입이 가능합니다.</li>
									<li>이름, 생년월일, 성별은 <span class="red">추후 변경이 불가능</span>하므로,<br />정확하게 입력해 주시기 바랍니다. </li>
									<li>메시지 수신 가능한 휴대폰으로 인증번호를 받으실 수 있으며, <br /><span class="red">동일번호로 1개 아이디만 가입 가능</span>합니다.</li>
								</ul>
								</form>
							</div>
							<div class="btnC" id="ok"><a href=""><img src="/img/member/btn_confirm2.gif" alt="확인"></a></div>
						</div>
						<div class="right">
							<div class="ipinJoin_new mgb20"><p><img src="/img/member/text_check06.gif" alt="아이핀 인증을 통한 가입을 원하시면 아이핀 인증 버튼을 눌러 회원가입을 진행해 주세요."></p></div>
							<div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="아이핀인증"></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
			// 생년월일 select option 추가
			for(var i = 1920 ; i <= new Date().getFullYear() ; i++) {
				$("#year").append('<option value="' + i + '">' + i + '</option>');    
			}
			for(var i = 1; i <= 12; i++) {
				var month = i > 9 ? i : "0"+i;
				$('#month').append('<option value="' + month + '">' + month + '</option>');    
			}
			for(var i = 1; i <= 31; i++) {
				var day = i > 9 ? i : "0"+i;            
				$('#day').append('<option value="' + day + '">' + day+ '</option>');    
			}

			$("#send").click(function() { // 인증번호 확인 버튼 클릭시
				// 입력값 local Storage에 담기
				localStorage.setItem('name', $("#name").val());
				localStorage.setItem('gender', $("input[name='gender']:checked").val());
				localStorage.setItem('year', $("#year").val());
				localStorage.setItem('month', $("#month").val());
				localStorage.setItem('day', $("#day").val());
				localStorage.setItem('phone1', $("#phone1").val());
				localStorage.setItem('phone2', $("#phone2").val());
				localStorage.setItem('phone3', $("#phone3").val());

				if($("#name").val() == "") {
					alert('이름을 입력해주세요.');
					return;
				}
				if($("#year").val()=="" || $("#month").val()=="" || $("#day").val()==""){
					alert("생년월일을 선택해주세요.");
					return;
				}
				if($("#phone1").val() == "" || $("#phone2").val() == "" || $("#phone3").val() == "") {
					alert('휴대폰 번호를 입력해주세요.');
					return;
				}

				pop();

				function pop() { // 팝업창 스크린 가운데에 띄우기
					var screenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
					var screenTop = window.screenTop != undefined ? window.screenTop : screen.top;

					width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
					height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
			
					var left = ((width / 2) - (500 / 2)) + screenLeft;
					var top = ((height / 2) - (400 / 2)) + screenTop;

					window.open('/member/sms_auth_pop.php', 'sms_auth', 'top=' + top + ', left=' + left + ', width=500, height=400, resizable=no');
				}
			})

			// return 시, local Storage에서 값 가져와 입력값 유지
			document.addEventListener('DOMContentLoaded', function() {
				$("#name").val(localStorage.getItem('name'));
				$("input[name='gender']").val(localStorage.getItem('gender')).attr('checked', true);
				$("#year").val(localStorage.getItem('year'));
				$("#month").val(localStorage.getItem('month'));
				$("#day").val(localStorage.getItem('day'));
				$("#phone1").val(localStorage.getItem('phone1'));
				$("#phone2").val(localStorage.getItem('phone2'));
				$("#phone3").val(localStorage.getItem('phone3'));
			})

			$("#ok").on("click", "a", function() {
				var phone = $("#phone1").val() + $("#phone2").val() + $("#phone3").val();

				// DB 회원 정보 조회
				$.ajax({
					type: 'get',
					url: '/member/checkMember.php',
					dataType : "html",
					contentType: "application/json; charset=utf-8",
					data:{
						phone:phone,
						mode:'phone',
					},
					success: function(data) {
						if(data == "0") {
							localStorage.setItem('name', $("#name").val());
							localStorage.setItem('gender', $("input[name='gender']:checked").val());
							localStorage.setItem('year', $("#year").val());
							localStorage.setItem('month', $("#month").val());
							localStorage.setItem('day', $("#day").val());
							localStorage.setItem('phone1', $("#phone1").val());
							localStorage.setItem('phone2', $("#phone2").val());
							localStorage.setItem('phone3', $("#phone3").val());
							location.href = "/member/gateway.php?menu=join&page=step4";
						}else {
							alert('이미 존재하는 회원입니다.');
							return;
						}
					},
				});
			})
		</script>