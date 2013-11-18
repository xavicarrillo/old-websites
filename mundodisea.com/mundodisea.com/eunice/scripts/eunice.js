function formHandler(form) {
var windowprops = "height=300,width=550,location=no,"
+ "scrollbars=no,menubars=no,toolbars=no,resizable=no";

var URL = form.site.options[form.site.selectedIndex].value;
popup = window.open(URL,"MenuPopup",windowprops);
}

<!-- Funcio que retorna la data
function data(){

dows = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
now = new Date();
dow = now.getDay();
d = now.getDate();
m = now.getMonth();
h = now.getTime();
y = now.getYear();
document.write(dows[dow]+" "+d+" , "+months[m]+"  "+y);
}

<!-- POPUPS rulez
var ZOOM;
function ampliar_foto(ruta,ancho,alto){
 if(ZOOM && ZOOM.closed==0) ZOOM.close();
 ZOOM = window.open("","ZOOM","toolbar=no,directories=no,location=no,menubar=no,status=yes,width="+ancho+",height="+alto+",resizable=yes,screenX=100,screenY=50,left=100,top=50");
 ZOOM.document.write("<html><head><title>e u n i c e [2002]</title></head><body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 bgcolor=white><div align=center><img src=ima/grans/"+ruta+"></div></body></html>");
 ZOOM.focus();
}

<!-- BrowserCheck

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
this.ns5=(this.b=="ns" && this.v==5);
this.ie=(this.b=="ie" && this.v>=4);
this.ie4=(this.version.indexOf('MSIE 4')>0);
this.ie5=(this.version.indexOf('MSIE 5')>0);
this.ie6=(this.version.indexOf('MSIE 6')>0);
this.opera=(this.b=="opera");
this.min = (this.ns||this.ie);
this.comp=(this.ns5||this.ie5||this.ie6); 

}

is = new BrowserCheck();

<!--funció per saber l'amplada i l'alçada de la finestra
function findWH() {
	winW = (is.ns)? window.innerWidth-16 : document.body.offsetWidth-20
	winH = (is.ns)? window.innerHeight : document.body.offsetHeight-4
}

<!-- Escriure css
function css(id,left,top,width,height,vis,z,clip,color,other) {
	if (id=="START") return '<STYLE TYPE="text/css">\n'
	else if (id=="END") return '</STYLE>'
	var str = (left!=null && top!=null)? '#'+id+' {position:absolute; left:'+left+'px; top:'+top+'px;' : '#'+id+' {position:relative;'
	if (arguments.length>=4 && width!=null) str += ' width:'+width+'px;'
	if (arguments.length>=5 && height!=null) {
		str += ' height:'+height+'px;'
	}	
	if (arguments.length>=6 && vis!=null) str += ' visibility:'+vis+';'
	if (arguments.length>=7 && z!=null) str += ' z-index:'+z+';'
	if (arguments.length>=8 && clip==true) str += ' clip:rect('+ 0 + ' ' + width + ' ' + height + ' ' + 0 +');'
	if (arguments.length>=9 && color!=null) str += (is.ns4)? ' layer-background-color:'+color+';' : ' background-color:'+color+';'
	if (arguments.length==10 && other!=null) str += ' '+other + ';'
	str += '}\n'
	var index = id.indexOf("Div")
	return str
}

function writeCSS(str,showAlert) {
	str = css('START')+str+css('END')
	document.write(str)
	if (showAlert) alert(str)
}

