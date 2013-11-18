//browser check 2
function BrowserCheck() {
var b=navigator.appName;
if (b=="Netscape") this.b="ns";
else if ((b=="Opera") || (navigator.userAgent.indexOf("Opera")>0)) this.b = "opera";
else if (b=="Microsoft Internet Explorer") this.b="ie";
if (!b) alert('Unidentified browser./nThis browser is not supported,');
this.version=navigator.appVersion;
this.v=parseInt(this.version);
this.ns=(this.b=="ns" && this.v>=4);
this.ns4=(this.b=="ns" && this.v==4);
this.ns6=(this.b=="ns" && this.v==5);
this.ie=(this.b=="ie" && this.v>=4);
this.ie4=(this.version.indexOf('MSIE 4')>0);
this.ie5=(this.version.indexOf('MSIE 5')>0);
this.ie6=(this.version.indexOf('MSIE 6')>0);
this.opera=(this.b=="opera");
this.min = (this.ns||this.ie);
this.comp=(this.ie||this.opera); 
}
is = new BrowserCheck();

<!-- LoadPage i ShowPage

function loadPage(id,nestref,url) {
  BrowserCheck ();
  alert(id);
  
content_width = 600;

if (is.ns4) {
	var lyr = (nestref)? eval('document.'+nestref+'.document.'+id) : document.layers[id]
	lyr.load(url,content_width)
}
else if(is.ie4) contentFRM.location = url;
else if(is.comp){
	document.getElementById('contentFRM').src = url;
	}
}

function showPage(id) {
if (is.ie4) {
		document.all[id].innerHTML = contentFRM.document.body.innerHTML;

	}
	else if(is.comp) { 
		document.getElementById(id).innerHTML = window.frames['contentFRM'].document.getElementById('theBody').innerHTML;

	}
}

<!-- MENU
<!-- Funció onMouseOver
function m1over(quina){
for(o=1;o<(SECCIONS+1);o++){
   if (o < CLICADA)
   eval("document.m1_"+o+".src=\'../web/ima/1_des.gif'");
 }
   if (quina != CLICADA ) 
   eval("document.m1_"+quina+".src=\'../web/ima/1_ov.gif'");
}
<!-- Funció onMouseOut
function m1out(quina){
for (i=1;i<quina;i++) {
  if (quina != CLICADA)  
  eval("document.m1_"+quina+".src=\'../web/ima/1.gif'");
  }
  if (quina < CLICADA)
  eval ("document.m1_"+i+".src=\'../web/ima/1_des.gif'");
}
<!-- Funció onClick
function m1clic(quina){
  CLICADA = quina;
  for(c=1;c<(SECCIONS+1);c++){
  eval("document.m1_"+c+".src=\'../web/ima/1.gif'");
	}
  eval("document.m1_"+quina+".src=\'../web/ima/1_sel.gif'");
}
<!-- Un cop clicat, "desactivem" les opcions anteriors, Funció onClick
function desactiva(quina){
  CLICADA = quina;
  for(i=1;i<quina;i++){
  eval ("document.m1_"+i+".src=\'../web/ima/1_des.gif'");
		}
  eval ("document.m1_"+quina+".scr=\'../web/ima/1.gif'");
	}
<!-- FINAL MENU

