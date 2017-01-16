var detect = navigator.userAgent.toLowerCase();
var OS,browser,version,total,thestring,index,arcid;
var srterror='';




function getBrowserInfo() {
	if (checkIt('konqueror')) {
		browser = "Konqueror";
		OS = "Linux";
	}
	else if (checkIt('safari')) browser 	= "Safari"
	else if (checkIt('omniweb')) browser 	= "OmniWeb"
	else if (checkIt('opera')) browser 		= "Opera"
	else if (checkIt('webtv')) browser 		= "WebTV";
	else if (checkIt('icab')) browser 		= "iCab"
	else if (checkIt('msie')) browser 		= "Internet Explorer"
	else if (!checkIt('compatible')) {
		browser = "Netscape Navigator"
		version = detect.charAt(8);
	}
	else browser = "An unknown browser";

	if (!version) version = detect.charAt(place + thestring.length);

	if (!OS) {
		if (checkIt('linux')) OS 		= "Linux";
		else if (checkIt('x11')) OS 	= "Unix";
		else if (checkIt('mac')) OS 	= "Mac"
		else if (checkIt('win')) OS 	= "Windows"
		else OS 								= "an unknown operating system";
	}
}
function checkIt(string) {
	place = detect.indexOf(string) + 1;
	thestring = string;
	return place;
}
lightboxDiv=null;
overlayDiv=null;
    /**
   * 初始化状态显示层
     */
	function init()
	{
	    if (lightboxDiv!=null&&overlayDiv!=null)
	    {
	        return;
	    }
	    getBrowserInfo();
		var body = document.getElementsByTagName("body")[0];
		var overlay = document.createElement("div");
		overlay.id='overlay';
		var  lb= document.createElement('div');
	    lb.id= 'lightbox';
		body.appendChild(overlay);
		body.appendChild(lb);
		overlay.style.display="none";
		lb.style.display="none";
		overlayDiv=document.getElementById("overlay");
		lightboxDiv=document.getElementById("lightbox");
	}
	
	/**
	 * 设置状态信息
	 * @param _message:要显示的信息
	 */	
	function showInfo(_message)
	{	  
	    if (lightboxDiv==null&&overlayDiv==null)
	    {
	        init();
	    }  
	    setStatusShow(true);
	    if (browser == 'Internet Explorer')
	    {
	        //window.scrollTo(0, 0);
	        prepareIE("100%", "hidden");
			setScroll(0,0);
	    }
	    lightboxDiv.innerHTML = _message;	    
	}
	 
	/**
	 * 设置状态层是否显示
	 * @param _show:boolean值，true为显示，false为不显示
	 */ 
	function setStatusShow(_show)
	{	  
	    if (lightboxDiv==null&&overlayDiv==null)
	    {
	        init();
	    } 
	    if (_show)
	    {
	        overlayDiv.style.display="";
	        lightboxDiv.style.display="";
	    }
	    else
	    {
	        if (browser == "Internet Explorer")
	        {
	            window.scrollTo(0, 0);
	            prepareIE("auto", "auto");
	        }
	        overlayDiv.style.display="none";
	        lightboxDiv.innerHTML="";
	        lightboxDiv.style.display="none";
	    }
	}
function prepareIE(height, overflow){
		bod = document.getElementsByTagName('body')[0];
		bod.style.height = height;
		bod.style.overflow = overflow;
  
		htm = document.getElementsByTagName('html')[0];
		htm.style.height = height;
		htm.style.overflow = overflow; 
	}

function setScroll(x, y)
    {
		window.scrollTo(x, y); 
	}
	
/*-----------------------------------------------------------------------------------------------*/
////////////////////////
// *JScript 文件
// *以下为孙阳写给用与深喉咙系统的
////////////////////////
function callback_createfailure()
{
	   showInfo('<div class="lbClose"><img src="/img/window_close_grey.gif" border="0" /></div>'+
        '<div id="lbContent"><p align="center">添加失败</p>'+
        '</div>');
}
function callback_editfailure()
{
	   showInfo('<div class="lbClose"><img src="/ex/images/window_close_grey.gif" border="0" /></div>'+
        '<div id="lbContent"><p align="center">修改失败</p>'+
        '</div>');
}
function callback_destoryfailure()
{
	   showInfo('<div class="lbClose"><img src="/ex/images/window_close_grey.gif" border="0" /></div>'+
        '<div id="lbContent"><p align="center">删除失败</p>'+
        '</div>');
}


