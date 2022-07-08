/// �����޽��� ���� ���� ///
var NO_BLANK = "{name+����} �Է��Ͽ� �ֽʽÿ�.";
var NO_CHECK = "{name+����} �����Ͽ� �ֽʽÿ�.";
var NOT_VALID = "{name+�̰�} �ùٸ��� �ʽ��ϴ�.";
var TOO_LONG = "{name}�� ���̰� �ʰ��Ǿ����ϴ�. (�ִ� {maxbyte}����Ʈ)";
var SPACE = (navigator.appVersion.indexOf("MSIE")!=-1) ? "          " : "";


/// ��Ʈ�� ��ü�� �޼ҵ� �߰� ///
String.prototype.space = function(str) {
	str = this != window ? this : str;
	var strTemp = '';

	/MSIE ([0-9]{1,})\.?/.exec(navigator.userAgent);
	var version = RegExp.$1;

	str.split('\n').each(function(line) { strTemp += line+((navigator.userAgent.match(/MSIE/)&&version<8)?'          ':'')+'\n'}); // 2010.12.27 modified
	return strTemp;
}

String.prototype.alert = function(str) {
	str = this != window ? this : str;
	alert(str.space());
}

String.prototype.confirm = function(str) {
	str = this != window ? this : str;
	return confirm(str.space());
}

String.prototype.trim = function(str) {
	str = this != window ? this : str;
	return str.replace(/^\s+/g,'').replace(/\s+$/g,'');
}

String.prototype.hasFinalConsonant = function(str) {
	str = this != window ? this : str;
	var strTemp = str.substr(str.length-1);
	return ((strTemp.charCodeAt(0)-16)%28!=0);
}

String.prototype.bytes = function(str) {
	str = this != window ? this : str;
	for(var i=0, len=0; i<str.length; i++) {
		var chr = str.charAt(i);
		if(escape(chr).length > 4) len += 2;
		else if(chr != '\r') len++;
	}
	return len;
}

String.prototype.number_format = function() {
	var num = this.replace(/,/g,'');
	return num.replace(/(\d)(?=(?:\d{3})+(?!\d))/g,'$1,');
}

Array.prototype.shuffle = function() {
	return this.concat().sort(function() {
		return Math.random() - Math.random();
	});
}

function in_array(value, array, similar) {
	for(var i=0; i<array.length; i++) {
		if(similar==true) {
			if(value.indexOf(array[i]) != -1) return true; // ����� ��
		} else {
			if(array[i]==value) return true; // ������ ��
		}
	}
	return false;
}

function josa(str,tail) {
	return (str.hasFinalConsonant()) ? tail.substring(0,1) : tail.substring(1,2);
}

function checkMultiBox(el) {
	var obj = document.getElementsByName(el.name);
	for (var i=0; i<obj.length; i++) if(obj[i].checked==true) return true;
	return false;
}

function get_form_element(form, element) { // 2009.10.26 added
	try { form.each(function(el) { if(el.name==element || el.id==element) throw el }) } // form : array()
	catch(el) { return el }
	return null;
}

