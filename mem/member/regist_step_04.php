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
									<td><input type="text" class="text" name="userid"/> <a href="#"><img src="/img/member/btn_overlap.gif" alt="�ߺ�Ȯ��"/></a> <span class="tip">(4~10�� ����, ���ڸ� �����մϴ�.)</span></td>
								</tr>
								<tr>
									<th><span class="must">��й�ȣ</span></th>
									<td><input type="password" class="text" name="pw"/> <span class="tip">(��й�ȣ�� 4~32�� ����+���� ���ո� �����մϴ�.)</span></td>
								</tr>
								<tr>
									<th><span class="must">��й�ȣȮ��</span></th>
									<td><input type="password" class="text" name="pw" /></td>
								</tr>
								<tr>
									<th><span class="must">�̸�</span></th>
									<td><input type="text" class="text" name="name"/> </td>
								</tr>
								<tr>
									<th><span class="must">�г���</span></th>
									<td><input type="text" class="text" name="nick"/> </td>
								</tr>
								<tr>
									<th><span class="must">�������</span></th>
									<td>
										<select id="year" name="birth1">
											<option value=""></option>
										</select>
										<label>��</label>
										<select id="month" name="birth2">
											<option value=""></option>
										</select>
										<label>��</label>
										<select id="day" name="birth3">
											<option value=""></option>
										</select>
										<label>��</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">����</span></th>
									<td>
										<input type="radio" class="radio" name="gender"><label class="mgr30">��</label>
										<input type="radio" class="radio" name="gender"><label>��</label>
									</td>
								</tr>
								<tr>
									<th><span class="must">e-mail�ּ�</span></th>
									<td>
										<input type="text" class="text" name="email1"/> @ <input type="text" class="text" name="email2"/> 
										<select style="margin-right:5px;">
											<option>�����Է�</option>
											<option>gmail.com</option>
											<option>hotmail.com</option>
											<option>naver.com</option>
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
										<select name="phone1">
											<option>010</option>
										</select>
										- <input type="text" class="phone" name="phone2"> - <input type="text" class="phone" name="phone3">
										<p class="tip">* �н����Ŀ��� �����ϴ� ������ ������ �޾� �� �� �ֽ��ϴ�.</p>
									</td>
								</tr>
								{%if user_type == 'child'%}
								<tr>
									<th><span class="must">��ȣ�� �޴�����ȣ</span></th>
									<td>
										<select name="parent_phone1">
											<option>010</option>
										</select>
										- <input type="text" class="phone" name="parent_phone1"> - <input type="text" class="phone" name="parent_phone1">
										<p class="tip">�� ��ȣ��(�����븮��)�� ������ �Է��� �ּ���</p>
									</td>
								</tr>
								{% end if %}
								<!--
								<tr>
									<th><span class="must">����ȭ��ȣ</span></th>
									<td>
										<select>
											<option>010</option>
										</select>
										- <input type="text" class="phone"> - <input type="text" class="phone">
									</td>
								</tr>
								-->
								<tr>
									<th><span class="must">�ּ�</span></th>
									<td>
										<p><input type="text" class="zipcode"> - <input type="text" class="zipcode"> <a href="/member/search_zip_pop.html"><img src="/img/member/btn_zipcode.gif" alt="" /></a></p>
										<p style="margin:5px 0;"><input type="text" class="address" name="address1"></p>
										<p><input type="text" class="address" name="address2"></p>
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
									<select>
										<option>����</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>����</th>
								<td>
									<select>
										<option>�л�</option>
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
					<div class="btnC"><a href="#"><img src="/img/member/btn_join.gif" alt="�����ϱ�"></a></div>
			</div>
		</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
				
		</script>