//패밀리사이트
	$(function(){ 
		$("#header .family_site").click(function(){ 
			$("ul.family_link").toggle();
		});
		$("ul.family_link a").click(function(){ 
			$("ul.family_link").hide();
		});
	});

//사이트링크
	$(function(){ 
		$(".hackers_link").mouseover(function(){ 
			$(this).height(217);
			$(this).css('margin-top','-195px');
			$("ul.site_url").show();
			$(".site_link img").attr('src','/img/integrate/btn_sitelink_close.gif');
		});

		$(".hackers_link").mouseleave(function(){ 
			$(this).height(22);
			$(this).css('margin-top','0px');
			$("ul.site_url").hide();
			$(".site_link img").attr('src','/img/integrate/btn_sitelink.gif');
		});

	});

//공무원 메뉴
	$(function(){ 
		$("#official_menu").mouseover(function(){ 
			$("#official_menu p.out").hide();
			$("#official_menu p.over").show();
		});
		$("#official_menu").mouseout(function(){ 
			$("#official_menu p.over").hide();
			$("#official_menu p.out").show();
		});
	});

//금융 메뉴
	$(function(){ 
		$("#container .content .notice .notice_btn span.next").click(function(){ 
			$("#container .content .notice .page1").hide();
			$("#container .content .notice .page2").show();
		});
		$("#container .content .notice .notice_btn span.pre").click(function(){ 
			$("#container .content .notice .page2").hide();
			$("#container .content .notice .page1").show();
		});
	});

//공지사항
	$(function(){ 
		$("#finance_menu").mouseover(function(){ 
			$("#finance_menu p.out").hide();
			$("#finance_menu p.over").show();
		});
		$("#finance_menu").mouseout(function(){ 
			$("#finance_menu p.over").hide();
			$("#finance_menu p.out").show();
		});
	});


//modal window popup
$(document).ready(function() {
	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		//Get the A tag
		var id = $(this).attr('href');
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		//transition effect
		//$('#mask').fadeIn(100);
		$('#mask').fadeTo("slow",0.5);
		//Get the window height and width
//		var winH = $(window).height();
//		var winW = $(window).width();
		//Set the popup window to center
//		$(id).css('top', winH/2-$(id).height()/2);
//		$(id).css('left', winW/2-$(id).width()/2);
		//transition effect
		$(id).fadeIn(1000); 
	});
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		$('#mask').hide();
		$('.window').hide();
	});
});

function loginSubmit(){
	var frm=document.getElementsByName('loginFrm')[0];
	var obj_id=document.getElementsByName('input_id')[0];
	var obj_pw=document.getElementsByName('input_pw')[0];
	
	if(!obj_id.value){
		alert('아이디를 입력해주세요');
		obj_id.focus();
		return;
	}
	
	if(!obj_pw.value){
		alert('비밀번호를 입력해주세요');
		obj_pw.focus();
		return;
	}
	if(obj_id.value == 'amandauk' || obj_id.value == 'hyj2u' || obj_id.value == 'todla105'){
		frm.action = "http://www.pass.com/member/login_ok.php";
	}else{
		frm.action = "https://www.pass.com:444/member/login_ok.php";
	}
	if(obj_id.value == 'hsw7336'){
		
		alert('aa');
		frm.action = "http://www.pass.com/member/login_ok.php";
	}
		frm.submit();





}