<!-- Inicia
function inicia(nocap){
  BrowserCheck ();
  findWH();

  for(L=1;L<(SECCIONS+1);L++){
   writeCSS(css('L'+L+'Div',0,210,600,(winH-170),'hidden',10));
  }
  //capes de producte
  if(!nocap){writeCSS(css('c1Div',333,165,450,(winH-170),'hidden',3,true)+css('d1Div',0,0,450,(winH-180),'hidden',4,false)+css('scrollerDiv',762,195,10,(winH-170),'hidden',5,false)+css('quadreDiv',333,165,450,(winH-170),'hidden',2,false));
  }
  //aquesta condició no l'entenc
  else{
  winH2=(winH<340)?340:winH+3;
  ampladag=230;
  margeV=(winH>500)?35:Math.round(winH*4/100);
  ample4=Math.round(winW/2);alt4=Math.round(winH/2)+25;margeH=Math.round((ample4-ampladag)/2);
  alt4=(alt4<190)?190:alt4;
  margep=Math.round(ample4*70/100);
  plus=(is.ns5)?14:19;	writeCSS(css('horiDiv',0,alt4,(winW+plus),1,'visible',11,false,'#990000')+css('vertiDiv',winW/2,0,1,winH2-20+plus,'visible',12,false,'#990000')+css('quart0Div',(ample4-margep)/2,0,margep,100,'visible',7,false, '#FFFFFF')+css('quart1Div',(ample4-margep)/2,alt4+margeV,margep,50,'visible',7,false, '#FFFFFF')+css('quart2Div',winW/2+margeV+12,alt4+margeV,ampladag,100,'visible',7,false, '#FFFFFF')+css('quart3Div',winW/2+1,0,(winW/2+plus),alt4,'visible',7,false,'#CCCC99'));
  }
  }
  
  
  <!-- dynlayer
  
  function init() {
 DynLayerInit();
}
 
// DynLayerInit Function
function DynLayerInit(nestref) {
 if (!DynLayer.set) DynLayer.set = true
 if (is.ns4) {
  if (nestref) ref = eval('document.'+nestref+'.document')
  else {nestref = ''; ref = document;}
  for (var i=0; i<ref.layers.length; i++) {
   var divname = ref.layers[i].name
   DynLayer.nestRefArray[divname] = nestref
   var index = divname.indexOf("Div")
   if (index > 0) {
    eval(divname.substr(0,index)+' = new DynLayer("'+divname+'","'+nestref+'")')
   }
   if (ref.layers[i].document.layers.length > 0) {
    DynLayer.refArray[DynLayer.refArray.length] = (nestref=='')? ref.layers[i].name : nestref+'.document.'+ref.layers[i].name
   }
  }
  if (DynLayer.refArray.i < DynLayer.refArray.length) {
   DynLayerInit(DynLayer.refArray[DynLayer.refArray.i++])
  }
 }
 else if (is.ie4) {
  for (var i=0; i<document.all.tags("DIV").length; i++) {
   var divname = document.all.tags("DIV")[i].id
   var index = divname.indexOf("Div")
   if (index > 0) {
    eval(divname.substr(0,index)+' = new DynLayer("'+divname+'")')
   }
  }
 }
 else if (is.comp) {
  nombrecapas="";
  for(i=0;i<document.getElementsByTagName("div").length;i++){
   var divname = document.getElementsByTagName("div")[i].id
   var index = divname.indexOf("Div")
   if (index > 0) {
    eval(divname.substr(0,index)+' = new DynLayer("'+divname+'")')
   }
  }
 }
 return true
}
DynLayer.nestRefArray = new Array()
DynLayer.refArray = new Array()
DynLayer.refArray.i = 0
DynLayer.set = false
 
