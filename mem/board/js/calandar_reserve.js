		var fc_ie = false;
    if (document.all) { fc_ie = true; }
    
    var calendars = Array();
    var fc_months = Array('1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');
    var fc_openCal;

    var fc_calCount = 0;
    
    function getCalendar(fieldId) {
        return calendars[fieldId];
    }
    
    function displayCalendarFor(fieldId){
		alert( fieldId );
        var formElement = fc_getObj(fieldId);
        displayCalendar(formElement);
    }
    
    function displayCalendar(formElement) {
        if (!formElement.id) {
            formElement.id = fc_calCount++;
        } 
        var cal = calendars[formElement.id];
        if (typeof(cal) == 'undefined') {
            cal = new floobleCalendar();
            cal.setElement(formElement);
            calendars[formElement.id] = cal;
        }
        if (cal.shown) {
            cal.hide();
        } else {
            cal.show();
        }
    }
    
    function display3FieldCalendar(me, de, ye) {
        if (!me.id) { me.id = fc_calCount++; }
        if (!de.id) { de.id = fc_calCount++; }
        if (!ye.id) { ye.id = fc_calCount++; }
        var id = me.id + '-' + de.id + '-' + ye.id;
        var cal = calendars[id];
        if (typeof(cal) == 'undefined') {
            cal = new floobleCalendar();
            cal.setElements(me, de, ye);
            calendars[id] = cal;
        }
        if (cal.shown) {
            cal.hide();
        } else {
            cal.show();
        }
    }

    //--Class Stuff--------------------------------------------------
    function floobleCalendar() {
        // Define Methods
        this.setElement = fc_setElement;
        this.setElements = fc_setElements;
        this.parseDate = fc_parseDate;
        this.generateHTML = fc_generateHTML;
        this.show = fc_show;
        this.hide = fc_hide;
        this.moveMonth = fc_moveMonth;
        this.setDate = fc_setDate;
        this.formatDate = fc_formatDate;
        this.setDateFields = fc_setDateFields;
        this.parseDateFields = fc_parseDateFields;
        
        this.shown = false;
    }
    
    function fc_setElement(formElement) {
        this.element = formElement;
        this.format = this.element.title;
        this.value = this.element.value;
        this.id = this.element.id;
        this.mode = 1;
    }
    
    function fc_setElements(monthElement, dayElement, yearElement) {
        this.mElement = monthElement;
        this.dElement = dayElement;
        this.yElement = yearElement;
        this.id = this.mElement.id + '-' + this.dElement.id + '-' + this.yElement.id;
        this.element = this.mElement;
        if (fc_absoluteOffsetLeft(this.dElement) < fc_absoluteOffsetLeft(this.element)) {
            this.element = this.dElement;
        }
        if (fc_absoluteOffsetLeft(this.yElement) < fc_absoluteOffsetLeft(this.element)) {
            this.element = this.yElement;
        }
        if (fc_absoluteOffsetTop(this.mElement) > fc_absoluteOffsetTop(this.element)) {
            this.element = this.mElement;
        }
        if (fc_absoluteOffsetTop(this.dElement) > fc_absoluteOffsetTop(this.element)) {
            this.element = this.dElement;
        }
        if (fc_absoluteOffsetTop(this.yElement) > fc_absoluteOffsetTop(this.element)) {
            this.element = this.yElement;
        }

        this.mode = 2;
    }
    
    function fc_parseDate() {
        if (this.element.value) {
            this.date = new Date();
            var out = '';
            var token = '';
            var lastCh, ch;
            var start = 0;
            lastCh = this.format.substring(0, 1);
            for (i = 0; i < this.format.length; i++) {
                ch = this.format.substring(i, i+1);
                if (ch == lastCh) { 
                    token += ch;
                } else {
                    fc_parseToken(this.date, token, this.element.value, start);
                    start += token.length;
                    token = ch;
                }
                lastCh = ch;
            }
            fc_parseToken(this.date, token, this.element.value, start);
        } else {
            this.date = new Date();
        }
        if ('' + this.date.getMonth() == 'NaN') {
            this.date = new Date();
        }
    }    
    
    function fc_parseDateFields() {
        this.date = new Date();
        if (this.mElement.value) this.date.setMonth(fc_getFieldValue(this.mElement) - 1);
        if (this.dElement.value) this.date.setDate(fc_getFieldValue(this.dElement));
        if (this.yElement.value) this.date.setFullYear(fc_getFieldValue(this.yElement));
        if ('' + this.date.getMonth() == 'NaN') {
            this.date = new Date();
        }
    }
    
    function fc_setDate(d, m, y) {
        this.date.setYear(y);
        this.date.setMonth(m);
        this.date.setDate(d);
        if (this.mode == 1) {
            this.element.value = this.formatDate();
        } else {
            this.setDateFields();
        }
        this.hide();
    }
    
    function fc_setDateFields() {
        fc_setFieldValue(this.mElement, fc_zeroPad(this.date.getMonth() + 1));
        fc_setFieldValue(this.dElement, fc_zeroPad(this.date.getDate()));
        fc_setFieldValue(this.yElement, this.date.getFullYear());
    }
    
    function fc_formatDate() {
        var out = '';
        var token = '';
        var lastCh, ch;
        lastCh = this.format.substring(0, 1);
        for (i = 0; i < this.format.length; i++) {
            ch = this.format.substring(i, i+1);
            if (ch == lastCh) { 
                token += ch;
            } else {
                out += fc_formatToken(this.date, token);
                token = ch;
            }
            lastCh = ch;
        }
        out += fc_formatToken(this.date, token);
        return out;
    }
    
    function fc_show() {
        if (typeof(fc_openCal) != 'undefined') { fc_openCal.hide(); }
    
        if (this.mode == 1) {
            this.parseDate();
        } else {
            this.parseDateFields();
        }
        this.showDate = new Date(this.date.getTime());
        if (typeof(this.div) != 'undefined') {
            this.div.innerHTML = this.generateHTML();
        }
        
        if (typeof(this.div) == 'undefined') {
            this.div = document.createElement('DIV');
            this.div.style.position = 'absolute';
            this.div.style.display = 'none';
            this.div.className = 'fc_main';
            this.div.innerHTML = this.generateHTML();
            this.div.style.left = fc_absoluteOffsetLeft(this.element) + "px";
            this.div.style.top = fc_absoluteOffsetTop(this.element) + this.element.offsetHeight + 1 + "px";
            document.body.appendChild(this.div);
        }
        this.div.style.display = 'block';
        this.shown = true;
        fc_openCal = this;
    }

		
    
    function fc_generateHTML() {
        var today = new Date();
        var html = '';
        html += '<div class="calenderW">		<div class="top">			<a href="#" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(-1);"><img src="http://gosi.pass.com/images/common/arrow_left.gif" alt="이전" /></a>			<span class="month">' + fc_getYear(this.showDate) + '년 ' + fc_months[this.showDate.getMonth()] + ' </span>			<a href="#" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').moveMonth(1);"><img src="http://gosi.pass.com/images/common/arrow_right.gif" alt="다음" /></a>		</div><div class="con">';
        html += '<table summary="">				<tr>										<th>월</th>					<th>화</th>					<th>수</th>					<th>목</th>					<th>금</th>					<th>토</th>		<th>일</th>		</tr>';
        html += '<tr>';
        var dow = 0;
        var i, style, icon, dates, flag_reserve,txt_reserve,tmp_month,tmp_day;
        var totald = fc_monthLength(this.showDate);
        for (i = 0; i < fc_firstDOW(this.showDate); i++) {
            dow++;
            html += '<td> </td>';
        }
        for (i = 1; i <= totald; i++) {
            if (dow == 0) { html += '<tr>'; }
            show_dates = new Date(this.showDate.getFullYear(),this.showDate.getMonth(),i); //달력 넘겨도 적용되어야 하는 것
            cur_dates = new Date(today.getFullYear(),today.getMonth(),i); //달력 넘기면 적용 안되는 것(현재일시)
						
						tmp_month = String(this.showDate.getMonth()+1);
						if (tmp_month.length == 1) tmp_month = '0' + tmp_month;
						tmp_day = String(i);
						if (tmp_day.length == 1) tmp_day = '0' + tmp_day;
            txt_reserve = String(this.showDate.getFullYear()) + tmp_month + tmp_day;
            
            if ($.inArray(txt_reserve,arr_reserve_val) != -1) { //그날 신청건수가 일정횟수 넘어가면 마감
            	style = '';
            	icon = '<span class="end">마감</span>';
            	flag_reserve = 0;
            } else if (today.getMonth() == this.showDate.getMonth() && today.getYear() == this.showDate.getYear() && today.getDate() == i) { //오늘날짜
              style = ' style="font-weight: bold; "';
              icon = '<a class="ing">예약가능</a>';
              flag_reserve = 1;
            } else if(show_dates.getTime() < today.getTime()) { //지난날짜
            	style = '';
            	icon = '<span class="end">마감</span>';
            	flag_reserve = 0;
            } else {
              style = '';
              icon = '<a class="ing">예약가능</a>';
              flag_reserve = 1;
            }
            
            if (show_dates.getDay() == 0) {
            	html += '<td>' + i + '</td>'; 
            } else if (!flag_reserve) {
            	html += '<td>' + i + icon + '</td>'; 
            } else {
           		html += '<td style="cursor:pointer;" onMouseover="this.className = \'fc_dateHover\';" onMouseout="this.className=\'fc_date\';" onClick="getCalendar(\'' + this.id + '\').setDate(' + i + ', ' + this.showDate.getMonth() + ', ' + this.showDate.getFullYear() + '); chg_time('+txt_reserve+');" ' + style + '>' + i + icon + '</td>'; 
          	}
            dow++;
            if (dow == 7) {
                html += '</tr>';
                dow = 0;
            }
        }
        if (dow != 0) {
            for (i = dow; i < 7; i++) {
                html += '<td> </td>';
            }
        }
        html +='</tr>';
        html += '</table></div></div>';
        return html;
    }
    
    function fc_hide() {
        if (this.div != false) {
            this.div.style.display = 'none';
        }
        this.shown = false;
        fc_openCal = undefined;
    }
    
    function fc_moveMonth(amount) {
        var m = this.showDate.getMonth();
        var y = fc_getYear(this.showDate);
        if (amount == 1)  {
            if (m == 11)  {
                this.showDate.setMonth(0);
                this.showDate.setYear(y + 1);
            } else {
                this.showDate.setMonth(m + 1);
            }
        } else if (amount == -1)  {
            if (m == 0)  {
                this.showDate.setMonth(11);
                this.showDate.setYear(y - 1);
            } else {
                this.showDate.setMonth(m - 1);
            }
        } else if (amount == 12) {
            this.showDate.setYear(y + 1);
        } else if (amount == -12) {
            this.showDate.setYear(y - 1);
        }
        this.div.innerHTML = this.generateHTML();
    }
    
    //--Utils-------------------------------------------------------------
    function fc_absoluteOffsetTop(obj) {
         var top = obj.offsetTop;
         var parent = obj.offsetParent;
         while (parent != document.body) {
             top += parent.offsetTop;
             parent = parent.offsetParent;
         }
         return top;
     }
     
     function fc_absoluteOffsetLeft(obj) {
         var left = obj.offsetLeft;
         var parent = obj.offsetParent;
         while (parent != document.body) {
             left += parent.offsetLeft;
             parent = parent.offsetParent;
         }
         return left;
     }
     
     function fc_firstDOW(date) {
         var dow = date.getDay();
         var day = date.getDate();
        if (day % 7 == 0) return dow;
         return (7 + dow - (day % 7)) % 7; 
     }
     
     function fc_getYear(date) {
         var y = date.getYear();
         if (y > 1900) return y;
         return 1900 + y;
     }
     
     function fc_monthLength(date) {
        var month = date.getMonth();
        var totald = 30;
        if (month == 0 
            || month == 2
            || month == 4
            || month == 6
            || month == 7
            || month == 9
            || month == 11) totald = 31;
        if (month == 1) {
            var year = date.getYear();
            if (year % 4 == 0 && (year % 400 == 0 || year % 100 != 0))
                 totald = 29;
            else
                totald = 28;
        }
        return totald;
     }
     
     function fc_formatToken(date, token) {
        var command = token.substring(0, 1);
        if (command == 'y' || command == 'Y') {
            if (token.length == 2) { return fc_zeroPad(date.getFullYear() % 100); }
            if (token.length == 4) { return date.getFullYear(); } 
        }
        if (command == 'd' || command == 'D') {
            if (token.length == 2) { return fc_zeroPad(date.getDate()); }
        }
        if (command == 'm' || command == 'M') {
            if (token.length == 2) { return fc_zeroPad(date.getMonth() + 1); }
            if (token.length == 3) { return fc_months[date.getMonth()]; } 
        }
        return token;
     }
     
     function fc_parseToken(date, token, value, start) {
        var command = token.substring(0, 1);
        var v;
        if (command == 'y' || command == 'Y') {
            if (token.length == 2) { 
                v = value.substring(start, start + 2);
                if (v < 70) { date.setFullYear(2000 + parseInt(v)); } else { date.setFullYear(1900 + parseInt(v)); } 
            }
            if (token.length == 4) { v = value.substring(start, start + 4); date.setFullYear(v);} 
        }
        if (command == 'd' || command == 'D') {
            if (token.length == 2) { v = value.substring(start, start + 2); date.setDate(v); }
        }
        if (command == 'm' || command == 'M') {
            if (token.length == 2) { v = value.substring(start, start + 2); date.setMonth(v - 1); }
            if (token.length == 3) { 
                v = value.substring(start, start + 3);
                var i;
                for (i = 0; i < fc_months.length; i++) {
                    if (fc_months[i].toUpperCase() == v.toUpperCase()) { date.setMonth(i); }
                }
            } 
        }
     }
     
     function fc_zeroPad(num) {
        if (num < 10) { return '0' + num; }
        return num;
     }

    function fc_getObj(id) {
        if (fc_ie) { return document.all[id]; } 
        else { return document.getElementById(id);    }
    }

      function fc_setFieldValue(field, value) {
                if (field.type.substring(0,6) == 'select') {
                        var i;
                        for (i = 0; i < field.options.length; i++) {
                                if (fc_equals(field.options[i].value, value)) {
                                        field.selectedIndex = i;
                                }
                        }
                } else {
                        field.value = value;
                }
      }

      function fc_getFieldValue(field) {
                if (field.type.substring(0,6) == 'select') {
                        return field.options[field.selectedIndex].value;
                } else {
                        return field.value;
                }
      }
      
      function fc_equals(val1, val2) {
              if (val1 == val2) return true;              
              if (1 * val1 == 1 * val2) return true;
              return false;
      }