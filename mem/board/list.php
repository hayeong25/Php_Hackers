<?php
	session_start();
	$session_id = $_SESSION['userid'];
	$session_name = $_SESSION['name'];

	include  "./db.php";
?>
			<!-- contents -->
			<div class="contents">
				<h2 class="title">강의문의<span class="navi"><a href="/">HOME</a> &gt; <a href="#">강의안내</a> &gt; <em>강의문의</em></span></h2>
				<div class="content_wrap">
					<ul class="tab_menu">
						<li class="on"><a href="/board/gateway.php?menu=list">전체문의</a></li>
						<li><a href="#">학원 강의문의</a></li>
						<li><a href="#">온라인 강의문의</a></li>
						<li><a href="#" class="last">교재 문의</a></li>
					</ul>
					<div class="board_list">
						<table>
							<colgroup>
								<col style="width:41px" />
								<col style="width:120px" />
								<col />
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
								// board 테이블에서 bno 내림차순 20개까지 보여주기
								$sql = mq("select * from board order by bno desc limit 0,20"); 
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
						<p class="btn"><a href="/board/gateway.php?menu=list" class="green">목록</a>
						<?php
							if(isset($session_id)) {
						?>
						<a href="/board/gateway.php?menu=write" class="green">글쓰기</a></p>
						<?php
							}
						?>
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