/*-----------------------------------------------------------------------------------------------*/
////////////////////////
// *JScript 文件
// *以下为王威写的
////////////////////////
function Setting_Addkword()
{
  if(document.getElementById("attention").length=0)
  {
   document.getElementById("kresult").innerHTML="<span class='tip_i'>你必须输入关注词才可以添加！</span>";
   return;
  }
  var obj=document.getElementById("kbutton");   
  obj.style.visibility = "hidden";
  document.getElementById("kresult").innerHTML="<span class='tip_i'>正在处理数据少等</span>";
   BLL.AjaxCore.Setting_Addkword(document.getElementById("attention").value,callback_settingaddkword);
}
function callback_settingaddkword(rep)
{
  if(rep.value=="null")
  {
    alert("关注词不能为空！");
  }
  else if(rep.value=="error")
  {
    var obj=document.getElementById("kbutton");   
    obj.style.visibility = "visible";
    document.getElementById("kresult").innerHTML="<span class='tip_i'>添加失败!</span>";
  }
  else
  {
    location.reload();
  }
}

function Setting_Delkword(vid,tid)
{
   BLL.AjaxCore.DelUKword(vid,tid,callback_settingdelkword);
}
function callback_settingdelkword(rep)
{
   location.reload();
}

function Message_DelMsg(msgid)
{
  BLL.AjaxCore.DelMsg(msgid,callback_delmsg);
}
function callback_delmsg(rep)
{
   showInfo('<div class="lbClose"><a href="/message" class="imagelink"><img src="/ex/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center"><a href="/message" class="p">删除成功</a></p>'+
        '</div>');
}

