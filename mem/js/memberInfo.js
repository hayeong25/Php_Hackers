function onUserId(){
	$("#userIdBox").css("display","block");
	document.join.userid_search.focus();
}
function onUserSearch(){
	var f = document.join

	if (f.userid_search.value.match(/[^a-zA-Z0-9]/) != null ) {
	  alert("숫자와 영문만 입력할 수 있습니다.");
	  f.userid_search.value="";
	  f.userid_search.focus();
	  return;
	}
	if(f.userid_search.value.length < 4 || f.userid_search.value.length > 15){
	  alert("4자이상 15자 이하로 작성하셔야 합니다.");
	  f.userid_search.value="";
	  f.userid_search.focus();
	  return;
	}

	$("#userIdList").load("../member/PopupIdCheck.php?txt="+f.userid_search.value).html()
}
function onUserSelect(){
	f = document.join
	f.uid.value = f.userid_search.value;
	f.id_check.value = "1"
	$("#userIdBox").css("display","none");
	f.userid_search.value="";
	$("#userIdList").html("");
}
function onJoin(){
	var f = document.join;

	if(f.birth1.value=="" || f.birth2.value=="" || f.birth3.value==""){
		alert("생년월일 선택해주세요");
		f.birth1.focus();
		return "a";
	}

	if(f.email.value==""){
		alert("이메일을 작성해주세요");
		f.email.focus();
		return "a";
	}
	if(f.email_select.value=='write' && f.email_detail.value==''){
		alert("이메일을 작성해주세요");
		f.email_detail.focus();
		return "a";
	}
	if(f.mobile01.value==""){
		alert("휴대폰번호를 작성해주세요");
		f.mobile01.focus();
		return "a";
	}
	if(f.mobile02.value==""){
		alert("휴대폰번호를 작성해주세요");
		f.mobile02.focus();
		return "a";
	}
		/*
	if(f.tel01.value==""){
		alert("집전화번호를 작성해주세요");
		f.mobile01.focus();
		return "a";
	}
	if(f.tel02.value==""){
		alert("집전화번호를 작성해주세요");
		f.mobile02.focus();
		return "a";
	}
	*/
	if(f.zip01.value==""){
		alert("우편번호 검색을 해주세요");
		f.zip01.focus();
		return "a";
	}
	if(f.address_detail.value==""){
		alert("나머지 주소를 작성해주세요.");
		f.address_detail.focus();
		return "a";
	}
	if(f.email_select.value=="write"){
		if(f.email_detail.value==""){
			alert("상세이메일을 작성해주세요");
			f.email_detail.focus();
			return "a";
		}
	}
	//추가
	return "b";
	
}
function onEmailChange(e){
	var f = document.join;
	f.email_detail.value="";
	if(e.value == "write"){
		f.email_detail.style.display="";
	}else{
		f.email_detail.style.display="none";
	}
}

//우편번호
function onAddressSelect(zip,address){
	var f = document.join;
	f.zip01.value = zip.substr(0,3);
	f.zip02.value = zip.substr(3,3);
	f.address.value = address

	f.address_detail.value = "";
	$("#addressList").html("")
	$("#addressBox").css("display","none")
}

function onAddress(){
	$("#addressBox").css("display","block");
	document.join.address_search.focus();
}
function onAddresstSearch(){
	var f = document.join
	$("#addressList").load("/inc/PopupAddress.php?txt="+f.address_search.value).html()
}
function onPopupClose(s){
	document.getElementById(s).style.display="none";
}
function onNumChk(e){
	if(isNaN(e.value)){
		alert("숫자만 입력하세요")
		e.value="";
		return;
	}
}
function onAddressEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onAddresstSearch()
	}
}
function onFindIdEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onUserSearch()
	}
}

//대학선택
var un = "";
function onUniversitySelect(n,t){
	var f = document.join

	eval("f."+un+"no.value = n")
	eval("f."+un+"txt.value = t")

	f.university_search.value = "";
	$(".universityList").html("")
	$(".universityBox").css("display","none")
}
function onUniversity(e){
	un = e
	$(".universityBox").css("display","block");
	document.join.university_search.focus();
}
function onUniversitySearch(){
	var f = document.join
	$(".universityList").load("/inc/PopupUniversity.php?txt="+f.university_search.value).html()
}

//학과선택
var de = "";
function onDepartmentSelect(n,t){
	var f = document.join
	eval("f."+de+"no.value = n")
	eval("f."+de+"txt.value = t")
	f.department_search.value = "";
	$(".departmentList").html("")
	$(".departmentBox").css("display","none")
}

function onDepartment(e){
	de = e
	$(".departmentBox").css("display","block");
	document.join.department_search.focus();
}
function onDepartmentSearch(){
	var f = document.join
	$(".departmentList").load("/inc/PopupDepartment.php?txt="+f.department_search.value).html()
}
function onJoinAdd(){
	var f = document.join;
	//추가
	var unitype_chk=false;
	for(i=0; i < 5; i++){
		if(f.unitype[i].checked){
			unitype_chk = true;
			break
		}
	}
	if(!unitype_chk){
		f.unitype[0].focus();
		alert("전적대유형을 선택해주세요.");
		return "a";
	}
	var ji_gaeyol_chk = false;
	for(i=0; i < f.ji_gaeyol.length; i++){
		if(f.ji_gaeyol[i].selected){
			ji_gaeyol_chk = true;
			break;
		}
	}
	
	if(!ji_gaeyol_chk){
		f.ji_gaeyol.focus();
		alert("전공계열을 선택해주세요.");
		return "a";
	}

	var sf_gb_chk=false;
	for(i=0; i < 3; i++){
		if(f.sf_gb[i].checked){
			sf_gb_chk = true;
			break
		}
	}
	if(!sf_gb_chk){
		f.sf_gb[0].focus();
		alert("편입구분을 선택해주세요.");
		return "a";
	}

	if(!f.prev_test[0].checked && !f.prev_test[1].checked){
		f.prev_test[0].focus();
		alert("과거응시여부를 체크해주세요.")
		return "a";
	}

	var prev_year_chk = false;
	for(i=0; i < f.prev_year.length; i++){
		if(f.prev_year[i].selected){
			prev_year_chk = true;
			break;
		}
	}
	
	if(!prev_year_chk){
		f.prev_year.focus();
		alert("지망연도를 선택해주세요.");
		return "a";
	}
	return "b";
	
}

function onPopupCloseClass(s){
	$("."+s).css("display","none");
}

function onUniverEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onUniversitySearch()
	}
}
function onDeparEnter(){
	if(event.keyCode==13 || event.keyCode==10){
		onDepartmentSearch()
	}
}

