// // ȸ������ Ȯ��
// var user_type = localStorage.getItem('user_type');

// // ���ȸ���� ���, ��ȣ�� ����ó �Է��� �����ֱ�
// if (user_type == 'child') {
//     str = '<th><span class="must">��ȣ�� �޴�����ȣ</span></th>';
//     str += '<td>';
//     str += '<input type="text" class="phone" name="parent_phone1"> - <input type="text" class="phone" name="parent_phone2"> - <input type="text" class="phone" name="parent_phone3">';
//     str += '<p class="tip">�� ��ȣ��(�����븮��)�� ������ �Է��� �ּ���</p>';
//     str += '</td>';
//     $(".parent").html(str);

//     $("[name='parent_phone3']").change(function() {
//         localStorage.setItem('parent_phone1', $("[name='parent_phone1']").val());
//         localStorage.setItem('parent_phone2', $("[name='parent_phone2']").val());
//         localStorage.setItem('parent_phone3', $("[name='parent_phone3']").val());
//     })
// }

// // ���̵� �ߺ�üũ
// $("#userid").on("click", function() {
//     if ($("[name='userid']").val() == "") {
//         alert("���̵� �Է����ּ���.");
//         return;
//     }
//     if ($("[name='userid']").val().match(/^[a-zA-Z0-9]*$/) == null) {
//         alert("���̵�� ���ڿ� ������ �Է��� �� �ֽ��ϴ�.");
//         $("[name='userid']").val() = "";
//         return;
//     }
//     if ($("[name='userid']").val().length < 4 || $("[name='userid']").val().length > 15) {
//         alert("���̵�� 4�� �̻� 15�� ���Ϸ� �ۼ��ϼž� �մϴ�.");
//         $("[name='userid']").val() = "";
//         return;
//     }
//     $.ajax({
//         type: 'get',
//         url: '/member/checkMember.php',
//         dataType: "html",
//         contentType: "application/json; charset=utf-8",
//         data: {
//             userid: $("[name='userid']").val(),
//             mode: 'userid',
//         },
//         success: function(data) {
//             if (data == "0") {
//                 confirm('��� ������ ���̵��Դϴ�.');
//                 localStorage.setItem('userid', $("[name='userid']").val());
//             } else {
//                 alert('�̹� �����ϴ� ���̵��Դϴ�.');
//                 $("[name='userid']").val() == "";
//             }
//         },
//     });
// })

// // ��й�ȣ �Է� �� local Storage�� ����
// $("[name='pw_confirm']").change(function() {
//     if ($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
//         alert('��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
//         $("[name='pw']").val() == "";
//         $("[name='pw_confirm']").val() == "";
//         return;
//     }else {
//         localStorage.setItem('pw', $("[name='pw']").val());
//     }
// })

// // �г��� �ߺ�üũ
// $("#nick").on("click", function() {
//     if ($("[name='nick']").val() == "") {
//         alert("�г����� �Է����ּ���.");
//         return;
//     }
//     $.ajax({
//         type: 'get',
//         url: '/member/checkMember.php',
//         dataType: "html",
//         contentType: "application/json; charset=utf-8",
//         data: {
//             nick: $("[name='nick']").val(),
//             mode: 'nick',
//         },
//         success: function(data) {
//             if (data == "0") {
//                 confirm('��� ������ �г����Դϴ�.');
//                 localStorage.setItem('nick', $("[name='nick']").val());
//             } else {
//                 alert('�̹� �����ϴ� �г����Դϴ�.');
//                 $("[name='nick']").val() == "";
//             }
//         },
//     });
// })

// // �̸��� ���� ��, input�� �ڵ� �Է�
// $("[name='email']").on('change', function() {
//     $("[name='email2']").val($(this).val());
//     localStorage.setItem('email1', $("[name='email1']").val());
//     localStorage.setItem('email2', $("[name='email2']").val());
// })

