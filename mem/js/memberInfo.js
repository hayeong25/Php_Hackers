// 회원유형 확인
var user_type = localStorage.getItem('user_type');

// 어린이회원일 경우, 보호자 연락처 입력폼 보여주기
if (user_type == 'child') {
    str = '<th><span class="must">보호자 휴대폰번호</span></th>';
    str += '<td>';
    str += '<input type="text" class="phone" name="parent_phone1"> - <input type="text" class="phone" name="parent_phone2"> - <input type="text" class="phone" name="parent_phone3">';
    str += '<p class="tip">※ 보호자(법정대리인)의 정보를 입력해 주세요</p>';
    str += '</td>';
    $(".parent").html(str);

    $("[name='parent_phone3']").change(function() {
        localStorage.setItem('parent_phone1', $("[name='parent_phone1']").val());
        localStorage.setItem('parent_phone2', $("[name='parent_phone2']").val());
        localStorage.setItem('parent_phone3', $("[name='parent_phone3']").val());
    })
}

// 아이디 중복체크
$("#userid").on("click", function() {
    if ($("[name='userid']").val() == "") {
        alert("아이디를 입력해주세요.");
        return;
    }
    if ($("[name='userid']").val().match(/^[a-zA-Z0-9]*$/) == null) {
        alert("아이디는 숫자와 영문만 입력할 수 있습니다.");
        $("[name='userid']").val() = "";
        return;
    }
    if ($("[name='userid']").val().length < 4 || $("[name='userid']").val().length > 15) {
        alert("아이디는 4자 이상 15자 이하로 작성하셔야 합니다.");
        $("[name='userid']").val() = "";
        return;
    }
    $.ajax({
        type: 'get',
        url: '/member/checkMember.php',
        dataType: "html",
        contentType: "application/json; charset=utf-8",
        data: {
            userid: $("[name='userid']").val(),
            mode: 'userid',
        },
        success: function(data) {
            if (data == "0") {
                confirm('사용 가능한 아이디입니다.');
                localStorage.setItem('userid', $("[name='userid']").val());
            } else {
                alert('이미 존재하는 아이디입니다.');
                $("[name='userid']").val() == "";
            }
        },
    });
})

// 비밀번호 입력 시 local Storage에 저장
$("[name='pw_confirm']").change(function() {
    if ($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
        alert('비밀번호가 일치하지 않습니다.');
        $("[name='pw']").val() == "";
        $("[name='pw_confirm']").val() == "";
        return;
    }else {
        localStorage.setItem('pw', $("[name='pw']").val());
    }
})

// 닉네임 중복체크
$("#nick").on("click", function() {
    if ($("[name='nick']").val() == "") {
        alert("닉네임을 입력해주세요.");
        return;
    }
    $.ajax({
        type: 'get',
        url: '/member/checkMember.php',
        dataType: "html",
        contentType: "application/json; charset=utf-8",
        data: {
            nick: $("[name='nick']").val(),
            mode: 'nick',
        },
        success: function(data) {
            if (data == "0") {
                confirm('사용 가능한 닉네임입니다.');
                localStorage.setItem('nick', $("[name='nick']").val());
            } else {
                alert('이미 존재하는 닉네임입니다.');
                $("[name='nick']").val() == "";
            }
        },
    });
})

// 이메일 선택 시, input에 자동 입력
$("[name='email']").on('change', function() {
    $("[name='email2']").val($(this).val());
    localStorage.setItem('email1', $("[name='email1']").val());
    localStorage.setItem('email2', $("[name='email2']").val());
})


if($("[name='sns']").is(":checked")) {
    localStorage.setItem('sns', 'Y');
}else {
    localStorage.setItem('sns', 'N');
}

// 우편번호 검색 팝업
$("#zip_pop").click(function() {
    pop();

    function pop() {
        var screenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var screenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (600 / 2)) + screenLeft;
        var top = ((height / 2) - (600 / 2)) + screenTop;

        window.open('/member/search_zip_pop.php', 'zipcode', 'top=' + top + ', left=' + left + ', width=600, height=600, resizable=no');
    }
})

// 검색한 주소 정보 가져오기
function jusoCallBack(zipcode, juso, juso2) {
    $("[name='zipcode']").val(zipcode);
    $("[name='address1']").val(juso);
    $("[name='address2']").val(juso2);

    localStorage.setItem('zipcode', $("[name='zipcode']").val());
    localStorage.setItem('juso', $("[name='address1']").val());
    localStorage.setItem('juso2', $("[name='address2']").val());
}

