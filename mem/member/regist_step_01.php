<div id="sub" class="content">
	<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
	<div class="depth"><span>Home &gt; 통합회원가입 &gt; 회원유형선택</span></div>
	<div class="con join_wrap">
		<div class="top_img"><img src="/img/member/new2013/top_step01.gif" alt="" /></div>
		<p class="alignC mgb50"><img src="/img/member/new2013/text_joinAll.gif" alt="" /></p>
		<ul class="choiceAge">
			<form action="" method="post">
				<li class="top"><p><strong class="red">일반회원</strong><strong>만 14세 이상의 일반 회원</strong></p><a href="" id="adult"><img src="/img/member/new2013/btn_adult.gif" alt="일반회원가입" /></a></li>
				<li class="bot"><p><strong class="red">어린이회원</strong><strong>만 14세 미만의 어린이 회원</strong><br />※ 만 14세 미만은 법률에 의거하여 보호자(법정대리인)의 동의가 필요합니다.</p><a href="" id="child"><img src="/img/member/new2013/btn_child.gif" alt="14세 미만 회원가입" /></a></li>
			</form>
		</ul>
	</div>
</div>
<script src="/js/jquery-1.8.1.min.js"></script>
<script>
	 // 회원 유형 선택 시
	$('.choiceAge li').on("click", "a", function() {
		localStorage.setItem('user_type', $(this).attr("id")); // 회원유형 local Storage에 담기
		$(this).attr("href", "/member/gateway.php?menu=join&page=step2");
	})
</script>