function validate(form, skip) { // 2009.04.01 fixed

	for (var i=0; i<form.length; i++) {
		try {
			var el = form[i];
			if(el.tagName.match(/fieldset/i) || el.disabled===true) continue;
			if(skip && in_array(el.name, skip.split('|'), true)===true) continue;
		//	if(el.type.toLowerCase() != "file" && el.getAttribute("NOTRIM")==null && el.value) el.value = el.value.trim(); // ���� :: ���� ���� ����

			// ÷������ ���͸� ������
			if(el.type.toLowerCase() == "file" && el.value && (el.getAttribute("filter")!=null || el.getAttribute("antifilter")!=null)) {
				var file_infos = el.value.split('.');
				var _ext = file_infos[file_infos.length-1].toLowerCase();
				if(el.getAttribute("antifilter")!=null && in_array(_ext, el.getAttribute("antifilter").split(','))) {
					return doError(el,"�����Ͻ� {name+����} ÷���� �� �����ϴ�.("+el.getAttribute("antifilter")+" ������ ÷�κҰ�)");
				}
				else if(!in_array(_ext, el.getAttribute("filter").split(','))) {
					return doError(el,"�����Ͻ� {name+����} ÷���� �� �����ϴ�.("+el.getAttribute("filter")+" ���ϸ� ÷�ΰ���)");
				}
			}

			// ��Ÿ �ʵ忡 ���͸� ������ - 08.03.21 �߰�
			if(el.getAttribute("antifilter")!=null) {
				var filters = el.getAttribute("antifilter").split(',');
				var _contents = el.value.replace(/ /g,'').replace(/&nbsp;/g,''); // ���鹮�� ����
				for(var x=0; x<filters.length; x++) {
					if(!filters[x]) continue;
					if(_contents.indexOf(filters[x])!=-1) {
						return doError(el, "{name}���� '"+filters[x]+"'�� �Է��� �� �����ϴ�.");
					}
				}
			}
			var PATTERN = el.getAttribute("PATTERN");
			var minbyte = el.getAttribute("MINBYTE");
			var maxbyte = el.getAttribute("MAXBYTE");
			var minval = el.getAttribute("MINVAL");
			var maxval = el.getAttribute("MAXVAL");
			var option = el.getAttribute("OPTION");
			var ignore0 = el.getAttribute("IGNORE0");
			var match = el.getAttribute("MATCHING"); // ���� :: Prototype JS �� �浹�Ͽ� 'MATCH' ���� 'MATCHING' ���� ����
			var glue = el.getAttribute("GLUE");
			var unit = el.getAttribute("UNIT");
			var or = el.getAttribute("OR"); // �߰� :: �� �� �ϳ��� ���� �Է� �ް��� �ϴ� ���(�̰��, REQUIRED �� ������� �� ��)
			if(unit == null) unit = '';

			if (el.getAttribute("REQUIRED") != null) {
				if(el.getAttribute('nofocus')==null && el.style.display=='none') continue; // 2009.05.06 �߰�
				var ERR_MSG = (el.getAttribute("MESSAGE") != null) ? el.getAttribute("MESSAGE") : null;
				if ((el.type.toLowerCase() == "radio" || el.type.toLowerCase() == "checkbox") && !checkMultiBox(el)) return (ERR_MSG) ? doError(el, ERR_MSG) : doError(el, NO_CHECK);
				if (el.tagName.toLowerCase() == "select" && (el.value == null || el.value == "")) return (ERR_MSG) ? doError(el,ERR_MSG) : doError(el,NO_CHECK);
				if (el.value == null || el.value == "" || (ignore0==null && el.value == "0") || (el.getAttribute("DEFAULT")!=null && el.value == el.getAttribute("DEFAULT"))) return (ERR_MSG) ? doError(el,ERR_MSG) : doError(el,NO_BLANK);
			}
		}
		catch(e) {
			alert(e.message+form[i].name+":"+form[i].checked +":"+ form[i].value);
		}

		if (minbyte != null && el.value != "" && el.value.bytes() < parseInt(minbyte)) {
			if(unit=='') unit = "����Ʈ";
			return doError(el,"{name+����} �ּ� "+new String(minbyte).number_format()+unit+" �̻� �Է��ϼž� �մϴ�.");
		}
		if (maxbyte != null && el.value != "" && el.value.bytes() > parseInt(maxbyte)) {
			if(unit=='') unit = "����Ʈ";
			return doError(el,"{name+����} �ִ� "+new String(maxbyte).number_format()+unit+" ���Ϸ� �Է��ϼž� �մϴ�.");
		}

		if (minval != null && el.value != "" && el.value < parseInt(minval)) return doError(el,"{name+����} ���� "+new String(minval).number_format()+unit+" �̻� �Է��ϼž� �մϴ�.");
		if (maxval != null && el.value != "" && el.value > parseInt(maxval)) return doError(el,"{name+����} �ְ� "+new String(maxval).number_format()+unit+" ���Ϸ� �Է��ϼž� �մϴ�.");
		if (PATTERN != null && el.value != "" && !PATTERN(el,pattern)) return false;

		if (match != null) { // 2009.10.26 fixed
			var match_el = form[match];
			if(match_el==undefined) match_el = get_form_element(form, match);
			if(el.value != match_el.value) return doError(el,"{name+�̰�} ��ġ���� �ʽ��ϴ�.");
		}
		if (or != null && (el.value == null || el.value == "")) { // 2009.10.26 fixed
			var or_el = form[or];
			if(or_el==undefined) or_el = get_form_element(form, or);
			if(or_el.value==null || or_el.value == "") {
				var name2 = (hname = or_el.getAttribute("HNAME")) ? hname : or_el.getAttribute("NAME");
				return doError(el,"{name+} �Ǵ� "+name2+" �� �ϳ��� �Է��ϼž� �մϴ�.");
			}
		}

		if (option != null && el.value != "") {
			if (el.getAttribute('SPAN') != null) {
				var _value = new Array();
				for (var span=0; span<el.getAttribute('SPAN');span++ ) _value[span] = form[i+span].value;
				var value = _value.join(glue == null ? '' : glue);
				if (!funcs[option](el,value)) return false;
			} else {
				try{ if (!funcs[option](el)) return false; } catch(e) {} // ���� :: �ͽ�7���� 'runtime' ���� �߻����� ����
			}
		}
	}
	return true;
}

