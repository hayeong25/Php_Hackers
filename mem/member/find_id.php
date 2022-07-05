<?header('Content-Type: text/html; charset=UTF-8');?>
			<div id="sub" class="content">
				<h2><img src="/img/member/h2_findID.gif" alt="" /></h2>
				<div class="depth"><span>Home &gt; ȸ������ &gt; <em>���̵�/��й�ȣã��</em></span></div>
				<div class="con join_wrap">
					<h3 class="mgb10"><img src="/img/member/h3_id01.gif" alt="���̵�ã��" /></h3>
					<div class="idCheck_wrap mgb50">
						<div class="left">
							<h4 class="mgb30">
								<input type="radio" class="radio" name="find" value="phone" checked /><label><img src="/img/member/text_check11.gif" alt="�ڵ�����ȣ ����" /></label>
								<input type="radio" class="radio" name="find" value="email" /><label><img src="/img/member/text_check12.gif" alt="�̸��� ����" /></label>
							</h4>
							<div class="ID_phone mgb20">
								<p><span><img src="/img/member/text_check01.gif" alt="�̸�"/></span><input type="text" value="sksksk" class="name"/></p>
								<p>
									<span><img src="/img/member/text_check02.gif" alt="�������"/></span>
									<select id="year">
										<option value="2022"></option>
									</select>
									<label>��</label>
									<select id="month">
										<option value="09"></option>
									</select>
									<label>��</label>
									<select id="day">
										<option value="11"></option>
									</select>
									<label>��</label>
								</p>
								<p>
									<span class="find"></span>
									<div class="info"></div>
								</p>
							</div>
							<div class="btnC ok"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="Ȯ��"></a></div>
						</div>
						<div class="right">
							<h4 class="mgb30"><img src="/img/member/h4_ipin02.gif" alt="����������" /></h4>
							<div class="ipinCheck mgb20">
								<p class="mgb20"><img src="/img/member/text_check07.gif" alt="������ ������ ���� ������ ���Ͻø� ������ ���� ��ư�� ���� ȸ�������� ������ �ּ���."></p>
								<p><label class="ipin"><img src="/img/member/text_check08.gif" alt=""></label><input type="text" class="ipin" /></p>
							</div>
							<div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="����������"></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<script src="/js/jquery-1.8.1.min.js"></script>
			<script>
				$(function() {
					// ������� select option �߰�
					for(var i = new Date().getFullYear(); i >= 1920; i--) {
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

					$(".find").append('<img src="/img/member/text_check04.gif" alt="�ڵ�����ȣ"/>');
					$(".info").append('<input type="text" class="phone1" size="4"/> - <input type="text" class="phone2" size="4"/> - <input type="text" class="phone3" size="4"/>');
				})

				$("[name='find']").change(function() {
					if($("[name='find']:checked").val() == 'phone') {
						$(".find").html('<img src="/img/member/text_check04.gif" alt="�ڵ�����ȣ"/>');
						$(".info").html('<input type="text" class="phone1" value="010" size="4"/> - <input type="text" class="phone2" value="4567" size="4"/> - <input type="text" class="phone3" value="4567" size="4"/>');
					}else {
						$(".find").html('<img src="/img/member/text_check14.gif" alt="�̸�������"/>');
						$(".info").html('<input type="text" class="email1" size="6" /> @ <input type="text" class="email2" size="8"/>');
					}
				})

				$(".ok").on("click", "a", function() {
					if($(".name").val() == "") {
						alert('�̸��� �Է����ּ���.');
						return;
					}
					if($("#year").val() == "" || $("#month").val() == "" || $("#day").val() == "") {
						alert('��������� �Է����ּ���.');
						return;
					}
					if($(".phone1").val() == "" || $(".phone2").val() == "" || $(".phone3").val() == "") {
						alert('�޴��� ��ȣ�� �Է����ּ���.');
						return;
					}
					if($(".email1").val() == "" || $(".email2").val() == "") {
						alert('�̸����� �Է����ּ���.');
						return;
					}
					
					var phone = $(".phone1").val() + $(".phone2").val() + $(".phone3").val();
					var email = $(".email1").val() + $(".email2").val();
					
					var data; // �޴�����ȣ or �̸���
					var mode; // ���̵� ã�� ���

					if($("[name='find']:checked").val() == 'phone') {
						data = phone;
						mode = "phone";
					}else {
						data = email;
						mode = "email";
					}

					console.log("aaaa");
					// return;
					// console.log("bbbb");
					
					$.ajax({
						type: 'post',
						url: '/member/findMember.ajax.php',
						dataType : "JSON",
						// contentType: "application/json; charset=utf-8",
						data:{
							data:data,
							mode:mode,
						},
						success: function(data) {
							console.log(data);
							alert(data);

							// var result = JSON.parse(data);
 							// alert("name : " + result.name + "\nid : " + result['userid']);

							alert("username : " + data.name + "\nuserid : " + data.userid);
							alert("username : " + data['name'] + "\nuserid : " + data['userid']);

							// console.log(JSON.stringify(data));
							
							// if(data == "1") {
							// 	location.href = "/member/gateway.php?menu=find&page=idResult";
							// }else {
							// 	alert('��ϵ��� ���� ȸ���Դϴ�.');
							// 	return;
							// }
						},
					});
				})
			</script>