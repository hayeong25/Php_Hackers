var RANKUP_CALENDAR = Class.create({
	initialize: function() {
		this.browser = (/MSIE/.test(navigator.userAgent)) ? "IE" : "GEKO";
		this.toDay = new Date();
		this.selYear = this.browser=="IE" ? this.toDay.getYear() : this.toDay.getYear()+1900;
		this.selMonth = this.toDay.getMonth();
		this.selDay = this.toDay.getDate();
		this.lastDays = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
		this.calendarBody = "calendarBody";
		this.selComponent = null;
		this.compYear = null;
		this.compMonth = null;
		this.compDay = null;
		this.drawStatus = false;
		this.minDate = null; // 하한선
		this.maxDate = null; // 상한선
	},
	// 달력 범위 설정
	get_calendar_range: function(mode) {
		var calendar_options = '';
		switch(mode) {
			case "year":
				this.toDay = new Date();
				var now_year = this.browser=="IE" ? this.toDay.getYear() : this.toDay.getYear()+1900;
				if(this.minDate==null) {
					var min_year = parseInt(now_year, 10)-1;
					this.minDate = new String(min_year)+"-01-01";
				}
				else {
					var date_infos = this.minDate.split("-");
					var min_year = date_infos[0];
				}
				if(this.maxDate==null) {
					var max_year = parseInt(now_year, 10)+1;
					this.maxDate = new String(max_year)+"-12-31";
				}
				else {
					var date_infos = this.maxDate.split("-");
					var max_year = date_infos[0];
				}
				for(var year=max_year; year>=min_year; year--) calendar_options += "<option value='"+year+"'>"+year+"년</option>";
				break;
			case "month":
				for(var month=1; month<=12; month++) {
					var num = new String(month);
					num = num.length==1 ? 0+num : num;
					calendar_options += "<option value='"+month+"'>"+num+"월</option>";
				}
				break;
		}
		return calendar_options;
	},
	// 달력 그리기
	draw_calendar: function(el, base) {
		var obj = $('calendar_div');
		this.selComponent = el;
		this.minDate = el.getAttribute('mindate');
		this.maxDate = el.getAttribute('maxdate');
		if(this.maxDate!=null && base==undefined && el.value=='') base = {'value':this.maxDate};

		if(obj!=false) rankup_calendar.remove_calendar();
		this.drawStatus = false;

		var new_div = document.createElement('div');
		new_div.id = "calendar_div"; // 고정
		var width = (this.browser=="IE") ? 160 : 148;
		new_div.innerHTML = "\
		<div style='position:absolute;width:160px;height:181px;z-index:80;left:0px;top:0px;'><iframe src='about:blank' style='width:100%;height:100%;' frameborder='0'></iframe></div>\
		<div style='width:"+width+"px;z-index:100;position:relative;border:#cdcdcd 1px solid;top:0px;left:0px;padding:4px;background-color:#f8f8f8;'>\
		<table cellpadding='0' cellspacing='0' border='0' style='margin-bottom:4px;'>\
		<tr>\
			<td style='padding-right:3px;'><select style='width:64px' onChange=\"rankup_calendar.change_date_II(this)\">"+this.get_calendar_range('year')+"</select></td>\
			<td style='padding-right:3px;'><select style='width:52px' onChange=\"rankup_calendar.change_date_II(this)\">"+this.get_calendar_range('month')+"</select></td>\
			<td align='right'><a onClick='rankup_calendar.remove_calendar()'><img src='"+domain+"/images/admin/btn_close_s.gif' align='absmiddle'></a></td>\
		</tr>\
		</table>\
		<span style='display:none'><button onClick=\"rankup_calendar.change_date('-1 year')\" style=\"background:url('"+domain+"images/btn_prev.gif');width:13px;height:16px;border:0;\"></button> <input type='text' size='3' readOnly style='letter-spacing:0px;background-color:#f8f8f8;'> <button onClick=\"rankup_calendar.change_date('1 year')\" style=\"background:url('"+domain+"images/btn_next.gif');width:13px;height:16px;border:0;\"></button>\
		&nbsp;&nbsp;<button onClick=\"rankup_calendar.change_date('-1 month')\" style=\"background:url('"+domain+"images/btn_prev.gif');width:13px;height:16px;border:0;\"></button> <input type='text' size='1' readOnly style='background-color:#f8f8f8;'> <button onClick=\"rankup_calendar.change_date('1 month')\" style=\"background:url('"+domain+"images/btn_next.gif');width:13px;height:16px;border:0;\"></button></span>\
		<table cellpadding='0' cellspacing='1' bgcolor='#C9C9C9' border='0' style='margin-top:3px;'>\
		<tr bgcolor='#f4f8fb' align='center'>\
			<td><font color='red'>일</font></td>\
			<td>월</td>\
			<td>화</td>\
			<td>수</td>\
			<td>목</td>\
			<td>금</td>\
			<td><font color='#3366cc'>토</font></td>\
		</tr>\
		<tbody bgcolor='white' align='center' id='"+this.calendarBody+"'>\
		</tbody>\
		</table>\
		</div>";
		this.selComponent.parentNode.appendChild(new_div);
		(base==null||base==undefined) ? this.change_date(el.value) : this.change_date(base.value);
		if(this.browser=="IE") {
			new_div.style.marginLeft = -(this.selComponent.offsetWidth);
			new_div.style.marginTop = this.selComponent.offsetHeight+4;
		}
		else new_div.style.marginTop = 4;
		/*
		}
		// 재활용
		else {
			obj.style.display = "block";
			this.selComponent.parentNode.appendChild(obj);
			(base==null||base==undefined) ? this.change_date(el.value) : this.change_date(base.value);
		}*/
	},
	change_date_II: function(el) {
		var info_selects = $('calendar_div').getElementsByTagName('select');
		this.change_date(info_selects[0].value+'-'+info_selects[1].value+'-'+this.selDay);
	},
	change_date: function(date) { // date { 1 year | -1 year | -1 month | 1 month }
		if(date=='') {
			this.toDay = new Date();
			this.selYear = this.browser=="IE" ? this.toDay.getYear() : this.toDay.getYear()+1900;
			this.selMonth = this.toDay.getMonth();
			this.selDay = this.toDay.getDate();
			this.compYear = this.compMonth = this.compDay = '';
		}
		else {
			switch(date) {
				case "-1 year": this.selYear -= 1; break;
				case "1 year": this.selYear += 1; break;
				case "-1 month":
					if(this.selMonth!=0) this.selMonth -= 1;
					else { // 0 : 1월
						this.selYear -= 1;
						this.selMonth = 11;
					}
					break;
				case "1 month":
					if(this.selMonth!=11) this.selMonth += 1;
					else { // 11 : 12월
						this.selYear += 1;
						this.selMonth = 0;
					}
					break;
				default: // 날짜값을 받은 경우 : 2008-09-12
					var date_infos = date.split('-');
					with(Math) {
						this.compYear = floor(date_infos[0]);
						this.compMonth = floor(date_infos[1])-1;
						this.compDay = floor(date_infos[2]);
					}
					if(this.drawStatus===true && this.compYear==this.selYear && this.compMonth==this.selMonth && this.compDay==this.selDay) return true;
					this.selYear = this.compYear;
					this.selMonth = this.compMonth;
					this.selDay = this.compDay;
			}
		}
		var calendar_body = $(this.calendarBody);
		this.toDay = new Date(this.selYear, this.selMonth, this.selDay);
		this.lastDays[1] = (this.selYear%4)==0 && ((this.selYear%100)!=0 || (this.selYear%400)==0) ? 29 : 28;
		var info_inputs = $('calendar_div').getElementsByTagName('input');
		var info_selects = $('calendar_div').getElementsByTagName('select');
		info_inputs[0].value = info_selects[0].value = this.selYear;
		info_inputs[1].value = info_selects[1].value = this.selMonth+1;

		calendar_body.update(); // 초기화

		var first_day_cell = 0;
		var first_cell = ((this.toDay.getDay()+7)-(this.selDay-1)%7)%7;
		for(var row=0, day=1; row<6; row++) {
			var new_row = calendar_body.insertRow(calendar_body.rows.length);
			for(var cell=0; cell<7; cell++) {
				if(cell == first_cell) first_day_cell += 1;
				var new_cell = new_row.insertCell(cell);
				switch(cell) {
					case 0: new_cell.style.color = "#ff0000"; break;
					case 6: new_cell.style.color = "#3366cc"; break;
				}
				if(first_day_cell>=1 && day<=this.lastDays[this.selMonth]) {
					new_cell.innerHTML = day;
					new_cell.style.cursor = "pointer";
					if(day++==this.compDay && this.compMonth==this.selMonth && this.compYear==this.selYear) {
						new_cell.className = "selectCell";
						new_cell.setAttribute("selected", "true");
						this.selCell = new_cell;
					}
					else new_cell.className = "normalCell";
					//Event.observe(new_cell, "mouseover", this.toggle_className);
					//Event.observe(new_cell, "mouseout", this.toggle_className);
					//Event.observe(new_cell, "click", this.apply_date);
					if(this.browser=="IE") new_cell.attachEvent("onclick", this.apply_date);
					else new_cell.addEventListener("click", this.apply_date, true);
				}
				else {
					new_cell.innerHTML = '';
					new_cell.style.backgroundColor = "#F5F5F5";
				}
				new_row.appendChild(new_cell);
			}
		}
		this.drawStatus = calendar_body.rows.length==6;
	},
	// 날짜 변경 - 단축키
	set_date: function(mode, dest, base) {
		if(base==undefined || base=='') {
			// 오늘을 기준으로 날짜 계산
			var toDay = new Date();
			var baseYear = this.browser=="IE" ? toDay.getYear() : toDay.getYear()+1900;
			var baseMonth = toDay.getMonth();
			var baseDay = toDay.getDate();
			var base_date = baseYear+"-"+baseMonth+"-"+baseDay;
		}
		else {
			var base_date = base.value;
		}
		var classObj = this;
		var url = domain+"/site/admin/other/calculate_date.ajax.php?base_date="+base_date+"&mode="+mode+"&garbage="+Math.random();
		var myRequest = new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				if(!transport.responseText.match(null)) {
					var dest_date = transport.responseXML.getElementsByTagName('resultData')[0].firstChild.nodeValue;
					if(mode=="today") dest.value = base.value = dest_date;
					else dest.value = dest_date;
					if(classObj.selComponent===dest) classObj.change_date(dest.value);
				}
			},
			onComplete: function() {myRequest=null}
		});
	},
	// 분류 설정시 아이템 오버/아웃시에 사용
	toggle_className: function(event) {
		this.className = event.type!="mouseover" ? this.getAttribute("selected")!=null ? "selectCell" : "normalCell" : this.getAttribute("selected")!=null ? "shoverCell" : "hoverCell";
	},
	// 달력박스 감추기
	hidden_calendar: function() {
		var obj = $('calendar_div');
		if(obj!=null) obj.style.display = "none";
	},
	// 달력개체 제거
	remove_calendar: function() {
		var obj = $('calendar_div');
		if(obj!=null) obj.parentNode.removeChild(obj);
	},
	// 선택한 날짜값 반환
	apply_date: function(event) {
		rankup_calendar.selMonth += 1;
		var el = Event.element(event);
		var year = rankup_calendar.selYear;
		var month = new String(rankup_calendar.selMonth);
		var day = el.innerHTML;
		if(month.length==1) month = '0'+month;
		if(day.length==1) day = '0'+day;
		var selDate = year+"-"+month+"-"+day;
		var url = domain+"/site/admin/other/calculate_date.ajax.php?mode=check_date&min_date="+rankup_calendar.minDate+"&max_date="+rankup_calendar.maxDate+"&sel_date="+selDate+"&garbage="+Math.random();
		var myRequest = new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				if(!transport.responseText.match(null)) eval(transport.responseXML.getElementsByTagName('resultData')[0].firstChild.nodeValue);
			}
		});
	}
});
var rankup_calendar = new RANKUP_CALENDAR;