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
								<td><input type="text" class="text" name="userid" /><a href="" id="userid"><img src="/img/member/btn_overlap.gif" alt="중복확인" /></a> <span class="tip">(4~10자 영문, 숫자만 가능합니다.)</span></td>
							</tr>
							<tr>
								<th><span class="must">비밀번호</span></th>
								<td><input type="password" class="text" name="pw" /> <span class="tip">(비밀번호는 4~32자 영문+숫자 조합만 가능합니다.)</span></td>
							</tr>
							<tr>
								<th><span class="must">비밀번호확인</span></th>
								<td><input type="password" class="text" name="pw_confirm" /></td>
							</tr>
							<tr>
								<th><span class="must">이름</span></th>
								<td><input type="text" class="text" name="name" readonly /></td>
							</tr>
							<tr>
								<th><span class="must">닉네임</span></th>
								<td><input type="text" class="text" name="nick" /><a href="" id="nick"><img src="/img/member/btn_overlap.gif" alt="중복확인" /></a></td>
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
									<input type="text" class="text" name="email1" /> @ <input type="text" class="text" name="email2" />
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
									<p><input type="text" class="zipcode" name="zipcode" readonly><a href="" id="zip_pop"><img src="/img/member/btn_zipcode.gif" alt="" /></a></p>
									<p style="margin:5px 0;"><input type="text" class="address" name="address1" readonly></p>
									<p><input type="text" class="address" name="address2" readonly></p>
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
		<script src="/js/memberInfo.js"></script>