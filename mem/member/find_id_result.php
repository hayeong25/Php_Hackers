			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; ȸ������ &gt; <em>���̵�/��й�ȣã��</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_id02.gif" alt="���̵� ���" /></h3>
					<div class="findID_wrap mgb50">
						<p>
							<strong class="blue" id="name"></strong>
							<img src="/img/member/text_id01.gif" alt="ȸ������ ���վ��̵��" style="margin:0 5px;"/>
							<strong class="blue" id="userid"></strong>
							<img src="/img/member/text_id02.gif" alt="�Դϴ�" />
						</p>
						<a href="#dialog"><img src="/img/member/btn_login_gray.gif" alt="�α����ϱ�" /></a>
						<a href="/member/gateway.php?menu=find&page=pwPhone"><img src="/img/member/btn_find_password.gif" alt="��й�ȣ ã��" /></a>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$("#name").append(localStorage.getItem('name'));
				$("#userid").append(localStorage.getItem('userid'));
			</script>