$(document).ready(function() {
    // html include
    $("header").load('/header.html');
    $(".topmenu").load('/topmenu.html');
    $(".lnb").load('/lnb.html');
    $("footer").load('/footer.html');

    // ȸ�������� URL���� ? �ڿ� �پ� ����
    var user_type = location.href.split('?')[1];

    $(function() {
        // regist_step_01
        $('.choiceAge li').on("click", "a", function() { // ȸ�� ���� ���� ��
            user_type = $(this).attr("id");
    
            $(this).attr("href", "/member/regist_step_02.html?" + user_type);
        })

        // regist_step_02
        $(".btnC").on("click", "a", function() {
            if($("[type='checkbox']").length != $("[type='checkbox']:checked").length) {
                alert('��� �����ؾ� ���� �ܰ�� �Ѿ �� �ֽ��ϴ�.');
            }else {
                $(this).attr("href", "/member/regist_step_03.html?" + user_type);
            }
        })
    })
})