// // sns ���� ���� ��
// var sns;
// $("[name='sns']").change(function() {
//     if($(this).is(":checked") == true) {
//         localStorage.setItem('sns', $(this).val());
//         sns = "Y";
//     }
//     else {
//         localStorage.removeItem('sns');
//         sns = "N";
//     }
// })

// // �����ȣ �˻� �˾�
// $("#zip_pop").click(function() {
//     pop();

//     function pop() {
//         var screenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
//         var screenTop = window.screenTop != undefined ? window.screenTop : screen.top;

//         width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
//         height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

//         var left = ((width / 2) - (600 / 2)) + screenLeft;
//         var top = ((height / 2) - (600 / 2)) + screenTop;

//         window.open('/member/search_zip_pop.php', 'zipcode', 'top=' + top + ', left=' + left + ', width=600, height=600, resizable=no');
//     }
// })

// // �˻��� �ּ� ���� ��������
// function jusoCallBack(zipcode, juso, juso2) {
//     $("[name='zipcode']").val(zipcode);
//     $("[name='address1']").val(juso);
//     $("[name='address2']").val(juso2);

//     localStorage.setItem('zipcode', $("[name='zipcode']").val());
//     localStorage.setItem('juso', $("[name='address1']").val());
//     localStorage.setItem('juso2', $("[name='address2']").val());
// }

// // ���� ���� ��
// $("[name='job']").change(function() {
//     if($(this).is(":selected") == true) {
//         localStorage.setItem('job', $(this).val());
//     }
//     else {
//         localStorage.removeItem('job');
//     }
// })

// // ���ΰ�ħ ��, 3�ܰ迡�� �Ѿ�� �׸�, �Է��� �׸��� default ����
// document.addEventListener('DOMContentLoaded', function() {
//     if (localStorage.getItem('userid') != null) {
//         $("[name='userid']").val(localStorage.getItem('userid'));
//     }
//     if (localStorage.getItem('pw') != null) {
//         $("[name='pw']").val(localStorage.getItem('pw'));
//         $("[name='pw_confirm']").val(localStorage.getItem('pw'));
//     }
//     if (localStorage.getItem('nick') != null) {
//         $("[name='nick']").val(localStorage.getItem('nick'));
//     }
//     $("[name='username']").val(localStorage.getItem('name'));
//     $("input[name='gender']").val(localStorage.getItem('gender')).prop('checked', true);
//     $("#year").val(localStorage.getItem('year'));
//     $("#month").val(localStorage.getItem('month'));
//     $("#day").val(localStorage.getItem('day'));
//     if (localStorage.getItem('email1') != null) {
//         $("[name='email1']").val(localStorage.getItem('email1'));
//         $("[name='email2']").val(localStorage.getItem('email2'));
//         $("[name='email']").val(localStorage.getItem('email2')).attr('selected', true);
//     }
//     if (localStorage.getItem('sns') != null) {
//         $("[name='sns']").val(localStorage.getItem('sns')).prop('checked', true);
//     }
//     $("[name='phone1']").val(localStorage.getItem('phone1'));
//     $("[name='phone2']").val(localStorage.getItem('phone2'));
//     $("[name='phone3']").val(localStorage.getItem('phone3'));
//     if (localStorage.getItem('parent_phone3') != null) {
//         $("[name='parent_phone1']").val(localStorage.getItem('parent_phone1'));
//         $("[name='parent_phone2']").val(localStorage.getItem('parent_phone2'));
//         $("[name='parent_phone3']").val(localStorage.getItem('parent_phone3'));
//     }
//     if (localStorage.getItem('zipcode') != null) {
//         $("[name='zipcode']").val(localStorage.getItem('zipcode'));
//     }
//     if (localStorage.getItem('juso') != null) {
//         $("[name='address1']").val(localStorage.getItem('juso'));
//     }
//     if (localStorage.getItem('juso2') != null) {
//         $("[name='address2']").val(localStorage.getItem('juso2'));
//     }
//     if (localStorage.getItem('job') != null) {
//         $("[name='job']").val(localStorage.getItem('job')).attr('selected', true);
//     }
// })

