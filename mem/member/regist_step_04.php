<?php
	$zipcode = isset($_GET['zipcode']) ? $_GET['zipcode'] : "";
	$juso = isset($_GET['juso']) ? $_GET['juso'] : "";
	$juso2 = isset($_GET['juso2']) ? $_GET['juso2'] : ""
?>
			<div id="sub" class="content">
				<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; ����ȸ������ &gt; <em>ȸ�������Է�</em></span></div>
				<div class="con join_wrap">
					<div class="top_img"><img src="/img/member/new2013/top_step04.gif" alt="" /></div>
					<h3 class="mgb10"><img src="/img/member/h3_baseInfo.gif" alt="�⺻�����Է�" /></h3>
					<p class="referText"><img src="/img/member/icon_redStar.gif" alt="*" /> ǥ�� �κ��� �ʼ� �Է»����Դϴ�.</p>
					<form action="/member/regist.php" method="post">
						<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
							<colgroup>
								<col width="136px" />
								<col width="*" />
							</colgroup>
							<tbody>
								<tr>
									<th><span class="must">���̵�</span></th>
									<td><input type="text" class="text" name="userid"/><a href="" id="userid"><img src="/img/member/btn_overlap.gif" alt="�ߺ�Ȯ��"/></a> <span class="tip">(4~10�� ����, ���ڸ� �����մϴ�.)</span></td>
								</tr>
								<tr>
									<th><span class="must">��й�ȣ</span></th>
									<td><input type="password" class="text" name="pw"/> <span class="tip">(��й�ȣ�� 4~32�� ����+���� ���ո� �����մϴ�.)</span></td>
								</tr>
								<tr>
									<th><span class="must">��й�ȣȮ��</span></th>
									<td><input type="password" class="text" name="pw_confirm" /></td>
								</tr>
								<tr>
									<th><span class="must">�̸�</span></th>
									<td><input type="text" class="text" name="name" readonly/></td>
								</tr>
								<tr>
									<th><span class="must">�г���</span></th>
									<td><input type="text" class="text" name="nick"/><a href="" id="nick"><img src="/img/member/btn_overlap.gif" alt="�ߺ�Ȯ��"/></a></td>
								</tr>
								<tr>
									<th><span class="must">�������</span></th>
									<td>
										<input type="text" name="year" id="year" size="4" readonly>
										<label>��</label>
										<input type="text" name="month" id="month" size="4" readonly>
										<label>��</label>
										<input type="text" name="day" id="day" size="4" readonly>
										<label>��</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">����</span></th>
									<td>
										<input type="radio" class="radio" name="gender" value="male" onclick="return false"><label class="mgr30">��</label>
										<input type="radio" class="radio" name="gender" value="female" onclick="return false"><label>��</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">e-mail�ּ�</span></th>
									<td>
										<input type="text" class="text" name="email1"/> @ <input type="text" class="text" name="email2"/> 
										<select style="margin-right:5px;" name="email">
											<option value="">�����Է�</option>
											<option value="gmail.com">gmail.com</option>
											<option value="hotmail.com">hotmail.com</option>
											<option value="naver.com">naver.com</option>
										</select>
										<input type="checkbox" class="checkbox" name="sns" /><label>���ŵ���</label>
										<p class="tip">*�н����Ŀ��� �����ϴ� ������ ������ �޾� �� �� �ֽ��ϴ�.</p>
										<p class="icon_check">[�����Է�]�� ���� ���� ������ �Է½� : ������ ���������� ���ŵ��� ���� �� �ֽ��ϴ�.</p>
										<p class="icon_check">Hotmail, Gmail �̿�� : ������ �������� ������ [���� ������]�� Ȯ�� �� �ֽñ� �ٶ��ϴ�.</p>
									</td>
								</tr>
								<tr>
									<th><span class="must">�޴�����ȣ</span></th>
									<td>
									<input type="text" class="phone" name="phone1" size="4" readonly>
										- <input type="text" class="phone" name="phone2" size="4" readonly> - <input type="text" class="phone" name="phone3" size="4" readonly>
										<p class="tip">* �н����Ŀ��� �����ϴ� ������ ������ �޾� �� �� �ֽ��ϴ�.</p>
									</td>
								</tr>
								<tr class="parent"></tr>
								<tr>
									<th><span class="must">�ּ�</span></th>
									<td>
										<p><input type="text" class="zipcode" name="zipcode" value="<?=$zipcode?>" readonly><a href="" id="zip_pop"><img src="/img/member/btn_zipcode.gif" alt="" /></a></p>
										<p style="margin:5px 0;"><input type="text" class="address" name="address1" value="<?=$juso?>" readonly></p>
										<p><input type="text" class="address" name="address2" value="<?=$juso2?>" readonly></p>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<h3 class="mgb10"><img src="/img/member/h3_choiceInfo.gif" alt="���������Է�" /></h3>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>�����з�</th>
								<td>
									<select name="school">
										<option value="">����</option>
										<option value="middle">���б� ����</option>
										<option value="high">����б� ����</option>
										<option value="col">������ ����</option>
										<option value="univ">4�������� ����</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>����</th>
								<td>
									<select name="job">
										<option value="student">�л�</option>
										<option value="teacher">����</option>
										<option value="parent">�кθ�</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>���԰��</th>
								<td>
									<ul class="inflow">
										<li class="col1"><input type="radio" class="radio"><label>���μҰ�</label></li>
										<li class="col2"><input type="radio" class="radio"><label>��Ŀ������Ʈ(��Ŀ�����п�, ��� ��Ŀ�� ��)</label></li>
										<li class="col3"><input type="radio" class="radio"><label>ȫ����</label></li>
										<li class="col1"><input type="radio" class="radio"><label>���л���Ʈ �˻�</label></li>
										<li class="col2"><input type="radio" class="radio"><label>��Ÿ</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<h3 class="mgb30 interest"><img src="/img/member/h3_favorite.gif" alt="���ɺо߼���" /><span><img src="/img/member/icon_redStar.gif" alt="*" /> �ߺ����� �����մϴ�.</span></h3>
					<p class="interest"><label><input type="checkbox" /> ������</label><label><input type="checkbox" /> ����</label><label><input type="checkbox" /> �����߰���</label></p>
					<h4 class="mgb10"><img src="/img/member/h4_favorite01.gif" alt="����������" /></h4>
					<p class="referText"><img src="/img/member/icon_redStar.gif" alt="*" /> �����ִ� �о߸� �����Ͻø�, ��������� ������ �� �ֽ��ϴ�.</p>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>��������</th>
								<td>
									<ul class="favor_type">
										<li><input type="checkbox" class="checkbox" /><label>�Ϲ�������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����������</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>��ȣ������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>��ȸ������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�ܹ�������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�ҳ⺸ȣ��</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>ȭ����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>���������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>���Ա�������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�����(�Ϲݱ��)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>���۱����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�Ӿ���(�Ϲ��Ӿ�)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�����(�Ϲ����)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������(���갳��)</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>�缭��</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�ҹ���</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>�����繫��</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�����(�Ϲݳ��)</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>��Ÿ</label></li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>��������</th>
								<td>
									<ul class="favor_area">
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>��õ��</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�뱸��</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>���ֽ�</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�λ��</label></li>
										<li><input type="checkbox" class="checkbox" /><label>��⵵</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>���</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>�泲</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>���</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�泲</label></li>
										<li><input type="checkbox" class="checkbox" /><label>���ֵ�</label></li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>���ɰ���</th>
								<td>
									<ul class="favor_subject">
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>�ѱ���</label></li>
										<li><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>��ȸ</label></li>
										<li class="end"><input type="checkbox" class="checkbox" /><label>����</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
										<li><input type="checkbox" class="checkbox" /><label>������</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<h4 class="mgb10"><img src="/img/member/h4_favorite02.gif" alt="����/��Ÿ �ڰ���" /></h4>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th>�����ڰ���</th>
								<td>
									<ul class="favor_license">
										<li class="col1"><input type="checkbox" class="checkbox" /><label>�ݵ����ڻ���</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>�������ڻ���</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>�Ļ���ǰ���ڻ���</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>�����ڿ���</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>�繫���������(����FRM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>�������ںм���</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>�ڻ������(���� FP)</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>��ȯ������ 1��</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>��ȯ������ 2��</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>�����ڷ�</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>�����ڻ������(IFP)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>���׺����ǸŰ�����</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>CFA</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>FRM(����FRM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>�濵������</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>��ȯ������</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>��������</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>����������</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>���꼼��ȸ��</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>����ڱݰ�����(CTM)</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>IFRS������</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>���꼼�� 1��</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>���꼼�� 2��</label></li>
										<li class="col3"><input type="checkbox" class="checkbox" /><label>����ȸ�� 1��</label></li>
										<li class="col1"><input type="checkbox" class="checkbox" /><label>����ȸ�� 2��</label></li>
										<li class="col2"><input type="checkbox" class="checkbox" /><label>���� ������(SSAT, DCAT��)</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- �ε��� �ڰ��� -->
					<h4 class="mgb10"><img src="/img/member/h4_favorite03.gif" alt="�ε��� �ڰ���" /></h4>
					<table cellpadding="0" cellspacing="0" border="0" class="basicType mgb30">
						<colgroup>
							<col width="136px" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th height="45">�����ڰ���</th>
								<td>
									<ul class="favor_license">
										<li class="col4"><input type="checkbox" class="checkbox" /><label>�����߰���</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>���ð�����</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>���/����</label></li>
										<li class="col4"><input type="checkbox" class="checkbox" /><label>�����򰡻�</label></li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- // �ε��� �ڰ��� �� -->
					<div class="btnC"><a href=""><img src="/img/member/btn_join.gif" alt="�����ϱ�"></a></div>
			</div>
		</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
			// ȸ������ Ȯ��
			var user_type = localStorage.getItem('user_type');

			// ���ȸ���� ���, ��ȣ�� ����ó �Է��� �����ֱ�
			if(user_type == 'child') {
				str = '<th><span class="must">��ȣ�� �޴�����ȣ</span></th>';
				str += '<td>';
				str += '<select name="parent_phone1">';
				str += '<option value="010">010</option>';
				str += '<option value="016">016</option>';
				str += '<option value="017">017</option>';
				str += '<option value="070">070</option>';
				str += '</select>';
				str += '- <input type="text" class="phone" name="parent_phone2"> - <input type="text" class="phone" name="parent_phone3">';
				str += '<p class="tip">�� ��ȣ��(�����븮��)�� ������ �Է��� �ּ���</p>';
				str += '</td>';
				$(".parent").html(str);
			}

			// ���̵� �ߺ�üũ
			$("#userid").on("click", function() {
				if($("[name='userid']").val() == "") {
					alert("���̵� �Է����ּ���.");
					return;
				}
				if($("[name='userid']").val().match(/^[a-zA-Z0-9]*$/) == null) {
					alert("���̵�� ���ڿ� ������ �Է��� �� �ֽ��ϴ�.");
					$("[name='userid']").val() = "";
					return;
				}
				if($("[name='userid']").val().length < 4 || $("[name='userid']").val().length > 15){
					alert("���̵�� 4�� �̻� 15�� ���Ϸ� �ۼ��ϼž� �մϴ�.");
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
							confirm('��� ������ ���̵��Դϴ�.');
							localStorage.setItem('userid', $("[name='userid']").val());
						}else {
							alert('�̹� �����ϴ� ���̵��Դϴ�.');
							$("[name='userid']").val() == "";
						}
					},
				});
			})

			// �г��� �ߺ�üũ
			$("#nick").on("click", function() {
				if($("[name='nick']").val() == "") {
					alert("�г����� �Է����ּ���.");
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
							confirm('��� ������ �г����Դϴ�.');
							localStorage.setItem('nick', $("[name='nick']").val());
						}else {
							alert('�̹� �����ϴ� �г����Դϴ�.');
							$("[name='nick']").val() == "";
						}
					},
				});
			})

			// �̸��� ���� ��, input�� �ڵ� �Է�
			$("[name='email']").on('change', function(){
				$("[name='email2']").val($(this).val());
			})

			// �����ȣ �˻� �˾�
			$("#zip_pop").click(function() {
				pop();

				function pop() {
					window.open('/member/search_zip_pop.php', 'zipcode', 'top=50%, left=50%, width=600, height=600, resizable=no');
				}
			})
			
			// �˻��� �ּ� ���� ��������
			function jusoCallBack(zipcode, juso, juso2) {
				$("[name='zipcode']").val(zipcode);
				$("[name='juso']").val(juso);
				$("[name='juso2']").val(juso2);

				localStorage.setItem('zipcode', $("[name='zipcode']").val());
				localStorage.setItem('juso', $("[name='juso']").val());
				localStorage.setItem('juso2', $("[name='juso2']").val());
			}

			// ���ΰ�ħ ��, 3�ܰ迡�� �Ѿ�� �׸�, ���̵�, �г����� default ����
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

			// �����ϱ� ��ư Ŭ�� �� ��ȿ�� �˻�
			$(".btnC").on("click", "a", function() {
				// ��й�ȣ
				if($("[name='pw']").val() == "") {
					alert('��й�ȣ�� �Է����ּ���.');
					return;
				}
				if($("[name='pw']").val().match(/^[a-zA-Z0-9]*$/) == null) {
					alert('��й�ȣ�� ���ڿ� ������ �Է��� �� �ֽ��ϴ�.');
					return;
				}
				if($("[name='pw']").val().length < 4 || $("[name='pw']").val().length > 32){
					alert("��й�ȣ�� 4�� �̻� 32�� ���Ϸ� �ۼ��ϼž� �մϴ�.");
					$("[name='userid']").val() = "";
					return;
				}
				if($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
					alert('��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
					return;
				}
				// �̸���
				if($("[name='email1']").val() == "" || $("[name='email2']").val() == "") {
					alert("�̸����� �Է����ּ���.");
					return;
				}
				// ��ȣ�� �޴�����ȣ
				if(user_type == 'child') {
					if($("[name='parent_phone2']").val() == "" || $("[name='parent_phone3']").val() == "") {
						alert("��ȣ�� ����ó�� �Է����ּ���.");
						return;
					}
				}
				// �ּ�
				if($("[name='address1']").val() == "" || $("[name='address1']").val() == "") {
					alert("�ּҸ� �Է����ּ���.");
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
							confirm('ȸ������ ����');
							location.href = "/member/regist_complete.php";
						}else {
							alert('ȸ�����Կ� �����߽��ϴ�. �ٽ� �õ����ּ���.');
						}
					},
				});
			})
		</script>