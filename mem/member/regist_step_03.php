			<div id="sub" class="content">
				<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; ����ȸ������ &gt; <em>����Ȯ��</em></span></div>
				<div class="con join_wrap">
					<div class="top_img"><img src="/img/member/new2013/top_step03.gif" alt="" /></div>
					<h3 class="mgb10"><img src="/img/member/h3_phone.gif" alt="�޴�������" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<div class="phoneBox mgb20">
								<p><span><img src="/img/member/text_check01.gif" alt="�̸�"/></span><input type="text" class="name" id="name" name="name" required/></p>
								<p>
									<span style="padding:0"><img src="/img/member/text_check03.gif" alt="����"/></span>
									<input type="radio" class="radio" checked><label style="margin-right:25px;">��</label>
									<input type="radio" class="radio"><label>��</label>
								</p>
								<p>
									<span><img src="/img/member/text_check02.gif" alt="�������"/></span>
									<select id="year">
										<option value=""></option>
									</select>
									<label>��</label>
									<select id="month">
										<option value=""></option>
									</select>
									<label>��</label>
									<select id="day">
										<option value=""></option>
									</select>
									<label>��</label>
								</p>
								<p>
									<span><img src="/img/member/text_check04.gif" alt="�ڵ�����ȣ"/></span>
									<select>
										<option value="010">010</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="070">070</option>
									</select>
									- <input type="text" class="phone" /> - <input type="text" class="phone"/>
									<a href="" id="send"><img src="/img/member/btn_sendNum.gif" alt="������ȣ�ޱ�" /></a><br />
								</p>
								<ul class="under_text">
									<li>�ֹε�Ϲ�ȣ �Է� ���� �ڵ�����ȣ�� ȸ�������� �����մϴ�.</li>
									<li>�̸�, �������, ������ <span class="red">���� ������ �Ұ���</span>�ϹǷ�,<br />��Ȯ�ϰ� �Է��� �ֽñ� �ٶ��ϴ�. </li>
									<li>�޽��� ���� ������ �޴������� ������ȣ�� ������ �� ������, <br /><span class="red">���Ϲ�ȣ�� 1�� ���̵� ���� ����</span>�մϴ�.</li>
								</ul>
								
							</div>
							<div class="btnC" id="ok"><a href=""><img src="/img/member/btn_confirm2.gif" alt="Ȯ��"></a></div>
						</div>
						<div class="right">
							<div class="ipinJoin_new mgb20"><p><img src="/img/member/text_check06.gif" alt="������ ������ ���� ������ ���Ͻø� ������ ���� ��ư�� ���� ȸ�������� ������ �ּ���."></p></div>
							<div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="����������"></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		<script src="/js/jquery-1.8.1.min.js"></script>
		<script>
			// ������� select option �߰�
			for(var i = 1920 ; i <= new Date().getFullYear() ; i++) {
				$("#year").append('<option value="' + i + '">' + i + '</option>');    
			}
			for(var i = 1; i <= 12; i++) {
				var month = i > 9 ? i : "0"+i;
				$('#month').append('<option value="' + month + '">' + month + '</option>');    
			}
			for(var i = 1; i <= 31; i++) {
				var day = i > 9 ? i : "0"+i;            
				$('#day').append('<option value="' + day + '">' + day+ '</option>');    
			}
			
			$("#send").click(function() { // ������ȣ Ȯ�� ��ư Ŭ����
				if($("#name").val() == "") {
					alert('�̸��� �Է����ּ���.');
					return;
				}
				if($("#year").val()=="" || $("#month").val()=="" || $("#day").val()==""){
					alert("��������� �������ּ���.");
					return;
				}
				if($(".phone").val() == "") {
					alert('�޴��� ��ȣ�� �Է����ּ���.');
					return;
				}
				
				pop();

				function pop() {
					window.open('/member/sms_auth_pop.php', 'sms_auth', 'top=50%, left=50%, width=400, height=400, resizable=no');
				}
			})

			$("#ok").on("click", "a", function() {
				// DB ȸ�� ���� ��ȸ �ʿ�

				$(this).attr("href", "/member/regist_step_04.php?" + user_type);
			})
		</script>