<?php
	session_start();
	$session_id = $_SESSION['userid'];
	$session_name = $_SESSION['name'];

	include  "./db.php";
?>
			<!-- contents -->
			<div class="contents">
				<h2 class="title">강의문의<span class="navi"><a href="/">HOME</a> &gt; <a href="#">강의안내</a> &gt; <em>강의문의</em></span></h2>
				<?php
					$bno = $_GET['bno'];
					// 조회수 1 증가
					$hit = mysqli_fetch_array(mq("select * from board where bno ='".$bno."'"));
					$hit = $hit['hit'] + 1;
					$fet = mq("update board set hit = '".$hit."' where bno = '".$bno."'");

					$sql = mq("select * from board where bno='".$bno."'");
					$board = $sql -> fetch_array();
				?>
				<div class="content_wrap">
					<p class="board_btn">
						<?php if(isset($session_id)) { ?>
							<a href="#" class="green">글쓰기</a>
							<a href="#" class="green">답글</a>
						<?php } ?>
						<a href="/board/gateway.php?menu=list" class="green">목록</a>
						<span>
							<?php if($session_name == $board['name']) { ?>
								<a href="#" class="green">수정</a>
								<a href="#" class="green">삭제</a>
							<?php } ?>
						</span>
					</p>
					<!-- view 페이지 -->
					<div class="board_view" style="padding-bottom:5px">						
						<table>
							<colgroup>
							<col style="width:98px;" />
							<col style="width:152px;" />
							<col style="width:98px;" />
							<col style="width:98px;" />
							<col style="width:98px;" />
							<col style="width:98px" />
							</colgroup>
							<tr>
								<th>구분</th>
								<td colspan="5"  class="last"><?php echo $board['category'] ?></td>
							</tr>
							<tr>
								<th>글제목</th>
								<td colspan="5"  class="last"><?php echo $board['title'] ?></td>
							</tr>
							<tr>
								<th>작성자</th>
									<td><?php echo $board['name'] ?></td>
								<th>조회수</th>
									<td><?php echo $board['hit'] ?></td>
								<th>등록일</th>
									<td class="last"><?php echo $board['regdate'] ?></td>
							</tr>
							<tr>
								<th>첨부파일</th>
								<td colspan="5" class="last"><a href="#"><?php echo $board['filename'] ?></a></td>
							</tr>
							<tr>
								<td colspan="6" class="view last">
									<?php echo $board['content'] ?>
								</td>
							</tr>
						</table>
					</div>
					<!-- // 뷰페이지 끝 -->

					<!-- 댓글 -->
					<div class="reply_wrap">
						<fieldset>
							<legend>댓글달기</legend>
								<p>
									<textarea name="reply_content"></textarea>
									<button name="reply">등록</button>
								</p>
						</fieldset>
						<div class="reply_list">
						<?php
							$bno = $_GET['bno'];

							$sql = mq("select * from reply where bno='".$bno."' order by rno desc");
							while ($reply = $sql -> fetch_array()) {
						?>
							<ul>
								<li class="name">
									<?php echo $reply['name'] ?>
									<span class="date"><?php echo $reply['regdate'] ?></span>
									<?php if($session_name == $reply['name']) { ?>
										<span class="btn"><a href="#" id="modify_reply">수정</a><var>|</var><a href="#" id="delete_reply">삭제</a></span></li>
									<?php } ?>
								<li class="comment"><?php echo $reply['content'] ?>
								</li>
							</ul>
						<?php
							}
						?>
						</div>
					</div>
					<!-- 댓글 끝 -->

					<p class="board_btn">
						<?php if(isset($session_id)) { ?>
							<a href="/board/gateway.php?menu=write" class="green">글쓰기</a>
						<?php } ?>
					</p>
					<div class="board_list">						
						<table>
							<colgroup>
								<col style="width:41px" />
								<col style="width:120px" />
								<col style="width:120px" />
								<col style="width:106px" />
								<col style="width:82px" />
								<col style="width:50px" />
							</colgroup>
							<tr>
								<th>번호</th>
								<th>구분</th>
								<th>제목</th>
								<th>글쓴이</th>
								<th>날짜</th>
								<th class="last">조회수</th>
							</tr>
							<?php
								// 하단 리스트 게시물 5개씩 보여주기
								$sql = mq("select * from board order by bno desc limit 0,5"); 
								while ($board = $sql -> fetch_array()) {
									$title = $board["title"]; 
									if(strlen($title) > 30) { 
										// 제목 길이 30 넘으면 ...
										$title = str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8"). "...", $board["title"]);
									}
							?>
							<tr>
								<td><?php echo $board['bno'] ?></td>
								<td><?php echo $board['category'] ?></td>
								<td class="title"><a href="gateway.php?menu=view&bno=<?php echo $board['bno'] ?>"><?php echo $title ?></a></td>
								<td><?php echo $board['name'] ?></td>
								<td><?php echo $board['regdate'] ?></td>
								<td class="last"><?php echo $board['hit'] ?></td>
							</tr>
							<?php
								}
							?>
						</table>
					</div>
					<div class="paging">
						<p class="btn"><a href="/board/gateway.php?menu=list" class="green">목록</a></p>
						<div>
							<a href="#" class="prev"><img src="/board/images/button/pprev.gif" alt="이전" /></a>
							<a href="#" class="prev"><img src="/board/images/button/prev.gif" alt="이전" /></a>
							<a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a><a href="#">10</a>
							<a href="#" class="next"><img src="/board/images/button/next.gif" alt="다음" /></a>
							<a href="#" class="next"><img src="/board/images/button/nnext.gif" alt="다음" /></a>
						</div>
					</div>
					<fieldset class="search">
						<legend>리스트검색</legend>
						<select>
							<option value="" selected="selected">제목</option>
							<option value="">내용</option>
							<option value="">제목+내용</option>
							<option value="">글쓴이</option>
						</select>
						<input type="text" /><a href="#" class="black"><span>검색</span></a><a href="#" class="black"><span>내가 쓴 글 보기</span></a>
					</fieldset>
				</div>
			</div>
			<!-- // contents 끝 -->
			<script src="/js/jquery-1.9.1.js"></script>
			<script>
				// 댓글 등록
				$("[name='reply']").click(function() {
					if($("[name='reply_content']").val() == "") {
						alert('내용을 입력해주세요.');
						return;
					}

					$.ajax({
						type: 'post',
						url: '/board/reply.php',
						dataType : "JSON",
						data:{
							bno:<?php echo $_GET['bno'] ?>,
							name:<?php echo $session_name ?>,
							content:$("[name='reply_content']").val(),
							mode:'register'
						},
						success: function(data) {
							if(data == "1") {
								location.href = "/board/gateway.php?menu=view&bno=<?php echo $_GET['bno'] ?>";
							}
						},
					});
				})

				// 댓글 수정
				$("#modify_reply").click(function() {
					if($("[name='reply_content']").val() == "") {
						alert('내용을 입력해주세요.');
						return;
					}

					$.ajax({
						type: 'post',
						url: '/board/reply.php',
						dataType : "JSON",
						data:{
							rno:<?php echo $reply['rno'] ?>,
							content:$("[name='reply_content']").val(),
							mode:'modify'
						},
						success: function(data) {
							if(data == "1") {
								location.href = "/board/gateway.php?menu=view&bno=<?php echo $_GET['bno'] ?>";
							}
						},
					});
				})

				// 댓글 삭제
				$("#delete_reply").click(function() {
					$delete = confirm('삭제하시겠습니까?');

					if($delete) {
						$.ajax({
							type: 'post',
							url: '/board/reply.php',
							dataType : "JSON",
							data:{
								rno:<?php echo $reply['rno'] ?>,
								mode:'delete'
							},
							success: function(data) {
								if(data == "1") {
									location.href = "/board/gateway.php?menu=view&bno=<?php echo $_GET['bno'] ?>";
								}
							},
						});
					}
				})
			</script>