function loginSubmit2(){
	var frm=document.getElementsByName('loginFrm')[0];
	var obj_id=document.getElementsByName('input_id')[0];
	var obj_pw=document.getElementsByName('input_pw')[0];
	
	if(!obj_id.value){
		alert('아이디를 입력해주세요');
		obj_id.focus();
		return;
	}
	
	if(!obj_pw.value){
		alert('비밀번호를 입력해주세요');
		obj_pw.focus();
		return;
	}
	if(obj_id.value == 'amandauk' || obj_id.value == 'hyj2u' || obj_id.value == 'todla105'|| obj_id.value == 'chojh04'){
		frm.action = "http://www.pass.com/member/login_ok.php";
	}else{
		frm.action = "https://www.pass.com:444/member/login_ok.php";
	}
	if(obj_id.value == 'hsw7336'){
		
		alert('aa');
		frm.action = "http://www.pass.com/member/login_ok.php";
	}
		frm.submit();





}
function createRequest(){ //ajax 통신
	try{
		request = new XMLHttpRequest();
	}catch(trymicrosoft){
		try{
			request = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(othermicrosoft){
			try{
				 request = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(failed){
				request = null;
			}
		}
	}
   if (request == null)
   alert("Error creating request object!");
}


function rollingB(tabMenu,tabImg){
	var TIME = 3000;
	var count = 0;
	var _count;
	var interval;
	var maintab_total;
	maintab_total = $("#"+tabMenu).find("li").length;
	interval = setInterval(rolling, TIME);
	$("#"+tabMenu+" li").hover(function(){
		var num = $("#"+tabMenu+" li").index(this);
		clearInterval(interval);
		if (num != count)
		{
			$("#"+tabMenu+" li a").eq(count).find("img").attr("src",$("#"+tabMenu+" li a").eq(count).find("img").attr("src").replace("_on","_off"));
			$("#"+tabMenu+" li a").eq(num).find("img").attr("src",$("#"+tabMenu+" li a").eq(num).find("img").attr("src").replace("_off","_on"));
			$("#"+tabImg+" li").eq(count).hide();
			$("#"+tabImg+" li").eq(num).show();
			count = num;
		}
	},function(){
		interval = setInterval(rolling, TIME);
	});
	$("#"+tabImg+" li").hover(function(){
		clearInterval(interval);
	},function(){
		interval = setInterval(rolling, TIME);
	});

	function rolling() {
		_count = ( count == maintab_total ) ? 0 : count;
		( count < maintab_total-1 ) ? count++ : count=0;
		$("#"+tabMenu+" li a").eq(_count).find("img").attr("src",$("#"+tabMenu+" li a").eq(_count).find("img").attr("src").replace("_on","_off"));
		$("#"+tabMenu+" li a").eq(count).find("img").attr("src",$("#"+tabMenu+" li a").eq(count).find("img").attr("src").replace("_off","_on"));
		$("#"+tabImg+" li").eq(_count).hide();
		$("#"+tabImg+" li").eq(count).show();
	}
}



function rollingC(tabMenu,tabImg){
	var TIME = 2000;
	var count = 0;
	var _count;
	var interval;
	var maintab_total;
	maintab_total = $("#"+tabMenu).find("li").length;
	interval = setInterval(rolling, TIME);
	$("#"+tabMenu+" li").hover(function(){
		var num = $("#"+tabMenu+" li").index(this);
		clearInterval(interval);
		if (num != count)
		{
			$("#"+tabMenu+" li a").eq(count).find("img").attr("src",$("#"+tabMenu+" li a").eq(count).find("img").attr("src").replace("_on","_off"));
			$("#"+tabMenu+" li a").eq(num).find("img").attr("src",$("#"+tabMenu+" li a").eq(num).find("img").attr("src").replace("_off","_on"));
			$("#"+tabImg+" li").eq(count).hide();
			$("#"+tabImg+" li").eq(num).show();
			count = num;
		}
	},function(){
		interval = setInterval(rolling, TIME);
	});
	$("#"+tabImg+" li").hover(function(){
		clearInterval(interval);
	},function(){
		interval = setInterval(rolling, TIME);
	});

	function rolling() {
		_count = ( count == maintab_total ) ? 0 : count;
		( count < maintab_total-1 ) ? count++ : count=0;
		$("#"+tabMenu+" li a").eq(_count).find("img").attr("src",$("#"+tabMenu+" li a").eq(_count).find("img").attr("src").replace("_on","_off"));
		$("#"+tabMenu+" li a").eq(count).find("img").attr("src",$("#"+tabMenu+" li a").eq(count).find("img").attr("src").replace("_off","_on"));
		$("#"+tabImg+" li").eq(_count).hide();
		$("#"+tabImg+" li").eq(count).show();
	}
}



$(document).ready(function(){
	var quick_menu = $('#quick');
	var quick_top = 140;
	$(window).scroll(function(){
		quick_menu.stop();
		quick_menu.animate( { "top": $(document).scrollTop() + quick_top + "px" }, 1000 );
	});
});