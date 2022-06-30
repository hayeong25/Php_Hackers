<?php
	$zipcode = isset($_GET['zipcode']) ? $_GET['zipcode'] : "";
	$juso = isset($_GET['juso']) ? $_GET['juso'] : "";
	$juso2 = isset($_GET['juso2']) ? $_GET['juso2'] : ""
?>
			<div id="sub" class="content">
				<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; 통합회원가입 &gt; <em>회원정보입력</em></span></div>
				<div class="con join_wrap">
					<div class="top_img"><img src="/img/member/new2013/top_step04.gif" alt="" /></div>
					<h3 class="mgb10"><img src="/img/member/h3_baseInfo.gif" alt="기본정보입력" /></h3>
					<p class="referText"><img src="/img/member/icon_redStar.gif" alt="*" /> 표시 부분은 필수 입력사항입니다.</p>
					<form action="/member/regist.php" method="post">
						<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
							<colgroup>
								<col width="136px" />
								<col width="*" />
							</colgroup>
							<tbody>
								<tr>
									<th><span class="must">아이디</span></th>
									<td><input type="text" class="text" name="userid"/><a href="" id="userid"><img src="/img/member/btn_overlap.gif" alt="중복확인"/></a> <span class="tip">(4~10자 영문, 숫자만 가능합니다.)</span></td>
								</tr>
								<tr>
									<th><span class="must">비밀번호</span></th>
									<td><input type="password" class="text" name="pw"/> <span class="tip">(비밀번호는 4~32자 영문+숫자 조합만 가능합니다.)</span></td>
								</tr>
								<tr>
									<th><span class="must">비밀번호확인</span></th>
									<td><input type="password" class="text" name="pw_confirm" /></td>
								</tr>
								<tr>
									<th><span class="must">이름</span></th>
									<td><input type="text" class="text" name="name" readonly/></td>
								</tr>
								<tr>
									<th><span class="must">닉네임</span></th>
									<td><input type="text" class="text" name="nick"/><a href="" id="nick"><img src="/img/member/btn_overlap.gif" alt="중복확인"/></a></td>
								</tr>
								<tr>
									<th><span class="must">생년월일</span></th>
									<td>
										<input type="text" name="year" id="year" size="4" readonly>
										<label>년</label>
										<input type="text" name="month" id="month" size="4" readonly>
										<label>월</label>
										<input type="text" name="day" id="day" size="4" readonly>
										<label>일</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">성별</span></th>
									<td>
										<input type="radio" class="radio" name="gender" value="male" onclick="return false"><label class="mgr30">남</label>
										<input type="radio" class="radio" name="gender" value="female" onclick="return false"><label>여</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">e-mail주소</span></th>
									<td>
										<input type="text" class="text" name="email1"/> @ <input type="text" class="text" name="email2"/> 
										<select style="margin-right:5px;" name="email">
											<option value="">직접입력</option>
											<option value="gmail.com">gmail.com</option>
											<option value="hotmail.com">hotmail.com</option>
											<option value="naver.com">naver.com</option>
										</select>
										<input type="checkbox" class="checkbox" name="sns" /><label>수신동의</label>
										<p class="tip">*패스닷컴에서 제공하는 유용한 정보를 받아 볼 수 있습니다.</p>
										<p class="icon_check">[직접입력]을 통해 메일 계정을 입력시 : 메일이 정상적으로 수신되지 않을 수 있습니다.</p>
										<p class="icon_check">Hotmail, Gmail 이용시 : 메일이 도착하지 않으면 [스팸 편지함]을 확인 해 주시기 바랍니다.</p>
									</td>
								</tr>
								<tr>
									<th><span class="must">휴대폰번호</span></th>
									<td>
									<input type="text" class="phone" name="phone1" size="4" readonly>
										- <input type="text" class="phone" name="phone2" size="4" readonly> - <input type="text" class="phone" name="phone3" size="4" readonly>
										<p class="tip">* 패스닷컴에서 제공하는 유용한 정보를 받아 볼 수 있습니다.</p>
									</td>
								</tr>
								<tr class="parent"></tr>
								<tr>
									<th><span class="must">주소</span></th>
									<td>
										<p><input type="text" class="zipcode" name="zipcode" value="<?=$zipcode?>" readonly><a href="" id="zip_pop"><img src="/img/member/btn_zipcode.gif" alt="" /></a></p>
										<p style="margin:5px 0;"><input type="text" class="address" name="address1" value="<?=$juso?>" readonly></p>
										<p><input type="text" class="address" name="address2" value="<?=$juso2?>" readonly></p>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<h3 class="mgb10"><img src="/img/member/h3_choiceInfo.gif" alt="선택정보입력" /></h3>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>최종학력</th>
								<td>
									<select name="school">
										<option value="">선택</option>
										<option value="middle">중학교 졸업</option>
										<option value="high">고등학교 졸업</option>
										<option value="col">전문대 졸업</option>
										<option value="univ">4년제대학 졸업</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>직업</th>
								<td>
									<select name="job">
										<option value="student">학생</option>
										<option value="teacher">교사</option>
										<option value="parent">학부모</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>가입경로</th>
								<td>
									<ul class="inflow">
										<li class="col1"><input type="radio" class="radio"><label>지인소개</label></li>
										<li class="col2"><input type="radio" class="radio"><label>해커스사이트(해커스어학원, 고우 해커스 등)</label></li>
										<li class="col3"><input type="radio" class="radio"><label>홍보물</label></li>
										<li class="col1"><input type="radio" class="radio"><label>포털사이트 검색</label></li>
										<li class="col2"><input type="radio" class="radio"><label>기타</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<h3 class="mgb30 interest"><img src="/img/member/h3_favorite.gif" alt="관심분야선택" /><span><img src="/img/member/icon_redStar.gif" alt="*" /> 중복선택 가능합니다.</span></h3>
					<p class="interest"><label><input type="checkbox" /> 공무원</label><label><input type="checkbox" /> 금융</label><label><input type="checkbox" /> 공인중개사</label></p>
					<h4 class="mgb10"><img src="/img/member/h4_favorite01.gif" alt="공무원시험" /></h4>
					<p class="referText"><img src="/img/member/icon_redStar.gif" alt="*" /> 관심있는 분야를 선택하시면, 맞춤관리를 받으실 수 있습니다.</p>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>관심직렬</th>
								<td>
									<ul class="favor_type">
										<li><input type="checkbox" class="checkbox" /><label>일반행정직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>세무직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>관세직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>교육행정직</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>보호관찰직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>사회복지직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>외무영사직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>교정직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>소년보호직</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>화공직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>마약수사직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>출입국관리직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>기계직(일반기계)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>전기직</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>전송기술직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>임업직(일반임업)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>토목직(일반토목)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>건축직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>전산직(전산개발)</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>사서직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>소방직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>군무원</label></li>
										<li><input type="checkbox" class="checkbox" /><label>경찰직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>감사직</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>검찰사무직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>농업직(일반농업)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>보건직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>기타</label></li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>관심지역</th>
								<td>
									<ul class="favor_area">
										<li><input type="checkbox" class="checkbox" /><label>국가직</label></li>
										<li><input type="checkbox" class="checkbox" /><label>서울시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>인천시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>대구시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>대전시</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>광주시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>울산시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>부산시</label></li>
										<li><input type="checkbox" class="checkbox" /><label>경기도</label></li>
										<li><input type="checkbox" class="checkbox" /><label>강원도</label></li>
										<li><input type="checkbox" class="checkbox" /><label>충북</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>충남</label></li>
										<li><input type="checkbox" class="checkbox" /><label>전북</label></li>
										<li><input type="checkbox" class="checkbox" /><label>전남</label></li>
										<li><input type="checkbox" class="checkbox" /><label>경북</label></li>
										<li><input type="checkbox" class="checkbox" /><label>경남</label></li>
										<li><input type="checkbox" class="checkbox" /><label>제주도</label></li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>관심과목</th>
								<td>
									<ul class="favor_subject">
										<li><input type="checkbox" class="checkbox" /><label>국어</label></li>
										<li><input type="checkbox" class="checkbox" /><label>영어</label></li>
										<li><input type="checkbox" class="checkbox" /><label>한국사</label></li>
										<li><input type="checkbox" class="checkbox" /><label>수학</label></li>
										<li><input type="checkbox" class="checkbox" /><label>사회</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>과학</label></li>
										<li><input type="checkbox" class="checkbox" /><label>행정학</label></li>
										<li><input type="checkbox" class="checkbox" /><label>행정법</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<h4 class="mgb10"><img src="/img/member/h4_favorite02.gif" alt="금융/기타 자격증" /></h4>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>관심자격증</th>
								<td>
									<ul class="favor_license">
										<li class="col1"><input type="checkbox" class="checkbox" /><label>펀드투자상담사</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>증권투자상담사</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>파생상품투자상담사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>투자자운용사</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>재무위험관리사(국내FRM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>금융투자분석사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>자산관리사(은행 FP)</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>외환전문역 1종</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>외환전문역 2종</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>은행텔러</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>종합자산관리사(IFP)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>변액보험판매관리사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>CFA</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>FRM(국제FRM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>경영지도사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>외환관리사</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>무역영어</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>국제무역사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>전산세무회계</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>기업자금관리사(CTM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>IFRS관리사</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>전산세무 1급</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>전산세무 2급</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>전산회계 1급</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>전산회계 2급</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>대기업 인적성(SSAT, DCAT등)</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- 부동산 자격증 -->
					<h4 class="mgb10"><img src="/img/member/h4_favorite03.gif" alt="부동산 자격증" /></h4>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th height="45">관심자격증</th>
								<td>
									<ul class="favor_license">
										<li class="col4"><input type="checkbox" class="checkbox" /><label>공인중개사</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>주택관리사</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>경매/공매</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>감정평가사</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- // 부동산 자격증 끝 -->
					<div class="btnC"><a href=""><img src="/img/member/btn_join.gif" alt="가입하기"></a></div>
			</div>
		</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
			// 회원유형 확인
			var user_type = localStorage.getItem('user_type');

			// 어린이회원일 경우, 보호자 연락처 입력폼 보여주기
			if(user_type == 'child') {
				str = '<th><span class="must">보호자 휴대폰번호</span></th>';
				str += '<td>';
				str += '<select name="parent_phone1">';
				str += '<option value="010">010</option>';
				str += '<option value="016">016</option>';
				str += '<option value="017">017</option>';
				str += '<option value="070">070</option>';
				str += '</select>';
				str += '- <input type="text" class="phone" name="parent_phone2"> - <input type="text" class="phone" name="parent_phone3">';
				str += '<p class="tip">※ 보호자(법정대리인)의 정보를 입력해 주세요</p>';
				str += '</td>';
				$(".parent").html(str);
			}

			// 아이디 중복체크
			$("#userid").on("click", function() {
				if($("[name='userid']").val() == "") {
					alert("아이디를 입력해주세요.");
					return;
				}
				if($("[name='userid']").val().match(/^[a-zA-Z0-9]*$/) == null) {
					alert("아이디는 숫자와 영문만 입력할 수 있습니다.");
					$("[name='userid']").val() = "";
					return;
				}
				if($("[name='userid']").val().length < 4 || $("[name='userid']").val().length > 15){
					alert("아이디는 4자 이상 15자 이하로 작성하셔야 합니다.");
					$("[name='userid']").val() = "";
					return;
				}
				$.ajax({
					type: 'get',
					url: '/member/checkMember.php',
					dataType : "html",
					contentType: "application/json; charset=utf-8",
					data:{
						userid:$("[name='userid']").val(),
						mode:'userid',
					},
					success: function(data) {
						if(data == "0") {
							confirm('사용 가능한 아이디입니다.');
							localStorage.setItem('userid', $("[name='userid']").val());
						}else {
							alert('이미 존재하는 아이디입니다.');
							$("[name='userid']").val() == "";
						}
					},
				});
			})

			// 닉네임 중복체크
			$("#nick").on("click", function() {
				if($("[name='nick']").val() == "") {
					alert("닉네임을 입력해주세요.");
					return;
				}
				$.ajax({
					type: 'get',
					url: '/member/checkMember.php',
					dataType : "html",
					contentType: "application/json; charset=utf-8",
					data:{
						nick:$("[name='nick']").val(),
						mode:'nick',
					},
					success: function(data) {
						if(data == "0") {
							confirm('사용 가능한 닉네임입니다.');
							localStorage.setItem('nick', $("[name='nick']").val());
						}else {
							alert('이미 존재하는 닉네임입니다.');
							$("[name='nick']").val() == "";
						}
					},
				});
			})

			// 이메일 선택 시, input에 자동 입력
			$("[name='email']").on('change', function(){
				$("[name='email2']").val($(this).val());
			})

			// 우편번호 검색 팝업
			$("#zip_pop").click(function() {
				pop();

				function pop() {
					window.open('/member/search_zip_pop.php', 'zipcode', 'top=50%, left=50%, width=600, height=600, resizable=no');
				}
			})
			
			// 검색한 주소 정보 가져오기
			function jusoCallBack(zipcode, juso, juso2) {
				$("[name='zipcode']").val(zipcode);
				$("[name='juso']").val(juso);
				$("[name='juso2']").val(juso2);

				localStorage.setItem('zipcode', $("[name='zipcode']").val());
				localStorage.setItem('juso', $("[name='juso']").val());
				localStorage.setItem('juso2', $("[name='juso2']").val());
			}

			// 새로고침 시, 3단계에서 넘어온 항목, 아이디, 닉네임은 default 세팅
			document.addEventListener('DOMContentLoaded', function() {
				if(localStorage.getItem('userid') != null) {
					$("[name='userid']").val(localStorage.getItem('userid'));
				}
				if(localStorage.getItem('nick') != null) {
					$("[name='nick']").val(localStorage.getItem('nick'));
				}
				$("[name='name']").val(localStorage.getItem('name'));
				$("input[name='gender']").val(localStorage.getItem('gender')).prop('checked', true);
				$("#year").val(localStorage.getItem('year'));
				$("#month").val(localStorage.getItem('month'));
				$("#day").val(localStorage.getItem('day'));
				$("[name='phone1']").val(localStorage.getItem('phone1'));
				$("[name='phone2']").val(localStorage.getItem('phone2'));
				$("[name='phone3']").val(localStorage.getItem('phone3'));

				if(localStorage.getItem('zipcode') != null) {
					$("[name='zipcode']").val(localStorage.getItem('zipcode'));
				}
				if(localStorage.getItem('juso') != null) {
					$("[name='juso']").val(localStorage.getItem('juso'));
				}
				if(localStorage.getItem('juso2') != null) {
					$("[name='juso2']").val(localStorage.getItem('juso2'));
				}
				
				alert("zipcode : " + localStorage.getItem('zipcode') + "\njuso : " + localStorage.getItem('juso') + "\njuso2 : " + localStorage.getItem('juso2'));
			})

			// 가입하기 버튼 클릭 시 유효성 검사
			$(".btnC").on("click", "a", function() {
				// 비밀번호
				if($("[name='pw']").val() == "") {
					alert('비밀번호를 입력해주세요.');
					return;
				}
				if($("[name='pw']").val().match(/^[a-zA-Z0-9]*$/) == null) {
					alert('비밀번호는 숫자와 영문만 입력할 수 있습니다.');
					return;
				}
				if($("[name='pw']").val().length < 4 || $("[name='pw']").val().length > 32){
					alert("비밀번호는 4자 이상 32자 이하로 작성하셔야 합니다.");
					$("[name='userid']").val() = "";
					return;
				}
				if($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
					alert('비밀번호가 일치하지 않습니다.');
					return;
				}
				// 이메일
				if($("[name='email1']").val() == "" || $("[name='email2']").val() == "") {
					alert("이메일을 입력해주세요.");
					return;
				}
				// 보호자 휴대폰번호
				if(user_type == 'child') {
					if($("[name='parent_phone2']").val() == "" || $("[name='parent_phone3']").val() == "") {
						alert("보호자 연락처를 입력해주세요.");
						return;
					}
				}
				// 주소
				if($("[name='address1']").val() == "" || $("[name='address1']").val() == "") {
					alert("주소를 입력해주세요.");
					return;
				}

				var sns = "N";
				if($("[name='sns']").is(':checked') == true) {
					sns = "Y";
				}
				
				$.ajax({
					type: 'post',
					url: '/member/regist.php',
					dataType : "html",
					contentType: "application/json; charset=utf-8",
					data:{
						user_type:user_type,
						userid:localStorage.getItem('userid'),
						pw:$("[name='pw']").val(),
						name:localStorage.getItem('name'),
						nick:localStorage.getItem('nick'),
						birth:localStorage.getItem('year') + "-" + localStorage.getItem('month') + "-" + localStorage.getItem('day'),
						gender:localStorage.getItem('gender'),
						email:$("[name='email1']").val() + "@" + $("[name='email2']").val(),
						sns:sns,
						phone:localStorage.getItem('phone1') + localStorage.getItem('phone2') + localStorage.getItem('phone3'),
						parent_phone:$("[name='parent_phone1']").val() + $("[name='parent_phone2']").val() + $("[name='parent_phone3']").val(),
						address:$("[name='address1']").val() + " " + $("[name='address2']").val(),
						job:$("[name='job']").val(),
					},
					success: function(data) {
						if(data == '1') {
							confirm('회원가입 성공');
							location.href = "/member/regist_complete.php";
						}else {
							alert('회원가입에 실패했습니다. 다시 시도해주세요.');
						}
					},
				});
			})
		</script>