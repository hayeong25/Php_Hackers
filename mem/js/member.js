$(document).ready(function() {
    // html include
    $("header").load('/header.html');
    $(".topmenu").load('/topmenu.html');
    $(".lnb").load('/lnb.html');
    $("footer").load('/footer.html');

    var user_type;

    // regist_step_01
    $('.choiceAge li').on("click", "a", function() { // 회원 유형 선택 시
        user_type = $(this).attr("id");

        $(this).attr("href", "/member/regist_step_02.html?" + user_type);
    })

    // regist_step_02
    $(".btnC").click(function() {
        $(".checkbox").each(function() {
            if(":checked") {
                
            }else {
                confirm('모두 동의해야 다음 단계로 넘어갈 수 있습니다.');
                return;
            }
        })
        $(this).attr("href", "/member/regist_step_03.html?" + user_type);
    })
})

