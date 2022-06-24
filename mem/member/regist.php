<?php
    $userid = $_POST['userid'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $nick = $_POST['nick'];
    $birth = $_POST['birth1'] + $_POST['birth2'] + $_POST['birth3'];
    $gender = $_POST['gender'];
    $email = $_POST['email1'] + $_POST['email2'];
    $sns = $_POST['sns'];
    $phone = $_POST['phone1'] + $_POST['phone2'] + $_POST['phone3'];
    $parent_phone = $_POST['parent_phone1'] + $_POST['parent_phone2'] + $_POST['parent_phone3'];
    $address = $_POST['address1'] + $_POST['address2'];

    $con = mysqli_connect("localhost", "root", "hackers1234!", "mysql") or die ("Can't access DB");
    $query = "insert into member (userid, pw, name, nick, birth, gender, email, sns, phone, parent_phone, address) values('".$userid."','".$pw."','".$name."','".$nick."','".$birth."','".$gender."','".$email."','".$sns."','".$phone."','".$parent_phone."','".$address."')";
    $resut = mysqli_query($con,$query);

    if(!$result) {
?>
        <script>
            confirm('회원가입 성공');
            location.href = "/member/regist_complete.html";
        </script> 
<?php
    } else {
?>
        <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href=".."; </script>
<?php
    }
?>