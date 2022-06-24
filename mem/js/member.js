$(document).ready(function() {
    // html include
    $("header").load('/header.html');
    $(".topmenu").load('/topmenu.html');
    $(".lnb").load('/lnb.html');
    $("footer").load('/footer.html');

    // 회원유형은 URL에서 ? 뒤에 붙어 따라감
    var user_type = location.href.split('?')[1];

    $(function() {
        // regist_step_01
        $('.choiceAge li').on("click", "a", function() { // 회원 유형 선택 시
            user_type = $(this).attr("id");
    
            $(this).attr("href", "/member/regist_step_02.html?" + user_type);
        })

        // regist_step_02
        $(".btnC").on("click", "a", function() {
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
    })
})