$(document).ready(function() {
    // html include
    $("header").load('/member/include/header.html');
    $(".topmenu").load('/member/include/topmenu.html');
    $(".lnb").load('/member/include/lnb.html');
    $("footer").load('/member/include/footer.html');

    // ȸ�������� URL���� ? �ڿ� �پ� ����
    var user_type = location.href.split('?')[1];

    $(function() {
        // regist_step_01
        $('.choiceAge li').on("click", "a", function() { // ȸ�� ���� ���� ��
            user_type = $(this).attr("id");
    
            $(this).attr("href", "/member/regist_step_02.html?" + user_type);
        })

        // regist_step_02
        $(".btnC").on("click", "a", function() { // üũ�ڽ� üũ���� Ȯ��
            if($("[type='checkbox']").length != $("[type='checkbox']:checked").length) {
                alert('��� �����ؾ� ���� �ܰ�� �Ѿ �� �ֽ��ϴ�.');
            }else {
                $(this).attr("href", "/member/regist_step_03.html?" + user_type);
            }
        })

        // regist_step_03
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
            
            $(this).attr("href", "/member/sms_auth_pop.html");
        })

        $("#ok").on("click", "a", function() {
            // DB ȸ�� ���� ��ȸ �ʿ�

            $(this).attr("href", "/member/regist_step_04.html?" + user_type);
        })

        // regist_step_04

        // regist_complete
        $("#joinEnd").on("click", "a", function() {
            $(this).attr("href", "/index.php");
        })
    })
})