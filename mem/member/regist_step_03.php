			<div id="sub" class="content">
				<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; ����ȸ������ &gt; <em>����Ȯ��</em></span></div>
				<div class="con join_wrap">
					<div class="top_img"><img src="/img/member/new2013/top_step03.gif" alt="" /></div>
					<h3 class="mgb10"><img src="/img/member/h3_phone.gif" alt="�޴�������" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<div class="phoneBox mgb20">
								<form action="" method="post">
								<p><span><img src="/img/member/text_check01.gif" alt="�̸�"/></span><input type="text" class="name" id="name" name="name" required/></p>
								<p>
									<span style="padding:0"><img src="/img/member/text_check03.gif" alt="����"/></span>
									<input type="radio" class="radio" name="gender" value="male" checked><label style="margin-right:25px;">��</label>
									<input type="radio" class="radio" name="gender" value="female"><label>��</label>
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
									<select id="phone1">
										<option value="010">010</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="070">070</option>
									</select>
									- <input type="text" class="phone" id="phone2"/> - <input type="text" class="phone" id="phone3"/>
									<a href="" id="send"><img src="/img/member/btn_sendNum.gif" alt="������ȣ�ޱ�" /></a><br />
								</p>
								<ul class="under_text">
									<li>�ֹε�Ϲ�ȣ �Է� ���� �ڵ�����ȣ�� ȸ�������� �����մϴ�.</li>
									<li>�̸�, �������, ������ <span class="red">���� ������ �Ұ���</span>�ϹǷ�,<br />��Ȯ�ϰ� �Է��� �ֽñ� �ٶ��ϴ�. </li>
									<li>�޽��� ���� ������ �޴������� ������ȣ�� ������ �� ������, <br /><span class="red">���Ϲ�ȣ�� 1�� ���̵� ���� ����</span>�մϴ�.</li>
								</ul>
								</form>
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
				// �Է°� local Storage�� ���
				localStorage.setItem('name', $("#name").val());
				localStorage.setItem('gender', $("input[name='gender']:checked").val());
				localStorage.setItem('year', $("#year").val());
				localStorage.setItem('month', $("#month").val());
				localStorage.setItem('day', $("#day").val());
				localStorage.setItem('phone1', $("#phone1").val());
				localStorage.setItem('phone2', $("#phone2").val());
				localStorage.setItem('phone3', $("#phone3").val());

				if($("#name").val() == "") {
					alert('�̸��� �Է����ּ���.');
					return;
				}
				if($("#year").val()=="" || $("#month").val()=="" || $("#day").val()==""){
					alert("��������� �������ּ���.");
					return;
				}
				if($("#phone1").val() == "" || $("#phone2").val() == "" || $("#phone3").val() == "") {
					alert('�޴��� ��ȣ�� �Է����ּ���.');
					return;
				}

				pop();

				function pop() { // �˾�â ��ũ�� ����� ����
					var screenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
					var screenTop = window.screenTop != undefined ? window.screenTop : screen.top;

					width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
					height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
			
					var left = ((width / 2) - (500 / 2)) + screenLeft;
					var top = ((height / 2) - (400 / 2)) + screenTop;

					window.open('/member/sms_auth_pop.php', 'sms_auth', 'top=' + top + ', left=' + left + ', width=500, height=400, resizable=no');
				}
			})

			// return ��, local Storage���� �� ������ �Է°� ����
			document.addEventListener('DOMContentLoaded', function() {
				$("#name").val(localStorage.getItem('name'));
				$("input[name='gender']").val(localStorage.getItem('gender')).attr('checked', true);
				$("#year").val(localStorage.getItem('year'));
				$("#month").val(localStorage.getItem('month'));
				$("#day").val(localStorage.getItem('day'));
				$("#phone1").val(localStorage.getItem('phone1'));
				$("#phone2").val(localStorage.getItem('phone2'));
				$("#phone3").val(localStorage.getItem('phone3'));
			})

			$("#ok").on("click", "a", function() {
				var phone = $("#phone1").val() + $("#phone2").val() + $("#phone3").val();

				// DB ȸ�� ���� ��ȸ
				$.ajax({
					type: 'get',
					url: '/member/checkMember.php',
					dataType : "html",
					contentType: "application/json; charset=utf-8",
					data:{
						phone:phone,
						mode:'phone',
					},
					success: function(data) {
						if(data == "0") {
							localStorage.setItem('name', $("#name").val());
							localStorage.setItem('gender', $("input[name='gender']:checked").val());
							localStorage.setItem('year', $("#year").val());
							localStorage.setItem('month', $("#month").val());
							localStorage.setItem('day', $("#day").val());
							localStorage.setItem('phone1', $("#phone1").val());
							localStorage.setItem('phone2', $("#phone2").val());
							localStorage.setItem('phone3', $("#phone3").val());
							location.href = "/member/gateway.php?menu=join&page=step4";
						}else {
							alert('�̹� �����ϴ� ȸ���Դϴ�.');
							return;
						}
					},
				});
			})
		</script>