//show, hide, move, write functions
function DynLayer(id,nestref,frame) {
 if (!is.ns5 && !DynLayer.set && !frame) DynLayerInit()
 this.frame = frame || self
 if (is.ns4) {
  if (!frame) {
   if (!nestref) var nestref = DynLayer.nestRefArray[id]
   if (!DynLayerTest(id,nestref)) return
   this.css = (nestref)? eval("document."+nestref+".document."+id) : document.layers[id]
  }
  else this.css = (nestref)? eval("frame.document."+nestref+".document."+id) : frame.document.layers[id]
  this.elm = this.event = this.css
  this.doc = this.css.document
  this.x = this.css.left
  this.y = this.css.top
  this.w = this.css.clip.width
  this.h = this.css.clip.height
 }
 else if (is.ie4) {
  this.elm = this.event = this.frame.document.all[id]
  this.css = this.frame.document.all[id].style
  this.doc = document
  this.x = this.elm.offsetLeft
  this.y = this.elm.offsetTop
  this.w = (is.ie4)? this.css.pixelWidth : this.elm.offsetWidth
  this.h = (is.ie4)? this.css.pixelHeight : this.elm.offsetHeight
 }
 else if (is.comp) {
  this.elm = this.event = document.getElementById(id)
  this.css = this.elm.style
  this.doc = document
  this.x = this.elm.offsetLeft
  this.y = this.elm.offsetTop
  this.w = this.elm.offsetWidth
  this.h = this.elm.offsetHeight
 }
 this.id = id
 this.nestref = nestref
 this.obj = id + "DynLayer"
 eval(this.obj + "=this")
}
 
function DynLayerMoveTo(x,y) {
 if (x!=null) {
  this.x = x
  if (is.ns) this.css.left = this.x
  else this.css.pixelLeft = this.x
 }
 if (y!=null) {
  this.y = y
  if (is.ns) this.css.top = this.y
  else this.css.pixelTop = this.y
 }
}
function DynLayerMoveBy(x,y) {
 this.moveTo(this.x+x,this.y+y)
}

function DynLayerShow() {
 this.css.visibility = (is.ns4)? "show" : "visible"
}
function DynLayerHide() {
 this.css.visibility = (is.ns4)? "hide" : "hidden"
}


function DynLayerWrite(html) {
 if (is.ns4) {
  this.doc.open()
  this.doc.write(html)
  this.doc.close()
 }
 else if (is.comp) {
  this.event.innerHTML = html
 }
}
DynLayer.prototype.moveTo = DynLayerMoveTo
DynLayer.prototype.moveBy = DynLayerMoveBy
DynLayer.prototype.show = DynLayerShow
DynLayer.prototype.hide = DynLayerHide
DynLayerTest = new Function('return true')
DynLayer.prototype.write = DynLayerWrite


// Slide Methods
function DynLayerSlideTo(endx,endy,inc,speed,fn) {
	if (endx==null) endx = this.x
	if (endy==null) endy = this.y
	var distx = endx-this.x
	var disty = endy-this.y
	this.slideStart(endx,endy,distx,disty,inc,speed,fn)
}
function DynLayerSlideBy(distx,disty,inc,speed,fn) {
	var endx = this.x + distx
	var endy = this.y + disty
	this.slideStart(endx,endy,distx,disty,inc,speed,fn)
}
function DynLayerSlideStart(endx,endy,distx,disty,inc,speed,fn) {
	if (this.slideActive) return
	if (!inc) inc = 10
	if (!speed) speed = 20
	var num = Math.sqrt(Math.pow(distx,2) + Math.pow(disty,2))/inc
	if (num==0) return
	var dx = distx/num
	var dy = disty/num
	if (!fn) fn = null
	this.slideActive = true
	this.slide(dx,dy,endx,endy,num,1,speed,fn)
}
function DynLayerSlide(dx,dy,endx,endy,num,i,speed,fn) {
	if (!this.slideActive) return
	if (i++ < num) {
		this.moveBy(dx,dy)
		this.onSlide()
		if (this.slideActive) setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+num+","+i+","+speed+",\""+fn+"\")",speed)
		else this.onSlideEnd()
	}
	else {
		this.slideActive = false
		this.moveTo(endx,endy)
		this.onSlide()
		this.onSlideEnd()
		eval(fn)
	}
}
function DynLayerSlideInit() {}
DynLayer.prototype.slideInit = DynLayerSlideInit
DynLayer.prototype.slideTo = DynLayerSlideTo
DynLayer.prototype.slideBy = DynLayerSlideBy
DynLayer.prototype.slideStart = DynLayerSlideStart
DynLayer.prototype.slide = DynLayerSlide
DynLayer.prototype.onSlide = new Function()
DynLayer.prototype.onSlideEnd = new Function()


