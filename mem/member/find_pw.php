<h3 class="mgb10"><img src="/img/member/h3_password01.gif" alt="비밀번호찾기" /></h3>
<div class="idCheck_wrap">
    <div class="left">
        <div class="PW_phone mgb20">
            <p><span><img src="/img/member/text_check13.gif" alt="아이디"/></span><input type="text" class="name" name="userid" /></p>
            <p><span><img src="/img/member/text_check01.gif" alt="이름"/></span><input type="text" class="name" name="username"/></p>
            <p>
                <span><img src="/img/member/text_check02.gif" alt="생년월일"/></span>
                <select id="year">
                    <option></option>
                </select>
                <label>년</label>
                <select id="month">
                    <option></option>
                </select>
                <label>월</label>
                <select id="day">
                    <option></option>
                </select>
                <label>일</label>
            </p>
            <p>
                <span><img src="/img/member/text_check04.gif" alt="핸드폰번호"/></span>
                <input type="text" class="phone1" size="4"/> - <input type="text" class="phone2" size="4"/> - <input type="text" class="phone3" size="4"/>
            </p>
        </div>
        <div class="btnC ok"><a href="#"><img src="/img/member/btn_confirm2.gif" alt="확인"></a></div>
    </div>
    <div class="right">
        <h4 class="mgb30"><img src="/img/member/h4_ipin02.gif" alt="아이핀인증" /></h4>
        <div class="ipinCheck ipinPW mgb20">
            <p class="ipin_img mgb20"><img src="/img/member/text_check07.gif" alt="아이핀 인증을 통한 가입을 원하시면 아이핀 인증 버튼을 눌러 회원가입을 진행해 주세요."></p>
            <p><label class="ipin"><img src="/img/member/text_check08.gif" alt=""></label><input type="text" class="ipin" /></p>
        </div>
        <div class="btnC"><a href="#"><img src="/img/member/btn_ipinOK.gif" alt="아이핀인증"></a></div>
    </div>
    <div class="clear"></div>
</div>
<script src="/js/jquery-1.8.1.min.js"></script>
<script>
    // 생년월일 select option 추가
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
            alert('아이디를 입력해주세요.');
        }
        if($("[name='username']").val() == "") {
            alert('이름을 입력해주세요.');
            return;
        }
        if($("#year").val() == "" || $("#month").val() == "" || $("#day").val() == "") {
            alert('생년월일을 입력해주세요.');
            return;
        }
        if($(".phone1").val() == "" || $(".phone2").val() == "" || $(".phone3").val() == "") {
            alert('휴대폰 번호를 입력해주세요.');
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
                    alert('등록되지 않은 회원입니다.');
                    return;
                }
            },
        });
    })
</script>