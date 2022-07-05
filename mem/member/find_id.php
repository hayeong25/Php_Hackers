<?header('Content-Type: text/html; charset=UTF-8');?>
			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 회원가입 &gt; <em>아이디/비밀번호찾기</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_id01.gif" alt="아이디찾기" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<h4 class="mgb30">
								<input type="radio" class="radio" name="find" value="phone" checked /><label><img src="/img/member/text_check11.gif" alt="핸드폰번호 인증" /></label>
								<input type="radio" class="radio" name="find" value="email" /><label><img src="/img/member/text_check12.gif" alt="이메일 인증" /></label>
							</h4>
							<div class="ID_phone mgb20">
								<p><span><img src="/img/member/text_check01.gif" alt="이름"/></span><input type="text" value="sksksk" class="name"/></p>
								<p>
									<span><img src="/img/member/text_check02.gif" alt="생년월일"/></span>
									<select id="year">
										<option value="2022"></option>
									</select>
									<label>년</label>
									<select id="month">
										<option value="09"></option>
									</select>
									<label>월</label>
									<select id="day">
										<option value="11"></option>
									</select>
									<label>일</label>
								</p>
								<p>
									<span class="find"></span>
									<div class="info"></div>
								</p>
							</div>
							<div class="btnC ok"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="확인"></a></div>
						</div>
						<div class="right">
							<h4 class="mgb30"><img src="/img/member/h4_ipin02.gif" alt="아이핀인증" /></h4>
							<div class="ipinCheck mgb20">
								<p class="mgb20"><img src="/img/member/text_check07.gif" alt="아이핀 인증을 통한 가입을 원하시면 아이핀 인증 버튼을 눌러 회원가입을 진행해 주세요."></p>
								<p><label class="ipin"><img src="/img/member/text_check08.gif" alt=""></label><input type="text" class="ipin" /></p>
							</div>
							<div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="아이핀인증"></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$(function() {
					// 생년월일 select option 추가
					for(var i = new Date().getFullYear(); i >= 1920; i--) {
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

					$(".find").append('<img src="/img/member/text_check04.gif" alt="핸드폰번호"/>');
					$(".info").append('<input type="text" class="phone1" size="4"/> - <input type="text" class="phone2" size="4"/> - <input type="text" class="phone3" size="4"/>');
				})

				$("[name='find']").change(function() {
					if($("[name='find']:checked").val() == 'phone') {
						$(".find").html('<img src="/img/member/text_check04.gif" alt="핸드폰번호"/>');
						$(".info").html('<input type="text" class="phone1" value="010" size="4"/> - <input type="text" class="phone2" value="4567" size="4"/> - <input type="text" class="phone3" value="4567" size="4"/>');
					}else {
						$(".find").html('<img src="/img/member/text_check14.gif" alt="이메일인증"/>');
						$(".info").html('<input type="text" class="email1" size="6" /> @ <input type="text" class="email2" size="8"/>');
					}
				})

				$(".ok").on("click", "a", function() {
					if($(".name").val() == "") {
						alert('이름을 입력해주세요.');
						return;
					}
					if($("#year").val() == "" || $("#month").val() == "" || $("#day").val() == "") {
						alert('생년월일을 입력해주세요.');
						return;
					}
					if($(".phone1").val() == "" || $(".phone2").val() == "" || $(".phone3").val() == "") {
						alert('휴대폰 번호를 입력해주세요.');
						return;
					}
					if($(".email1").val() == "" || $(".email2").val() == "") {
						alert('이메일을 입력해주세요.');
						return;
					}
					
					var phone = $(".phone1").val() + $(".phone2").val() + $(".phone3").val();
					var email = $(".email1").val() + $(".email2").val();
					
					var data; // 휴대폰번호 or 이메일
					var mode; // 아이디 찾기 방법

					if($("[name='find']:checked").val() == 'phone') {
						data = phone;
						mode = "phone";
					}else {
						data = email;
						mode = "email";
					}

					console.log("aaaa");
					// return;
					// console.log("bbbb");
					
					$.ajax({
						type: 'post',
						url: '/member/findMember.ajax.php',
						dataType : "JSON",
						// contentType: "application/json; charset=utf-8",
						data:{
							data:data,
							mode:mode,
						},
						success: function(data) {
							console.log(data);
							alert(data);

							// var result = JSON.parse(data);
 							// alert("name : " + result.name + "\nid : " + result['userid']);

							alert("username : " + data.name + "\nuserid : " + data.userid);
							alert("username : " + data['name'] + "\nuserid : " + data['userid']);

							// console.log(JSON.stringify(data));
							
							// if(data == "1") {
							// 	location.href = "/member/gateway.php?menu=find&page=idResult";
							// }else {
							// 	alert('등록되지 않은 회원입니다.');
							// 	return;
							// }
						},
					});
				})
			</script>