function doError(el,type,action) {
	if(type==undefined) type = NO_BLANK; // fixed
	var pattern = /{([a-zA-Z0-9_]+)\+?([��-��]{2})?}/g;
	var name = (hname = el.getAttribute("HNAME")) ? hname : el.getAttribute("NAME");

	pattern.exec(type);
	try {
		var tail = (RegExp.$2) ? josa(eval(RegExp.$1),RegExp.$2) : '';
		var msg = (type.replace(pattern,eval(RegExp.$1) + tail));
		alert(msg);
	}
	catch(e) { // checkbox ���� ������ �߻��� ���ɼ��� ����
		var message = el.getAttribute("message");
		if(message!=null) alert(message);
		else doError(el,NO_CHECK);
		return false;
	}

	if(action == "sel") el.select();
	else if(action == "del")	el.value = "";
	if(el.getAttribute("NOFOCUS") == null) {
		el.focus();
		if(el.getAttribute("DEFAULT")!=null) el.value = el.getAttribute("DEFAULT");
	}
	if(el.getAttribute("SETFOCUS") != null && el.getAttribute("SETFOCUS") !='') el.form[el.getAttribute("SETFOCUS")].focus();
	return false;
}

/// Ư�� ���� �˻� �Լ� ���� ///
var funcs = new Array();
funcs['domain'] = isValidDomain;
funcs['email'] = isValidEmail;
funcs['hphone'] = isValidHPhone;
funcs['phone'] = isValidPhone;
funcs['phones'] = isValidPhones;
funcs['userid'] = isValidUserid;
funcs['userpw'] = isValidUserpw;
funcs['hangul'] = hasHangul;
funcs['number'] = isNumeric;
funcs['float'] = isFloat;
funcs['engonly'] = alphaOnly;
funcs['normal'] = isSpecialCharacter;
funcs['jumin'] = isValidJumin;
funcs['bizno'] = isValidBizNo;

/// ���� �˻� �Լ��� ///
function isBlank(el,value) { // 2008.07.12 �߰�
	var value = value ? value : el.value;
	return value.trim() ? true : doError(el,NO_BLANK);
}

