// JavaScript Document
function f(name){
	var cbx=document.getElementsByTagName("input");
	for(var i=0;i<cbx.length;i++)
	{
		if(cbx[i].type =="checkbox" && cbx[i].name==name)
		{
			if (cbx[i].checked)
			{
				var t=cbx[i].parentElement;
				while(t.tagName!='TR'){ t=t.parentNode;}
				t.style.backgroundColor="#ffb";
			}
			else
			{
				var t=cbx[i].parentElement;
				while(t.tagName!='TR'){ t=t.parentNode;}
				t.style.backgroundColor="";
			}
		}
	}
}

function btn_check_all(name,flag){//flag false=off true=on
	var cbx=document.getElementsByTagName("input");
	for(var i=0;i<cbx.length;i++)
	{
		if(cbx[i].type =="checkbox" && cbx[i].name==name)
		{
			if(flag)
			cbx[i].checked="checked";
			else
			cbx[i].checked="";
		}
	}
}
function cw(sender)
{
	if(sender.style.backgroundColor!="#ffb")
	sender.style.backgroundColor='';
}
function cy(sender)
{
	if(sender.style.backgroundColor!="#ffb")
	sender.style.backgroundColor='#ffc';
}