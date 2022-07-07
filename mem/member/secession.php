			<div id="sub" class="content">
				<h2><img src="/img/member/h2_out.gif" alt="회원탈퇴" /></h2>
				<div class="depth"><span>Home &gt; 개인정보관리 &gt; <em>회원탈퇴</em></span></div>
				<div class="con mOut_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_out01.gif" alt="탈퇴유의사항" /></h3>
					<div class="warningBox">
						<p class="mgb25"><img src="/img/member/text_out01.gif" alt="회원 탈퇴시 패스닷컴 웹사이트에서 제공되는 서비스를 사용하실 수 없습니다. 가입 시 등록하셨던 모든 개인정보가 삭제됩니다." /></p>
						<table cellpadding="0" cellspacing="0" border="0" class="mgb50">
							<colgroup>
								<col width="128px" />
								<col width="128px" />
								<col width="*" />
							</colgroup>
							<tbody>
								<tr>
									<th rowspan="3" class="borderR">개인정보입력</th>
									<th>성명</th>
									<td><input type="text" class="info" name="username" readonly/><?php $session_name ?></td>
								</tr>
								<tr>
									<th>ID</th>
									<td><input type="text" class="info" name="userid" readonly/><?php $session_id ?></td>
								</tr>
								<tr>
									<th>비밀번호</th>
									<td><input type="text" class="info" name="pw"/></td>
								</tr>
							</tbody>
						</table>
						<h3 class="mgb25"><img src="/img/member/h3_out02.gif" alt="탈퇴사유" /></h3>
						<p class="mgb25"><img src="/img/member/text_out02.gif" alt="앞으로 패스닷컴의 더욱 발전된 모습을 위해 만족스럽지 못한 부분이 있으시다면 체크해주시면 감사하겠습니다." /></p>
						<ul class="out_reason mgb25">
							<li><input type="checkbox" class="checkbox" /><label>다른 아이디로 재가입을 위해</label></li>
							<li><input type="checkbox" class="checkbox" /><label>서비스 장애가 잦아서</label></li>
							<li><input type="checkbox" class="checkbox" /><label>불만이나 불편사항에 대한 응대가 나빠서</label></li>
							<li><input type="checkbox" class="checkbox" /><label>무료로 제공하는 컨텐츠 등의 혜택이 적어서</label></li>
							<li><input type="checkbox" class="checkbox" /><label>컨텐츠의 품질이 낮아서</label></li>
							<li><input type="checkbox" class="checkbox" /><label>사용빈도가 낮아서</label></li>
						</ul>
						<p class="mgb25"><img src="/img/member/text_out03.gif" alt="추가로 패스닷컴에 바라는 점이 있다면 작성해주시면 감사하겠습니다." /></p>
						<div class="etcText mgb20"><textarea></textarea></div>
						<div class="btnC"><a href=""><img src="/img/member/btn_member_out.gif" alt="탈퇴하기"></a></div>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$(".btnC").on("click", "a", function() {
					if($("[name='pw']").val() == "") {
						alert('비밀번호를 입력해주세요.');
						return;
					}

					if($("[type='checkbox']:checked").length < 1) {
						alert('탈퇴 사유를 선택해주세요.');
						return;
					}

					$.ajax({
						type: 'post',
						url: '/member/checkMember.php',
						dataType : "json",
						data:{
							userid:$("[name='userid']").val(),
							pw:$("[name='pw']").val(),
							mode:'secession',
						},
						success: function(data) {
							if (data == '1') {
								alert('탈퇴처리 되었습니다. 메인으로 돌아갑니다.');
								<?php
									$userid.session_destroy();
									$username.session_destroy();
								?>
								location.href = "/";
							} else {
								alert("비밀번호가 틀렸습니다.");
								return;
							}
						},
					});
				})
			</script>