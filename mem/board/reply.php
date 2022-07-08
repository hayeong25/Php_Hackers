<?php
    include  "./db.php";

    $data = $_POST;
    $send_mode = $data['mode'];

    switch($send_mode) {
        // 댓글 등록
        case 'register':
            $bno = $data['bno'];
            $name = $data['name'];
            $content = $data['content'];
            
            $mno = mysqli_fetch_assoc(mq("select no from member where name = '$name'"));

            if(isset($rno)) {
                $sql = mq("insert into reply (bno, mno, name, content, regdate) values('".$bno."','".$mno."','".$name."','".$content."', date_format(sysdate(), '%Y-%m-%d'))"); 
                echo "1";
                return;
            }else {
                echo "-1";
                return;
            }
            break;
        // 댓글 수정
        case 'modify':
            $rno = $data['rno'];
            $content = $data['content'];
            
            if(isset($rno)) {
                $sql = mq("update reply set content = '$content', regdate = date_format(sysdate(), '%Y-%m-%d') where rno = '$rno'");

                echo "1";
                return;
            }else {
                echo "-1";
                return;
            }
            break;
        // 댓글 삭제
        case 'delete':
            $rno = $data['rno'];
            
            if(isset($rno)) {
                $sql = mq("delete from reply where rno = '$rno'");

                echo "1";
                return;
            }else {
                echo "-1";
                return;
            }
            break;
    }
?>