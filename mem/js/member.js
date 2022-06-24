$(document).ready(function() {
    // html include
    $("header").load('/header.html');
    $(".topmenu").load('/topmenu.html');
    $(".lnb").load('/lnb.html');
    $("footer").load('/footer.html');

    // regist_step_01
    $('.choieAge li').on("click", "a", function(){ // 회원 유형 선택 시
        var user_type = $("a").attr("id");
        
        $.post({
            type:'post',
            url:'/member/regist_step_02.html',
            data:user_type,
            dataType:'html',
            success : function(data){
                console.log(data);
                $("#content").html('/member/regist_step_02.html div#sub');
            }
        });
    })
})

