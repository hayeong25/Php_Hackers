<div id="sub" class="content">
	<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
	<div class="depth"><span>Home &gt; ����ȸ������ &gt; ȸ����������</span></div>
	<div class="con join_wrap">
		<div class="top_img"><img src="/img/member/new2013/top_step01.gif" alt="" /></div>
		<p class="alignC mgb50"><img src="/img/member/new2013/text_joinAll.gif" alt="" /></p>
		<ul class="choiceAge">
			<form action="" method="post">
				<li class="top"><p><strong class="red">�Ϲ�ȸ��</strong><strong>�� 14�� �̻��� �Ϲ� ȸ��</strong></p><a href="" id="adult"><img src="/img/member/new2013/btn_adult.gif" alt="�Ϲ�ȸ������" /></a></li>
				<li class="bot"><p><strong class="red">���ȸ��</strong><strong>�� 14�� �̸��� ��� ȸ��</strong><br />�� �� 14�� �̸��� ������ �ǰ��Ͽ� ��ȣ��(�����븮��)�� ���ǰ� �ʿ��մϴ�.</p><a href="" id="child"><img src="/img/member/new2013/btn_child.gif" alt="14�� �̸� ȸ������" /></a></li>
			</form>
		</ul>
	</div>
</div>
<script src="/js/jquery-1.8.1.min.js"></script>
<script>
	 // ȸ�� ���� ���� ��
	$('.choiceAge li').on("click", "a", function() {
		localStorage.setItem('user_type', $(this).attr("id")); // ȸ������ local Storage�� ���
		$(this).attr("href", "/member/gateway.php?menu=join&page=step2");
	})
</script>