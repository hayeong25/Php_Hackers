function flashMovie(fid,src,wid,hei,fvs,wmd) { 
  this.fPrint = ''; 
  this.Id = document.getElementById(fid); 
  this.Src = src; 
  this.Width = wid; 
  this.Height = hei; 
  this.FlashVars = (fvs != undefined)? fvs :''; 
  this.Wmod = (wmd != undefined)? wmd :'transparent'; 
  if(isObject(Id)) { 
    fPrint = '<object id="flashmov" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"'; 
    fPrint += ' width="'+Width+'"'; 
    fPrint += ' height="'+Height+'">'; 
    fPrint += '<param name="movie" value="'+Src+'">'; 
	//¿Ã∞‘ø÷¿÷¬° ?§æ§æ
	//fPrint += '<param name="wmod" value="opaque">';
    //fPrint += '<param name="wmod" value="transparent">';
	fPrint += '<param name="allowScriptAccess" value="always" />';
	fPrint += '<param name="quality" value="high">'; 
    fPrint += (FlashVars != null) ? '<param name="FlashVars" value="'+FlashVars+'">' : ''; 
    fPrint += (Wmod != null) ? '<param name="wmode" value="'+Wmod+'">' : ''; 
    fPrint += '<embed'; 
    fPrint += fPrint + ' src="'+Src+'"'; 
    fPrint += (FlashVars != null) ? ' FlashVars="'+FlashVars+'"' : ''; 
    fPrint += (Wmod != null) ? ' wmode="'+Wmod+'"' : ''; 
    fPrint += ' quality="high"'; 
    fPrint += ' pluginspage="http://www.macromedia.com/go/getflashplayer"'; 
    fPrint += ' type="application/x-shockwave-flash"'; 
    fPrint += ' width="'+Width+'"'; 
    fPrint += ' height="'+Height+'"'; 
    fPrint += '></embed>'; 
    fPrint += '</object>'; 
    Id.innerHTML = fPrint; 
  } 
} 
 


function flashMovie_id(fid,src,wid,hei,obid,fvs,wmd) { 
  this.fPrint = ''; 
  this.Id = document.getElementById(fid); 
  this.Src = src; 
  this.Width = wid; 
  this.Height = hei; 
  this.FlashVars = (fvs != undefined)? fvs :''; 
  this.Wmod = (wmd != undefined)? wmd :''; 
  if(isObject(Id)) { 
    fPrint = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"'; 
	fPrint += ' id="'+obid+'"'; 
	fPrint += ' width="'+Width+'"'; 
    fPrint += ' height="'+Height+'">'; 
    fPrint += '<param name="movie" value="'+Src+'">';
	fPrint += '<param name="allowScriptAccess" value="always" />';
    fPrint += '<param name="quality" value="high">'; 
    fPrint += (FlashVars != null) ? '<param name="FlashVars" value="'+FlashVars+'">' : ''; 
    fPrint += (Wmod != null) ? '<param name="wmode" value="'+Wmod+'">' : ''; 
    fPrint += '<embed'; 
    fPrint += fPrint + ' src="'+Src+'"'; 
    fPrint += (FlashVars != null) ? ' FlashVars="'+FlashVars+'"' : ''; 
    fPrint += (Wmod != null) ? ' wmode="'+Wmod+'"' : ''; 
    fPrint += ' quality="high"'; 
    fPrint += ' pluginspage="http://www.macromedia.com/go/getflashplayer"'; 
    fPrint += ' type="application/x-shockwave-flash"'; 
    fPrint += ' width="'+Width+'"'; 
    fPrint += ' height="'+Height+'"'; 
    fPrint += '></embed>'; 
    fPrint += '</object>'; 
    Id.innerHTML = fPrint; 
  } 
} 

function player_view(fid,src,wid,hei,uim,auto,ctm,mid) { 
  this.fPrint = ''; 
  this.Id = document.getElementById(fid); 
  this.Src = src; 
  this.Width = wid; 
  this.Height = hei; 
  this.Uimod = uim;
  this.Auto = auto;
  this.Ctm = ctm;

  if(isObject(Id)) { 
    fPrint = '<object CLASSID="CLSID:6BF52A52-394A-11D3-B153-00C04F79FAA6" standby="Loading Microsoft Windows Media Player components..."'; 
    fPrint += ' width="'+Width+'"'; 
    fPrint += ' id="'+mid+'"';
    fPrint += ' name="'+mid+'"';
    fPrint += ' height="'+Height+'">'; 
    fPrint += '<param name="url" value="'+Src+'">'; 
    fPrint += '<param name="uimode" value="'+Uimod+ '">'; 
    fPrint += '<param name="AutoStart" value="'+Auto+ '">'; 
    fPrint += '<param name="enableContextMenu" value="'+Ctm+ '">'; 
    fPrint += '<param name="stretchToFit" value="'+Ctm+ '">'; 
    fPrint += '</object>'; 
    Id.innerHTML = fPrint; 
  } 
} 

function player_old(fid,src,wid,hei,auto,stbar,strac,mid) { 
  this.fPrint = ''; 
  this.Id = document.getElementById(fid); 
  this.Src = src; 
  this.Width = wid; 
  this.Height = hei; 
  this.Auto = auto;
  this.Stbar = stbar;
  this.Strac = strac;

  if(isObject(Id)) { 
    fPrint = '<object CLASSID="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" '; 
    fPrint += ' id="'+mid+'"';
    fPrint += ' name="'+mid+'"';
	fPrint += ' width="'+Width+'"'; 
    fPrint += ' height="'+Height+'">'; 
    fPrint += '<param name="filename" value="'+Src+'">'; 
    fPrint += '<param name="AutoStart" value="'+Auto+ '">'; 
    fPrint += '<param name="ShowStatusBar" value="'+Stbar+ '">'; 
    fPrint += '<param name="ShowTracker" value="'+Strac+ '">'; 
    fPrint += '</object>'; 
    Id.innerHTML = fPrint; 
  } 
} 

function isObject(a) { 
    return (a && typeof a == 'object'); 
} 


function OpenFlash(url,width,height){
	
	document.write("<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0' width='" + width + "' height='" + height + "'>");
	document.write("<param name='movie' value='" + url + "'>");
	document.write("<param name='quality' value='high'>");
	document.write("<param name='wmode' value='transparent'>");
	document.writeln("<param name=\"allowScriptAccess\" value=\"always\" />");
	document.write("<embed src='" + url + "' quality='high' wmode='transparent'  pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='" + width + "' height='" + height + "'></embed>");
	document.write("</object>");
}

function MakeFlash(Url,Width,Height){                 
  document.writeln("<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" width=\"" + Width + "\" height=\"" + Height + "\">"); 
  document.writeln("<param name=\"movie\" value=\"" + Url + "\">"); 
  document.writeln("<param name=\"quality\" value=\"high\" />");     
  document.writeln("<param name=\"wmode\" value=\"transparent\">"); 
  document.writeln("<param name=\"allowScriptAccess\" value=\"always\" />");
  document.writeln("<embed src=\"" + Url + "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" width=\"" + Width + "\"  height=\"" + Height + "\"></embed>"); 
  document.writeln("</object>");     
} 