// // DB data
// var userid = localStorage.getItem('userid');
// var pw = localStorage.getItem('pw');
// var username = localStorage.getItem('name');
// var nick = localStorage.getItem('nick');
// var birth = localStorage.getItem('year') + localStorage.getItem('month') + localStorage.getItem('day');
// var gender = localStorage.getItem('gender');
// var email = localStorage.getItem('email1') + "@" + localStorage.getItem('email2');
// var phone = localStorage.getItem('phone1') + localStorage.getItem('phone2') + localStorage.getItem('phone3');
// var parent_phone = localStorage.getItem('parent_phone1') + localStorage.getItem('parent_phone2') + localStorage.getItem('parent_phone3');
// var address = localStorage.getItem('juso') + " " + localStorage.getItem('juso2') + " (" + localStorage.getItem('zipcode') + ")";
// var job = $("[name='job']:selected").val();

// // �����ϱ� ��ư Ŭ�� �� ��ȿ�� �˻�
// $(".btnC").on("click", "a", function() {
//     // ��й�ȣ
//     if ($("[name='pw']").val() == "") {
//         alert('��й�ȣ�� �Է����ּ���.');
//         return;
//     }
//     if ($("[name='pw']").val().match(/^[a-zA-Z0-9]*$/) == null) {
//         alert('��й�ȣ�� ���ڿ� ������ �Է��� �� �ֽ��ϴ�.');
//         return;
//     }
//     if ($("[name='pw']").val().length < 4 || $("[name='pw']").val().length > 32) {
//         alert("��й�ȣ�� 4�� �̻� 32�� ���Ϸ� �ۼ��ϼž� �մϴ�.");
//         $("[name='userid']").val() = "";
//         return;
//     }
//     if ($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
//         alert('��й�ȣ�� ��ġ���� �ʽ��ϴ�.');
//         return;
//     }
//     // �̸���
//     if ($("[name='email1']").val() == "" || $("[name='email2']").val() == "") {
//         alert("�̸����� �Է����ּ���.");
//         return;
//     }
//     // ��ȣ�� �޴�����ȣ
//     if (user_type == 'child') {
//         if ($("[name='parent_phone2']").val() == "" || $("[name='parent_phone3']").val() == "") {
//             alert("��ȣ�� ����ó�� �Է����ּ���.");
//             return;
//         }
//     }
//     // �ּ�
//     if ($("[name='address1']").val() == "" || $("[name='address1']").val() == "") {
//         alert("�ּҸ� �Է����ּ���.");
//         return;
//     }

//     alert("user_type : " + user_type + "\nuserid : "+ userid + "\npw : " + pw + "\nusername : " + username + "\nnick : "+ nick + "\nbirth : " + birth
//      + "\ngender : " + gender + "\nemail : " + email + "\nsns : " + sns + "\nphone : " + phone + "\nparentphone : " + parent_phone + "\naddress : " + address + "\njob : " + job);

//     $.ajax({
//         type: 'post',
//         url: '/member/regist.php',
//         dataType: "html",
//         contentType: "application/json; charset=utf-8",
//         data: {
//             user_type: user_type,
//             userid: userid,
//             pw: pw,
//             name: username,
//             nick: nick,
//             birth: birth,
//             gender: gender,
//             email: email,
//             sns: sns,
//             phone: phone,
//             parent_phone: parent_phone,
//             address: address,
//             job: job,
//         },
//         success: function(data) {
//             alert(data);
//             // if (data == '1') {
//             //     location.href = "/member/gateway.php?menu=join&page=step5";
//             // } else {
//             //     alert('ȸ�����Կ� �����߽��ϴ�. �ٽ� �õ����ּ���.');
//             // }
//         },
//     });
// })