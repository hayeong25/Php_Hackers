var mainBannerNum=1;
	var rotate=true;
$(document).ready(function (){
	$(function(){ 
			$('#event_banner').mouseover(function(){ 
				rotate=false;
			}); 
	 
			$('#event_banner').mouseleave(function(){ 
				rotate=true;
			});
			scroll();

			
			
			
			
	});
	});
	function scroll(){
		if(mainBannerNum>4) mainBannerNum = 1;
			if(rotate){
				window['event_0'+mainBannerNum].call();
				

				for(i=0;i<4;i++){

					//alert(mainBannerNum);

					if(i == mainBannerNum)
						$('.tab0'+i).css('background-position','bottom');
					else
						$('.tab0'+i).css('background-position','top');
				}


				mainBannerNum++;
			}
		setTimeout(scroll, 3000);
	}

	

	

/* 이벤트배너 */
/* 종편메인 탭 */
function show(c) { 

	var tab = c.split("_");
	$('.tab'+tab[1]).css('background-position','bottom');

if (document.getElementById && document.getElementById(c)!= null) 
node = document.getElementById(c).style.display=''; 
else if (document.layers && document.layers[c]!= null) 
document.layers[c].display = ''; 
else if (document.all) 
document.all[c].style.display = ''; 
} 
			 
function hide(c) { 
	var tab = c.split("_");
	$('.tab'+tab[1]).css('background-position','top');
if (document.getElementById && document.getElementById(c)!= null) 
node = document.getElementById(c).style.display='none'; 
else if (document.layers && document.layers[c]!= null) 
document.layers[c].display = 'none'; 
else if (document.all) 
document.all[c].style.display = 'none'; 
}

function event_01() {
show('event_01');
hide('event_02');
hide('event_03');
hide('event_04');

}
function event_02() {
hide('event_01');
show('event_02');
hide('event_03');
hide('event_04');

}
function event_03() {
hide('event_01');
hide('event_02');
show('event_03');
hide('event_04');

}
function event_04() {
hide('event_01');
hide('event_02');
hide('event_03');
show('event_04');

}