// funcions per escriure la posició i les característiques de les capes segons la mida de la pantalla, genera un full d'estils
function css(id,left,top,width,height,vis,z,clip,color,other) {
	if (id=="START") return '<STYLE TYPE="text/css">\n'
	else if (id=="END") return '</STYLE>'
	var str = (left!=null && top!=null)? '#'+id+' {position:absolute; left:'+left+'px; top:'+top+'px;' : '#'+id+' {position:relative;'
	if (arguments.length>=4 && width!=null) str += ' width:'+width+'px;'
	if (arguments.length>=5 && height!=null) {
		str += ' height:'+height+'px;'
	}	
	if (arguments.length>=6 && vis!=null) str += ' visibility:'+vis+';'
	if (arguments.length>=7 && z!=null) str += ' z-index:'+z+';'
	if (arguments.length>=8 && clip==true) str += ' clip:rect('+ 0 + ' ' + width + ' ' + height + ' ' + 0 +');'
	if (arguments.length>=9 && color!=null) str += (is.ns4)? ' layer-background-color:'+color+';' : ' background-color:'+color+';'
	if (arguments.length==10 && other!=null) str += ' '+other + ';'
	str += '}\n'
	var index = id.indexOf("Div")
	return str
}

function writeCSS(str,showAlert) {
	str = css('START')+str+css('END')
	document.write(str)
	if (showAlert) alert(str)
}



<!-- MENU
<!-- Funció onMouseOver
function m1over(quina){
for(o=1;o<(SECCIONS+1);o++){
   if (o < CLICADA)
   eval("document.m1_"+o+".src=\'ima/1_des.gif'");
 }
   if (quina != CLICADA ) 
   eval("document.m1_"+quina+".src=\'ima/1_ov.gif'");
}
<!-- Funció onMouseOut
function m1out(quina){
for (i=1;i<quina;i++) {
  if (quina != CLICADA)  
  eval("document.m1_"+quina+".src=\'ima/1.gif'");
  }
  if (quina < CLICADA)
  eval ("document.m1_"+i+".src=\'ima/1_des.gif'");
}
<!-- Funció onClick

function m1clic(quina){
  CLICADA = quina;
  for(c=1;c<(SECCIONS+1);c++){
  eval("document.m1_"+c+".src=\'ima/1.gif'");

	}
  eval("document.m1_"+quina+".src=\'ima/1_sel.gif'");

}

<!-- Un cop clicat, "desactivem" les opcions anteriors, Funció onClick
function desactiva(quina){
  CLICADA = quina;
  for(i=1;i<quina;i++){
  eval ("document.m1_"+i+".src=\'ima/1_des.gif'");
		}
  eval ("document.m1_"+quina+".scr=\'ima/1.gif'");
	}
<!-- FINAL MENU

<!-- MENU 2
<!-- Funció onMouseOver
function m1over2(quina2){
for(o=1;o<(SECCIONS2+1);o++){
   if (o < CLICADA2)
   eval("document.a1_"+o+".src=\'ima/submen_o.jpg'");
 }
   if (quina2 != CLICADA2 ) 
   eval("document.a1_"+quina2+".src=\'ima/submen_o2.jpg'");
}
<!-- Funció onMouseOut
function m1out2(quina2){
for (i=1;i<quina2;i++) {
  if (quina2 != CLICADA2)  
  eval("document.a1_"+quina2+".src=\'ima/submen_o.jpg'");
  }
  if (quina2 < CLICADA2)
  eval ("document.a1_"+i+".src=\'ima/submen_o2.jpg'");
}
<!-- FINAL MENU 2
