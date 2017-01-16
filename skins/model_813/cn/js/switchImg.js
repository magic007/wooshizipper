(function ($) {
	$.extend({  
		switchImg:function(o){		
			var config={
			i:1,
			cWidth:document.body.clientWidth,
			div:o.div?$(o.div):$("div"),
			ul:o.div?$(o.div+">ul"):$("div>ul"),
			img:o.div?$(o.div+">ul>li>img"):$("div>ul>li>img"),
			max:o.max?o.max:2,
			interval:o && o.interval || 3500,
			height:o && o.height || 150,
			},
			silde=function(){
				config.ul.i = config.i; //当前第几张
				config.ul.liWidth = document.body.clientWidth; //LI宽度
				if(config.ul.i===0){
					config.ul.css('left', '0px');
				}else{
					config.ul.animate({left: -(config.ul.i * config.ul.liWidth) + "px"},1000);
				}
				++config.i;
				if (config.ul.i == config.max) {
					config.i = 0;
				}
				//console.log(config.ul.i);			
			},
			viewLoad=function(){
				config.ul.css('left', '0px');
				config.cWidth =document.body.clientWidth;
				config.div.width(config.cWidth);	
				config.div.height(document.documentElement.clientHeight-config.height);

				config.img.each(function(m){
					AutoResizeImage(config.cWidth, 0, $(this)[0]);				
				});
			},		
			AutoResizeImage=function (maxWidth, maxHeight, objImg) {
								var img = new Image();
								img.src = objImg.src;
								var hRatio;
								var wRatio;
								var Ratio = 1;
								var w = img.width;
								var h = img.height;
								wRatio = maxWidth / w;
								hRatio = maxHeight / h;
								if (maxWidth == 0 && maxHeight == 0) {
									Ratio = 1;
								} else if (maxWidth == 0) { //
									if (hRatio < 1) Ratio = hRatio;
								} else if (maxHeight == 0) {
									if (wRatio < 1) Ratio = wRatio;
								} else if (wRatio < 1 || hRatio < 1) {
									Ratio = (wRatio <= hRatio ? wRatio: hRatio);
								}
								if (Ratio < 1) {
									w = w * Ratio;
									h = h * Ratio;
								}
								objImg.height = h;
								objImg.width = w;
			},
			s= setInterval(silde,config.interval);
			new viewLoad;
			//new imgLoad;//加载时设置图片大小
			$(window).resize(function() {//改变窗口时执行函数			
				new viewLoad;
			});
		}	
	});
}(jQuery));