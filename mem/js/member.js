$(document).ready(function() {
    // html include
    $("header").load('/member/include/header.html');
    $(".topmenu").load('/member/include/topmenu.html');
    $(".lnb").load('/member/include/lnb.html');
    $("footer").load('/member/include/footer.html');

    // 회원유형은 URL에서 ? 뒤에 붙어 따라감
    var user_type = location.href.split('?')[1];

    $(function() {
        // regist_step_01
        $('.choiceAge li').on("click", "a", function() { // 회원 유형 선택 시
            user_type = $(this).attr("id");
    
            $(this).attr("href", "/member/regist_step_02.html?" + user_type);
        })

        // regist_step_02
        $(".btnC").on("click", "a", function() { // 체크박스 체크유무 확인
            if($("[type='checkbox']").length != $("[type='checkbox']:checked").length) {
                alert('모두 동의해야 다음 단계로 넘어갈 수 있습니다.');
            }else {
                $(this).attr("href", "/member/regist_step_03.html?" + user_type);
            }
        })

        // regist_step_03
        // 생년월일 select option 추가
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
        
        $("#send").click(function() { // 인증번호 확인 버튼 클릭시
            if($("#name").val() == "") {
                alert('이름을 입력해주세요.');
                return;
            }
            if($("#year").val()=="" || $("#month").val()=="" || $("#day").val()==""){
                alert("생년월일을 선택해주세요.");
                return;
            }
            if($(".phone").val() == "") {
                alert('휴대폰 번호를 입력해주세요.');
                return;
            }
            
            $(this).attr("href", "/member/sms_auth_pop.html");
        })

        $("#ok").on("click", "a", function() {
            // DB 회원 정보 조회 필요

            $(this).attr("href", "/member/regist_step_04.html?" + user_type);
        })

        // regist_step_04

        // regist_complete
        $("#joinEnd").on("click", "a", function() {
            $(this).attr("href", "/index.php");
        })
    })
})