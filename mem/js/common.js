$(function(){
	$('.gnb a.menu01').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').show();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu02').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').show();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu03').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').show();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu04').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').show();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu05').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').show();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu06').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').show();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').hide();
	});

	$('.gnb a.menu07').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').show();
		$('.gnb_menu #sub8').hide();
	});
	$('.gnb a.menu08').mouseover(function(){
		$('.gnb_menu').show();
		$('.gnb_menu #sub1').hide();
		$('.gnb_menu #sub2').hide();
		$('.gnb_menu #sub3').hide();
		$('.gnb_menu #sub4').hide();
		$('.gnb_menu #sub5').hide();
		$('.gnb_menu #sub6').hide();
		$('.gnb_menu #sub7').hide();
		$('.gnb_menu #sub8').show();
	});

	$('.gnb_menu').mouseleave(function(){
		//$('.gnb_menu').hide();
	});

});

$(function(){
	$('.logout dl dt').click(function(){
		$('.logout dl dd').slideToggle();
	});

	$('.logout dl dd a').click(function(){
		//$('.logout dl dd').slideUp();
	});

});

function show_tab (id){
	$("#" + id + "_tab a").click(function(){
		var num = $("#" + id + "_tab a").index(this);
		$("." + id + "_layer").hide();
		$("." + id + "_layer").eq(num).show();
		$("#" + id + "_tab li").removeClass("on");
		$("#" + id + "_tab li").eq(num).addClass("on");
		return false;
	});
}