function isValidDomain(el,value) {
	if(el.getAttribute('required')==null) {
		var default_val = el.getAttribute('default');
		if(default_val!=null && el.value==default_val) return true;
	}
	var value = value ? value : el.value;
	var pattern = /^[_a-zA-Z��-��0-9-]+\.[a-zA-Z��-��0-9-\.]+[a-zA-Z]+$/;
	return (pattern.test(value.replace(/http:\/\//g, ''))) ? true : doError(el,NOT_VALID);
}

function isValidEmail(el,value) {
	var value = value ? value : el.value;
	var pattern = /^[_a-zA-Z0-9-\.]+@[\.a-zA-Z0-9-]+\.[a-zA-Z]+$/;
	return (pattern.test(value)) ? true : doError(el,NOT_VALID);
}

function isValidUserid(el) { // 2008.07.14 doError ����
	var pattern = /^[a-z]{1}[a-z0-9]{3,14}$/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} ���� �ҹ��ڷ� �����ϴ� 4~15���� ���� �ҹ��ڿ� ������ ���ո� ����� �� �ֽ��ϴ�.");
}

function isValidUserpw(el) { // 2008.07.14 doError ����
	var pattern = /^[a-zA-Z0-9]{4,15}$/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} 4~15���� �����ڿ� ������ ���ո� ����� �� �ֽ��ϴ�.");
}

function hasHangul(el) {
	var pattern = /[��-��]/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} �ݵ�� �ѱ��� �����ؾ� �մϴ�.");
}

function alphaOnly(el) {
	var pattern = /^[a-zA-Z]+$/;
	return (pattern.test(el.value)) ? true : doError(el,NOT_VALID);
}

function isSpecialCharacter(el) {
	var pattern = /[a-zA-Z��-��0-9]/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} Ư�����ڸ� �Է��� �� �����ϴ�.");
}

function isNumeric(el) {
	var pattern = /^[0-9]+$/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} �ݵ�� ���ڷθ� �Է��ؾ� �մϴ�.");
}

function isFloat(el) {
	var pattern = /^[0-9]+(\.[0-9]{1,4})?$/;
	return (pattern.test(el.value)) ? true : doError(el,"{name+����} �ݵ�� ���� �Ǵ� �Ҽ� ��° �ڸ������� �Է��ؾ� �մϴ�.");
}

function isValidJumin(el,value) {
	var pattern = /^([0-9]{6})-?([0-9]{7})$/;
	var num = value ? value : el.value;
	if (!pattern.test(num)) return doError(el,NOT_VALID);
	num = RegExp.$1 + RegExp.$2;

	var sum = 0;
	var last = num.charCodeAt(12) - 0x30;
	var bases = "234567892345";
	for (var i=0; i<12; i++) {
		if (isNaN(num.substring(i,i+1))) return doError(el,NOT_VALID);
		sum += (num.charCodeAt(i) - 0x30) * (bases.charCodeAt(i) - 0x30);
	}
	var mod = sum % 11;
	return ((11 - mod) % 10 == last) ? true : doError(el,NOT_VALID);
}

function isValidBizNo(el, value) {
	var pattern = /([0-9]{3})-?([0-9]{2})-?([0-9]{5})/;
	var num = value ? value : el.value;
	if (!pattern.test(num)) return doError(el,NOT_VALID);
	num = RegExp.$1 + RegExp.$2 + RegExp.$3;
	var cVal = 0;
	var checkID = new Array(1, 3, 7, 1, 3, 7, 1, 3, 5, 1);
	for (var i=0; i<8; i++) cVal += checkID[i]*num.charAt(i);
	var li_temp = '0' + (checkID[8]*num.charAt(8));
	li_temp = li_temp.substring(li_temp.length-2, li_temp.length);
	cVal += parseFloat(li_temp.charAt(0)) + parseFloat(li_temp.charAt(1));
	return (parseInt(num.charAt(9))==(10-(cVal%10))%10) ? true : doError(el,NOT_VALID);
}

