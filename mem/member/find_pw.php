<h3 class="mgb10"><img src="/img/member/h3_password01.gif" alt="��й�ȣã��" /></h3>
<div class="idCheck_wrap">
    <div class="left">
        <div class="PW_phone mgb20">
            <p><span><img src="/img/member/text_check13.gif" alt="���̵�"/></span><input type="text" class="name" name="userid" /></p>
            <p><span><img src="/img/member/text_check01.gif" alt="�̸�"/></span><input type="text" class="name" name="username"/></p>
            <p>
                <span><img src="/img/member/text_check02.gif" alt="�������"/></span>
                <select id="year">
                    <option></option>
                </select>
                <label>��</label>
                <select id="month">
                    <option></option>
                </select>
                <label>��</label>
                <select id="day">
                    <option></option>
                </select>
                <label>��</label>
            </p>
            <p>
                <span><img src="/img/member/text_check04.gif" alt="�ڵ�����ȣ"/></span>
                <input type="text" class="phone1" size="4"/> - <input type="text" class="phone2" size="4"/> - <input type="text" class="phone3" size="4"/>
            </p>
        </div>
        <div class="btnC ok"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="Ȯ��"></a></div>
    </div>
    <div class="right">
        <h4 class="mgb30"><img src="/img/member/h4_ipin02.gif" alt="����������" /></h4>
        <div class="ipinCheck ipinPW mgb20">
            <p class="ipin_img mgb20"><img src="/img/member/text_check07.gif" alt="������ ������ ���� ������ ���Ͻø� ������ ���� ��ư�� ���� ȸ�������� ������ �ּ���."></p>
            <p><label class="ipin"><img src="/img/member/text_check08.gif" alt=""></label><input type="text" class="ipin" /></p>
        </div>
        <div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="����������"></a></div>
    </div>
    <div class="clear"></div>
</div>
<script src="/js/jquery-1.8.1.min.js"></script>
<script>
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

    $(".ok").on("click", "a", function() {
        if($("[name='userid']").val() == "") {
            alert('���̵� �Է����ּ���.');
        }
        if($("[name='username']").val() == "") {
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

        var phone = $(".phone1").val() + "-" + $(".phone2").val() + "-" + $(".phone3").val();
        
        $.ajax({
            type: 'post',
            url: '/member/findMember.php',
            dataType : "JSON",
            data:{
                userid:$("[name='userid']").val(),
                phone:phone,
            },
            success: function(data) {
                localStorage.setItem('phone', data.phone);
                localStorage.setItem('email', data.email);
                alert("email : " + data.email + "\nphone : " + data.phone);
                
                if(data != null) {
                    location.href = "/member/gateway.php?menu=find&page=pw1";
                }else {
                    alert('��ϵ��� ���� ȸ���Դϴ�.');
                    return;
                }
            },
        });
    })
</script>