function show_tab_all (id){
	$("#" + id + "_tab a").click(function(){
		var num = $("#" + id + "_tab a").index(this);
		if (num == 0){
			$("." + id + "_layer").show();
			$("#" + id + "_tab li").removeClass("on");
			$("#" + id + "_tab li").eq(num).addClass("on");
		} else {
			$("." + id + "_layer").hide();
			$("." + id + "_layer").eq(num).show();
			$("#" + id + "_tab li").removeClass("on");
			$("#" + id + "_tab li").eq(num).addClass("on");
		}
		return false;
	});
}
function onEmailChange(val,obj_name){
	var obj=document.getElementsByName(obj_name+'[]')[1];
	if(val == "my"){
		obj.value="";
	}else{
		obj.value=val;
	}
}
function onEmailKeyUp(_getObj){
	if(_getObj.value == "yahoo.co.kr" || _getObj.value == "freechal.com"){
		alert("\n " + _getObj.value + " 이메일 계정은 사용이 불가능합니다. \n");
		_getObj.value = "";
		_getObj.focus();
		return false;
	}
}
function COMMA(input){ 
    var input = String(input); 
    var reg = /(\-?\d+)(\d{3})($|\.\d+)/; 
    if(reg.test(input)){ 
        return input.replace(reg, function(str, p1,p2,p3){ 
                return COMMA(p1) + "," + p2 + "" + p3; 
            }     
        ); 
    }else{ 
        return input; 
    } 
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

function textarea_increase(id, row)
{
	document.getElementById(id).rows += row;
}
function textarea_decrease(id, row)
{
	if (document.getElementById(id).rows - row > 0)
		document.getElementById(id).rows -= row;
}

function textarea_original(id, row)
{
	document.getElementById(id).rows = row;
}
function popup(url, name, width, height,sb){
	var popName = window.open( url, name, 'toolbar=no,location=no,directories=no,status=yes,menubar=no,resizable=no,scrollbars='+sb+',width='+width+',height='+height+',top=30,left=230');
	popName.focus();
}
function onlynumber()
{	
	var e = event.keyCode;
	window.status = e;
	if (e>=48 && e<=57) return;
	if (e>=96 && e<=105) return;
	if (e>=37 && e<=40) return;
	if (e==8 || e==9 || e==13 || e==46) return;
	event.returnValue = false;
}
function setCookie(c_name, value, expiredays) {

	var exdate = new Date();
	var oneday = 1440; // 하루날짜

	var tempHour = exdate.getHours(); // 현재시간
	var tempMinute = exdate.getMinutes(); // 현재분

	var newMinute = oneday - ((tempHour * 60) + tempMinute); // 하루시간 - ((현재시간 * 60) + 현재분)
	exdate.setMinutes(newMinute);

	document.cookie = c_name + "=" + escape(value) +
		(expiredays > 0 ? ";expires=" + exdate.toGMTString() : "");
}
function setCookie2(c_name, value, expiredays) {

	var exdate = new Date();
	var oneday = 1440; // 하루날짜

	var tempHour = exdate.getHours(); // 현재시간
	var tempMinute = exdate.getMinutes(); // 현재분

	var newMinute = oneday - ((tempHour * 60) + tempMinute); // 하루시간 - ((현재시간 * 60) + 현재분)
	exdate.setMinutes(newMinute);

	document.cookie = c_name + "=" + escape(value) + (expiredays > 0 ? ";expires=" + exdate.toGMTString()+";path=/;domain=land.pass.com" : "");
}


// 쿠키값 가져오기
function getCookie(c_name) {
  if (document.cookie.length > 0) {
    c_start = document.cookie.indexOf(c_name + "=");
    if (c_start != -1) {
      c_start = c_start + c_name.length + 1;
      c_end = document.cookie.indexOf(";", c_start);
      if (c_end == -1) c_end = document.cookie.length;
      return unescape(document.cookie.substring(c_start, c_end));
    }
  }
  return "";
}


function moveLogin(msg,url){
	if(msg) alert(msg);
	if(url) location.href='/site/?st=login&href='+encodeURIComponent(url);
	else location.href='/site/?st=login&href='+encodeURIComponent(location.href);
}

function win_memo(url){
	if (!url) url = "../bbs/memo.php";
	win_open(url, "memo", "left=20, top=20, width=620, height=400, scrollbars=1");
}


function win_open(url, name, option){
	var popup = window.open(url, name, option);
	popup.focus();
}

function downLoadFn(getVF,getRN){
	var bdId = $("input[name='id']").val();
	location.href = "/bbs/downloads.php?id="+bdId+"&fn="+getVF+"&rn="+getRN;
}

/* SESSION CHECK */

// 롤링배너 추가 130725 이정미
function rollB (bId,prev,next,time,wrap,sMenu){
	var num = 0;
	var _num;
	var bnId = "#" +bId;
	var w = $( bnId + " a img").width();
	var total = $(bnId + " a").length;
	var btnP = "#" + prev;
	var btnN = "#" + next;
	var play = time;
	var interval;
	var focuse = "#" +wrap;
	var menu = "#" + sMenu + " span";
	var speed;
	var toggleUse = 1; //btn fadeToggle(hide,show)
	
	interval = setInterval(rBanner, play);

	$(focuse).hover(function(){
		clearInterval(interval);
		if(toggleUse){
			$(btnP).toggle();
			$(btnN).toggle();
		}
	},function(){
		interval = setInterval(rBanner, play);
		if(toggleUse){
			$(btnP).toggle();
			$(btnN).toggle();
		}
	});
	$(menu).hover(function(){
		clearInterval(interval);
	},function(){
		interval = setInterval(rBanner, play);
	});

	//tab Click stop
	$("#tab_menu li").click(function(){
		clearInterval(interval);
	});

	$(btnP).click(function(){
		if (!$(bnId + " a").is(':animated')){
			_num = num;
			(num == 0)? num = total -1 : num--;
			$(bnId + " a").eq(_num).animate({left :w * 2 + "px"},"fast",function(){
				$(this).css("left",w + "px").css({display:"none"});
			});
			$(bnId + " a").eq(num).css({left: "0px",display:"block"}).animate({left :w + "px"},"fast");
			$(menu).removeClass("on").eq(num).addClass("on");
		}
		return false;
	});

	$(btnN).click(function(){
		if (!$(bnId + " a").is(':animated')){
			_num = num;
			(num == total -1)? num = 0 : num++;
			rMotion ("fast");
		}
		return false;
	});

	function rBanner (){
		_num = num;
		(num == total -1)? num = 0 : num++;
		rMotion ("slow");
	}

	$(menu).click(function(){
		if (!$(bnId + " a").is(':animated')){
			clickNum = $(menu).index(this);
			if (num != clickNum){
				_num = num;
				num = clickNum;
				rMotion ("fast");
			}
		}
		return false;
	});

	function rMotion (s){
		speed = s;
		$(bnId + " a").eq(_num).animate({left :"0px"},speed,function(){
			$(bnId + " a").eq(_num).css({display:"none"});
		});
		$(bnId + " a").eq(num).css({left:w * 2 + "px",display:"block"}).animate({left :w + "px"},speed);
		$(menu).removeClass("on").eq(num).addClass("on");
	}

}

function getParameterValue(searchString ,_values){
	
	var firstStepSplit = "";
	var secondStepSplit = "";
	var returnValues = "";
	
	if( _values.indexOf("?") != "-1"){
		firstStepSplit = _values.split("?");
		firstStepSplit = firstStepSplit[1];
	}else{
		firstStepSplit = _values;
	}

	secondStepSplit = firstStepSplit.split("&");


	for(va in secondStepSplit){
		var tmpSplit = secondStepSplit[va].split("=");
		if( tmpSplit[0] == searchString){
			returnValues = tmpSplit[1];
		}
	}
	return returnValues;
}
function allPopClose(setName){
	$("#"+setName).hide();
}

//로그인..ck
function lgokc(){
	var rtlogin = "";
	$.ajax({
		type: 'POST',
		url: '/site/common/session_check_ajax_no.php',
		async:false,
		success:function(strResult){
			rtlogin = strResult;
		}
	} );

	return rtlogin;
}

function allPopCloseObj(setName){
	$("div[id^='"+setName+"']").hide();
}