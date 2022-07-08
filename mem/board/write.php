<?php
	// if(!isset($session_id)) {
	// 	echo "<script>alert('session_id 없음! 로그인 후 이용해주세요.');</script>";
	// 	echo "<script>location.href = '/board/gateway.php?menu=list';</script>";
	// }else {
?>
			<!-- contents -->
			<div class="contents">
				<h2 class="title">강의문의<span class="navi"><a href="/">HOME</a> &gt; <a href="#">강의안내</a> &gt; <em>강의문의</em></span></h2>
				<div class="content_wrap">					
					<!-- 쓰기 -->
					<form name="tx_editor_form" id="tx_editor_form" action="#" method="post" accept-charset="utf-8">
						<div class="board_write">						
							<table>
								<colgroup>
									<col style="width:98px;" />
									<col style="width:98px" />
								</colgroup>
								<tr>
									<th>기능선택</th>
									<td>
										<label>
											<input type="checkbox" name="notice"/>공지
										</label>
									</td>
								</tr>							
								<tr>
									<th>이름</th>
									<td name="name"><?php $session_name ?></td>
								</tr>
								<tr>
									<th>구분</th>
									<td>
										<select name="category">
											<option value="학원 강의문의">학원 강의문의</option>
											<option value="온라인 강의문의">온라인 강의문의</option>
											<option value="교재 문의">교재 문의</option>
										</select>

									</td>
								</tr>
								<tr>
									<th>제목</th>
									<td>
										<input type="text" class="title" name="title" />
									</td>
								</tr>
								<tr>
									<th>파일첨부</th>
									<td>
										<input type="file" name="file" />
									</td>
								</tr>
								<tr>
									<td colspan="2" class="textarea">
										<div style="width:100%;text-align:center">
											<?php
												include ("./daumeditor/editor.html");
											?>
										</div>
									</td>
								</tr>
							</table>
							<div class="btn_write">
								<a href="#" onClick="saveContent();" class="green">글등록</a>
								<a href="/board/gateway.php?menu=list" class="black">취소</a>
							</div>

						</div>
					</form>
					<!-- // 쓰기 끝 -->					
			</div>
			<!-- // contents 끝 -->
			<script src="/js/jquery-1.9.1.js"></script>
			<script>
				$(".green").click(function() {
					if($("[name='title']").val() == "") {
						alert('제목을 입력하세요.');
						$(this).focus();
					}

					if($(".tx-content-container").val() == "") {
						alert('내용을 입력하세요.');
						$(this).focus();
					}

					var notice;
					if($("[name='notice']").is(":checked")) {
						notice == 'Y';
					}else {
						notice == 'N';
					}

					$.ajax({
						type: 'post',
						url: '/member/board.php',
						dataType : "JSON",
						data:{
							notice:notice,
							name:$("[name='name']").val(),
							category:category,
							title:$("[name='title']").val(),
							content:$(".tx-content-container").val(),
							file:$("[name='file']").val(),
							mode:'register'
						},
						success: function(data) {
							if(data == "1") {
								location.href = "/board/gateway.php?menu=list";
							}else {
								alert('게시글 등록 실패! 메인으로 돌아갑니다.');
							}
							location.href = "/board/gateway.php?menu=list";
						},
					});
				})
			</script>
<?php
	// }
?>