function Addcoment(tid)
{
    showInfo('<div id="lbContent"><p align="center"><img src="/images/3MA_processingbar.gif" /><br/>数据正在处理........</p>'+
        '</div>');
    var editor = document.getElementById("wysiwygcontext").contentWindow.document.body.innerHTML;
    if(editor.length<1||editor.length>100000)
    {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">显然你有企图。</p>'+
        '</div>');
        return;
    }
   BLL.AjaxCore.Addcoment(editor,tid,Addcoment_callback);
}
function Addcoment_callback(rep)
{
    if(rep.value=="nologin")
    {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
    }
    else if(rep.value=="nomoney")
    {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您的钱已经不足够你回复主题的了。</p>'+
        '</div>');
        return;
    }
    else if(rep.value=="error")
    {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">数据处理时出现错误。</p>'+
        '</div>');
        return;
    }
    else if(rep.value=="ok")
    {
        showInfo('<div class="lbClose"><a href="#" onclick="window.location.reload();" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center"><a href="#" onclick="window.location.reload();"class="p">回复成功</a></p>'+
        '</div>');
    }
    else
    {
         showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">显然 这是未知的错误。</p>'+
        '</div>');
        return;
    }
    
}
var GI_tid=0;
function  addfav(index)
{
 document.getElementById("fav").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
 GI_tid=index;
 BLL.AjaxCore.addfav(index,addfav_callback);
}
function addfav_callback(rep)
{
   if(rep.value=="nologin")
   {
        document.getElementById("fav").innerHTML="<a href=\"#\" onclick='addfav(" + GI_tid + ")' class=\"p\">收藏该主题</a>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else
   {
     document.getElementById("fav").innerHTML="<a href=\"#\" onclick='delfav(" + GI_tid + ")' class=\"p\">从收藏中删除该主题</a>";
   }
    
}

function delfav(index)
{
   document.getElementById("fav").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
   GI_tid=index;
   BLL.AjaxCore.delfav(index,delfav_callback);
}
function delfav_callback(rep)
{
    if(rep.value=="nologin")
   {
        document.getElementById("fav").innerHTML="<a href=\"#\" onclick='delfav(" + GI_tid + ")' class=\"p\">从收藏中删除该主题</a>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else if(rep.value=="ok")
   {
       document.getElementById("fav").innerHTML="<a href=\"#\" onclick='addfav(" + GI_tid + ")' class=\"p\">收藏该主题</a>";
   }
}

var GI_userid=0;
function  Addkword(index)
{
 document.getElementById("kword").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
 GI_userid=index;
 BLL.AjaxCore.Addkword(index,Addkword_callback);
}
function Addkword_callback(rep)
{
   if(rep.value=="nologin")
   {
        document.getElementById("kword").innerHTML="<a href=\"#\" onclick='Addkword(" + GI_userid + ")' class=\"p\">添加为关注词</a>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else
   {
     document.getElementById("kword").innerHTML="<a href=\"#\" onclick='delkword(" + GI_userid + ")' class=\"p\">从关注词列表中删除</a>";
   }
 }
   
   
   function delkword(index)
{
   document.getElementById("kword").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
   GI_userid=index;
   BLL.AjaxCore.delkword(index,delkword_callback);
}
function delkword_callback(rep)
{
    if(rep.value=="nologin")
   {
        document.getElementById("kword").innerHTML="<a href=\"#\" onclick='delkword(" + GI_userid + ")' class=\"p\">从关注词列表中删除</a>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else if(rep.value=="ok")
   {
       document.getElementById("kword").innerHTML="<a href=\"#\" onclick='Addkword(" + GI_userid + ")' class=\"p\">添加为关注词</a>";
   }
}

///////////////
var GI_username="";
function  addfriend(index,nick)
{
 document.getElementById("frd").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
 GI_userid=index;
 GI_username=nick;
 BLL.AjaxCore.addfriend(index,addfriend_callback);
}
function addfriend_callback(rep)
{
   if(rep.value=="nologin")
   {
        document.getElementById("frd").innerHTML="<span id=\"frd\"><a href=\"#\" onclick='addfriend(" + GI_userid + ",\""+GI_username+"\")' class=\"p\">把 " + GI_username + " 加为好友</a></span>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else
   {
     document.getElementById("frd").innerHTML="<span id=\"frd\"><a href=\"#\" onclick='delfriend(" + GI_userid+ ",\""+GI_username+"\")' class=\"p\">把 " + GI_username + " 从好友列表中去掉</a></span>";
   }
 }
   
   
   function delfriend(index,nick)
{
   document.getElementById("frd").innerHTML="<img src=\"/images/3MA_processingbar.gif\" />";
   GI_userid=index;
   GI_username=nick;
   BLL.AjaxCore.delfriend(index,delfriend_callback);
}
function delfriend_callback(rep)
{
    if(rep.value=="nologin")
   {
        document.getElementById("frd").innerHTML="<span id=\"frd\"><a href=\"#\" onclick='delfriend(" + GI_userid+ ",\""+GI_username+"\")' class=\"p\">把 " + GI_username + " 从好友列表中去掉</a></span>";
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您没有登陆 请登陆或注册。</p>'+
        '</div>');
        return;
   }
   else if(rep.value=="ok")
   {
       document.getElementById("frd").innerHTML="<span id=\"frd\"><a href=\"#\" onclick='addfriend(" + GI_userid+ ",\""+GI_username+"\")' class=\"p\">把 " + GI_username + " 加为好友</a></span>";
   }
}

function userlogin()
{
   if(document.getElementById("nick").value.length==0)
   {
          showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您输入的昵称不能为空。</p>'+
        '</div>');
   }
   else if(document.getElementById("nick").value.length>100)
   {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您输入的昵称过长。</p>'+
        '</div>');
   }
   if(document.getElementById("pwd").value.length==0)
   {
          showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您输入的密码不能为空。</p>'+
        '</div>');
   }
   else if(document.getElementById("nick").value.length>100)
   {
        showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您输入的密码过长。</p>'+
        '</div>');
   }
   BLL.AjaxCore.UserLogin(document.getElementById("nick").value,document.getElementById("pwd").value,callback_userlogin);
}
function callback_userlogin(rep)
{
   var array =rep.value;
   if(array[0]=="fail")
   {
     showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">您输入的用户名错误。</p>'+
        '</div>');
   }
   else
   {
      SetCookie("vsuserid",array[0]);
      SetCookie("vsusername",array[1]);
      showInfo('<div class="lbClose"><a href="#" onclick="setStatusShow(false);" class="imagelink"><img src="/images/window_close_grey.gif" border="0" /></a></div>'+
        '<div id="lbContent"><p align="center">登录成功!</p>'+
        '</div>');
   }
}

    
function SetCookie(name,value){
     var argv=SetCookie.arguments;
     var argc=SetCookie.arguments.length;
 var expires = new Date();
    // var expires=(2<argc)?argv[2]:null;
     var path=(3<argc)?argv[3]:null;
     var domain=(4<argc)?argv[4]:null;
     var secure=(5<argc)?argv[5]:false;
     expires.setDate(expires.getDate()+10);
  document.cookie=name+"="+escape(value)+((expires==null)?"":("; expires="+expires))+((path==null)?"":("; path="+path))+((domain==null)?"":("; domain="+domain))+((secure==true)?"; secure":"");
}

function DelCookie(name)
{
var exp = new Date();
exp.setTime (exp.getTime()-20);
var cval = GetCookie (name);
document.cookie = name + "=" + cval + "; expires="+ exp.toGMTString();
}

	function validateUrl(){

		var str=document.getElementById("email").value;

      	var patn = /^[_a-zA-Z0-9\-]+(\.[_a-zA-Z0-9\-]*)*@[a-zA-Z0-9\-]+([\.][a-zA-Z0-9\-]+)+$/;

    	if(!patn.test(str)){

        	return 1;//incorrect format

    	}
		return 0;

	}