function isValidPhone(el,value) {
	var num = value || el.value;
	num = num.trim().replace(/[^\d]/g,'');
	switch(num.length) {
		case 8: num = num.substr(0, 4) +'-'+ num.substr(4, 4); break;
		case 9: if(num.substr(1,1)=='2') num = num.substr(0, 2) +'-'+ num.substr(2, 3) +'-'+ num.substr(5); break; // 2012.05.09 added
		case 10:
			if(num.substr(1,1)=='2') num = num.substr(0, 2) +'-'+ num.substr(2, 4) +'-'+ num.substr(6);
			else num = num.substr(0, 3) +'-'+ num.substr(3, 3) +'-'+ num.substr(6);
			break;
		case 11: num = num.substr(0, 3) +'-'+ num.substr(3, 4) +'-'+ num.substr(7); break;
		case 12: num = num.substr(0, 4) +'-'+ num.substr(4, 4) +'-'+ num.substr(8); break;
		default: return doError(el,NOT_VALID);
	}
	if(num.match(/^0[0-9]{1,3}-[1-9]{1}[0-9]{2,3}-[0-9]{4}$/) || // phone
		num.match(/^[0-9]{4}-[0-9]{4}$/)) { // keynum
		if(!el.getAttribute('SPAN')) {
			el.value = num;
		}
		return true;
	}
	return doError(el,NOT_VALID);
}

function isValidHPhone(el,value) {
	var num = value || el.value;
	num = num.trim().replace(/[^\d]/g,'');
	switch(num.length) {
		case 10: num = num.substr(0, 3) +'-'+ num.substr(3, 3) +'-'+ num.substr(6); break; // 2012.05.21 added
		case 11: num = num.substr(0, 3) +'-'+ num.substr(3, 4) +'-'+ num.substr(7); break;
		case 12: num = num.substr(0, 4) +'-'+ num.substr(4, 4) +'-'+ num.substr(8); break;
		default: return doError(el,NOT_VALID);
	}
	if(num.match(/^01[016789]{1}-[1-9]{1}[0-9]{2,3}-[0-9]{4}$/)) {
		if(!el.getAttribute('SPAN')) {
			el.value = num;
		}
		return true;
	}
	return doError(el,NOT_VALID);
}

// 2012.04.02 fixed
function isValidPhones(el,value) {
	var num = value || el.value;
	num = num.trim().replace(/[^\d]/g,'');
	switch(num.length) {
		case 8: num = num.substr(0, 4) +'-'+ num.substr(4, 4); break;
		case 9: if(num.substr(1,1)=='2') num = num.substr(0, 2) +'-'+ num.substr(2, 3) +'-'+ num.substr(5); break; // 2012.05.09 added
		case 10:
			if(num.substr(1,1)=='2') num = num.substr(0, 2) +'-'+ num.substr(2, 4) +'-'+ num.substr(6);
			else num = num.substr(0, 3) +'-'+ num.substr(3, 3) +'-'+ num.substr(6);
			break;
		case 11: num = num.substr(0, 3) +'-'+ num.substr(3, 4) +'-'+ num.substr(7); break;
		case 12: num = num.substr(0, 4) +'-'+ num.substr(4, 4) +'-'+ num.substr(8); break;
		default: return doError(el,NOT_VALID);
	}
	if(num.match(/^01[016789]{1}-[1-9]{1}[0-9]{2,3}-[0-9]{4}$/) || // mobile
		num.match(/^0[0-9]{1,3}-[1-9]{1}[0-9]{2,3}-[0-9]{4}$/) || // phone
		num.match(/^[0-9]{4}-[0-9]{4}$/)) { // keynum
		if(!el.getAttribute('SPAN')) {
			el.value = num;
		}
		return true;
	}
	return doError(el,NOT_VALID);
}