// 새로고침 시, 3단계에서 넘어온 항목, 입력한 항목은 default 세팅
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('userid') != null) {
        $("[name='userid']").val(localStorage.getItem('userid'));
    }
    if (localStorage.getItem('pw') != null) {
        $("[name='pw']").val(localStorage.getItem('pw'));
        $("[name='pw_confirm']").val(localStorage.getItem('pw'));
    }
    if (localStorage.getItem('nick') != null) {
        $("[name='nick']").val(localStorage.getItem('nick'));
    }
    $("[name='username']").val(localStorage.getItem('name'));
    if(localStorage.getItem('gender') == 'male') {
        $("[value='male']").prop("checked", true);
    }else if(localStorage.getItem('gender') == 'female') {
        $("[value='female']").attr("checked", true);
    }
    $("#year").val(localStorage.getItem('year'));
    $("#month").val(localStorage.getItem('month'));
    $("#day").val(localStorage.getItem('day'));
    if (localStorage.getItem('email1') != null) {
        $("[name='email1']").val(localStorage.getItem('email1'));
        $("[name='email2']").val(localStorage.getItem('email2'));
        $("[name='email']").val(localStorage.getItem('email2')).attr('selected', true);
    }
    if (localStorage.getItem('sns') == "Y") {
        $("[name='sns']").val(localStorage.getItem('sns')).attr('checked', true);
    }
    $("[name='phone1']").val(localStorage.getItem('phone1'));
    $("[name='phone2']").val(localStorage.getItem('phone2'));
    $("[name='phone3']").val(localStorage.getItem('phone3'));
    if (localStorage.getItem('parent_phone3') != null) {
        $("[name='parent_phone1']").val(localStorage.getItem('parent_phone1'));
        $("[name='parent_phone2']").val(localStorage.getItem('parent_phone2'));
        $("[name='parent_phone3']").val(localStorage.getItem('parent_phone3'));
    }
    if (localStorage.getItem('zipcode') != null) {
        $("[name='zipcode']").val(localStorage.getItem('zipcode'));
    }
    if (localStorage.getItem('juso') != null) {
        $("[name='address1']").val(localStorage.getItem('juso'));
    }
    if (localStorage.getItem('juso2') != null) {
        $("[name='address2']").val(localStorage.getItem('juso2'));
    }
});

// DB data
var userid = localStorage.getItem('userid');
var pw = localStorage.getItem('pw');
var username = localStorage.getItem('name');
var nick = localStorage.getItem('nick');
var birth = localStorage.getItem('year') + localStorage.getItem('month') + localStorage.getItem('day');
var gender = localStorage.getItem('gender');
var email = localStorage.getItem('email1') + "@" + localStorage.getItem('email2');
var sns = localStorage.getItem('sns');
var phone = localStorage.getItem('phone1') + localStorage.getItem('phone2') + localStorage.getItem('phone3');
var parent_phone = localStorage.getItem('parent_phone1') + localStorage.getItem('parent_phone2') + localStorage.getItem('parent_phone3');
var address = localStorage.getItem('juso') + " " + localStorage.getItem('juso2') + " (" + localStorage.getItem('zipcode') + ")";

// 가입하기 버튼 클릭 시 유효성 검사
$(".btnC").on("click", "a", function() {
    // 비밀번호
    if ($("[name='pw']").val() == "") {
        alert('비밀번호를 입력해주세요.');
        return;
    }
    if ($("[name='pw']").val().match(/^[a-zA-Z0-9]*$/) == null) {
        alert('비밀번호는 숫자와 영문만 입력할 수 있습니다.');
        return;
    }
    if ($("[name='pw']").val().length < 4 || $("[name='pw']").val().length > 32) {
        alert("비밀번호는 4자 이상 32자 이하로 작성하셔야 합니다.");
        $("[name='userid']").val() = "";
        return;
    }
    if ($("[name='pw']").val() != $("[name='pw_confirm']").val()) {
        alert('비밀번호가 일치하지 않습니다.');
        return;
    }
    // 이메일
    if ($("[name='email1']").val() == "" || $("[name='email2']").val() == "") {
        alert("이메일을 입력해주세요.");
        return;
    }
    // 보호자 휴대폰번호
    if (user_type == 'child') {
        if ($("[name='parent_phone2']").val() == "" || $("[name='parent_phone3']").val() == "") {
            alert("보호자 연락처를 입력해주세요.");
            return;
        }
    }
    // 주소
    if ($("[name='address1']").val() == "" || $("[name='address1']").val() == "") {
        alert("주소를 입력해주세요.");
        return;
    }

    alert("user_type : " + user_type + "\nuserid : "+ userid + "\npw : " + pw + "\nusername : " + username + "\nnick : "+ nick + "\nbirth : " + birth
     + "\ngender : " + gender + "\nemail : " + email + "\nsns : " + sns + "\nphone : " + phone + "\nparentphone : " + parent_phone + "\naddress : " + address);

    $.ajax({
        type: 'post',
        url: '/member/regist.php',
        dataType: "html",
        contentType: "application/json; charset=utf-8",
        data: {
            user_type: user_type,
            userid: userid,
            pw: pw,
            name: username,
            nick: nick,
            birth: birth,
            gender: gender,
            email: email,
            sns: sns,
            phone: phone,
            parent_phone: parent_phone,
            address: address,
        },
        success: function(data) {
            if (data == '1') {
                location.href = "/member/gateway.php?menu=join&page=step5";
            } else {
                alert('회원가입에 실패했습니다. 다시 시도해주세요.');
            }
        },
    });
})