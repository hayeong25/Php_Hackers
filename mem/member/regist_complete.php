<?php
	session_start();
?>
<div id="sub" class="content">
	<h2><img src="/img/member/h2_join_all.gif" alt="" /></h2>
	<div class="depth"><span>Home &gt; ����ȸ������ &gt; <em>���ԿϷ�</em></span></div>
	<div class="con join_wrap">
		<div class="top_img"><img src="/img/member/new2013/top_step05.gif" alt="" /></div>
		<p class="alignC mgb30"><img src="/img/member/text_joinAll02.gif" alt="" /></p>
		<div class="fixIDBox mgb50"><p><strong class="blue" id="name"></strong><img src="/img/member/text_joinAll03.gif" alt="ȸ������ ���վ��̵��" /><strong class="blue" id="userid"></strong><img src="/img/member/text_joinAll04.gif" alt="�Դϴ�." /></p></div>
		<div class="btnC mgb50" id="joinEnd"><a href=""><img src="/img/member/btn_joinEnd.gif" alt="���ԿϷ�" /></a></div>
		<h3 class="mgb10"><img src="/img/member/h3_familysite.gif" alt="�н����� �йи� ����Ʈ" /></h3>
		<div>
			<img src="/img/member/new2013/banner_family.gif" usemap="#familysite"  alt="" />
			<map name="familysite">
				<area shape="rect" coords="38,76,150,101" href="http://gosi.pass.com/" target="_blank" alt="��Ŀ���н� �������п�"/>
				<area shape="rect" coords="225,76,337,101" href="http://egosi.pass.com/" target="_blank" alt="��Ŀ�� �н����� ������ ������"/>
				<area shape="rect" coords="412,76,524,101" href="http://police.pass.com/" target="_blank" alt="��Ŀ�� �н����� ����������"/>
				<area shape="rect" coords="599,76,711,101" href="http://epolice.pass.com/" target="_blank" alt="��Ŀ�� �н����� ���������� ������"/>
				<area shape="rect" coords="38,194,150,219" href="http://land.pass.com/" target="_blank" alt="��Ŀ�� �н����� �����߰���"/>
				<area shape="rect" coords="225,194,337,219" href="http://eland.pass.com/" target="_blank" alt="��Ŀ�� �н����� �����߰��� ������"/>
				<area shape="rect" coords="412,194,524,219" href="http://land.pass.com/?keywd=land_main_landgate_0703&logger_kw=land_main_landgate_0703&source=logger_kw" target="_blank" alt="��Ŀ�� �н����� ������"/>
				<area shape="rect" coords="599,194,711,219" href="http://eland.pass.com/?keywd=passgate_elandmain2_20130711&logger_kw=passgate_elandmain2_20130711&source=logger_kw" target="_blank" alt="��Ŀ�� �н����� ������ ������"/>
				<area shape="rect" coords="38,315,151,340" href="http://fn.pass.com" target="_blank" alt="��Ŀ�� �н����� ����"/>
				<area shape="rect" coords="225,315,337,340" href="http://fp.pass.com" target="_blank" alt="��Ŀ�� �н����� AFPK/CFP"/>
				<area shape="rect" coords="412,315,524,340" href="http://www.champstudy.com/" target="_blank" alt="��Ŀ�� è�����͵� ����"/>
				<area shape="rect" coords="599,315,711,340" href="http://www.champstudy.com/Champ_M/?go=biz&book_select=&middle=18&keywd=champbizmain_passgate_20130703&logger_kw=champbizmain_passgate_20130703&source=logger_kw" target="_blank" alt="��Ŀ�� è�����͵� ���"/>
			</map>
		</div>
	</div>
</div>
<?php
	echo "<script>alert('" + $_SESSION['username'] + "')</script>";
?>
<script src="/js/jquery-1.8.1.min.js"></script>
<script>
	$("#name").append(localStorage.getItem('name'));
	$("#userid").append(localStorage.getItem('userid'));
	
	$("#joinEnd").on("click", "a", function() {
		$(this).attr("href", "/");
		localStorage.clear();
	})		
</script>