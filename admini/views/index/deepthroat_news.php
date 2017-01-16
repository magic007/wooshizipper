<table border='0'  cellspacing='0' cellpadding='0' style='width:100%;'  class='tableBorder' >
<tr>
<td  class='tableHeading' >
更新公告 Update News !
</td>
</tr>

			<tr><td class='tableCellTwo' >
<div class='itemWrapper' >
<span class='defaultBold'><a href='http://www.deepthroat.com.cn/cn/?p=32&a=view&r=170' onclick='showHide("news_item_170"); return false;'>深喉咙免费企业网站生成系统最新版本Ver3.7正式版(开源)发布公告</a>&nbsp;(2008-10-28 04:10:54)</span>
</div>

<div class='itemWrapper' id='news_item_170'  style='display: none;'><p><p>深喉咙最新Ver3.7正式版本已经于2008-10-28凌晨5:00正式发布.欢迎广大用户<a target="_blank" href="http://www.deepthroat.com.cn/upload/dtenv(8.1028)(DT)3.7.exe">下载体验开源</a>修改的乐趣.此版本在原有版本基础上进行了大量BUG修正和功能增强.相关更新细节如下.<br />
此版本在原有3.6基础上除做了以下更新:<br />
1,在原有3.6版本上重新构建了系统框架,是系统构架更加合理;<br />
2,为系统增加一个关键性标签&lt;?php echo get_description_name($params['id'],$params['args']) ?&gt;,此标签具体使用可参考<a href="http://deepthroat.com.cn/html/instruction-manual/view_137.html">http://deepthroat.com.cn/html/instruction-manual/view_137.html</a>说明,强烈建议在您的模板上增加此标签;<br />
3,为系统增加一新模块,用户评论 模块,此模块可在系统后台,构建网站-&gt;频道与栏目 管理里添加或修改时设置哪些栏目需要使用评论模块,并根据用户需求,可在构建网站-&gt;站点设置 里设置评论模块是否需要经过管理员审核才可以在前台显示;<br />
4,正式开源深喉咙前台框架程序index.php文件,使用户可以更加灵活、舒服的根据自己需求制作自己的功能模块;<br />
5,根据用户提出的需求,为新闻列表模块下面增加上一篇,下一篇文章标题和链接;<br />
6,根据用户提出的需求,在系统后台,构建网站-&gt;频道与栏目 设置里增加允许用户根据需求为栏目添加外部链接的功能,即:点击此栏目可直接链接在系统外网站上,例如 <a href="http://www.deepthroat.com.cn/bbs/">http://www.deepthroat.com.cn/bbs/</a>这样的链接;使栏目操作更加灵活;<br />
7,修正了editor编辑器无法上传图片的BUG;<br />
8,修正了站点设置里关于新闻列表首页图片调用尺寸大小错误的BUG;<br />
9,修正了系统后台构建网站-&gt;数据库管理 功能插件在有的虚拟主机下无法备份或无法下载的问题(另:此功能需要虚拟主机开相应的功能函数,如果不支持,也是不能够很好使用的)<br />
10,修正了后台轮换FLASH在前台显示时可能存在的错误;<br />
此版本发布之后,官方将会在最近几天整理出一个中英文版深喉咙并发布中英文程序<br />
除此之外至于商城模块.目前还在开发完善中.具体可参考<a href="http://demo.xgets.com/">http://www.xgets.com/</a>欢迎广大网友提出修改意见.预计发布此模块时间为十一月中旬</p></p>
</div>
</td>
</tr>
			
			<tr><td class='tableCellTwo' >
<div class='itemWrapper' >
<span class='defaultBold'><a href='http://www.deepthroat.com.cn/cn/?p=32&a=view&r=169' onclick='showHide("news_item_169"); return false;'>深喉咙企业网站系统用户常见问题及解决方法 (不断添加)</a>&nbsp;(2008-09-10 17:09:51)</span>
</div>

<div class='itemWrapper' id='news_item_169'  style='display: none;'><p><p>1,深喉咙企业网站系统做好网站后，上传服务器需要上传哪些页面？</p>
<p>答：深喉咙企业网站生成系统本身就是一套网站内容管理系统，您需要上传整个程序文件，而不是部分页面文件。您可以直接上传非集成环境版本所有文件到主机，然后安装调试，在线编辑网站；也可以本地编辑好网站之后上传服务器。上传文件的目录是wwwRoot\deepthroat下的全部文件，还有就是需要导入您本地数据。可以参考论坛帖子：<a href="http://www.shenhoulong.net/viewthread.php?tid=5717">http://www.shenhoulong.net/viewthread.php?tid=5717</a>说明，或者视频教程第五部分。</p>
<p>2,安装成功后出现Fatal error: Unable to read 3245 bytes in /home/topma1/public_html/index.php on line 0</p>
<p>答：引起此种问题的原因一般是您使用的是LINUX或UNIX虚拟主机，上传文件和程序的时候需要使用二进制上传，可以在您的上传工具里设。具体可参考论坛<a href="http://www.shenhoulong.net/viewthread.php?tid=6000">http://www.shenhoulong.net/viewthread.php?tid=6000</a>贴</p>
<p>3,关于PHP5.2以上后模版管理[domdocument()::]出错提示。解决方法</p>
<p>答：引起此种问题的原因是domxml扩展和php5.0以后的DOMDocument有冲突，需要修改php.ini，将extension=php_domxml.dll注释掉（在前面添加分号即可注释掉）；重启apache，刷新页面后问题解决。具体可参考<a href="http://www.shenhoulong.net/viewthread.php?tid=6705">http://www.shenhoulong.net/viewthread.php?tid=6705</a>贴</p></p>
</div>
</td>
</tr>
			
			<tr><td class='tableCellTwo' >
<div class='itemWrapper' >
<span class='defaultBold'><a href='http://www.deepthroat.com.cn/cn/?p=32&a=view&r=168' onclick='showHide("news_item_168"); return false;'>深喉咙最新版本系统安装、使用、PHP模版制作、模块插件开发视频教程( 更新中)</a>&nbsp;(2008-09-10 11:09:38)</span>
</div>

<div class='itemWrapper' id='news_item_168'  style='display: none;'><p><p><br />
教程下载地址：<a href="http://www.shenhoulong.net/viewthread.php?tid=6093">http://www.shenhoulong.net/viewthread.php?tid=6093</a></p>
<p>视频分辨率1024*768<br />
第一章：深喉咙的下载和安装以及后台管理<br />
<br />
第二章：第二章：深喉咙的简单配制和使用,MYSQL数据库使用<br />
<br />
第三章：深喉咙模版[php版本]制作教程：<br />
&nbsp; &nbsp; &nbsp; &nbsp; 1,深喉咙模版整体制作以及个人经验谈<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2,如何为您的模版主导行加选中状态<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3,如何为您的站内模糊搜索加标签和链接<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4,模版上会员系统制作以及程序相应修改简介<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5,深喉咙边栏制作的灵活运用<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6,前台页面调用标签修改和模版index目录标签样式内容修改方法<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7,模块前台显示样式修改以及如何控制<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8,深喉咙模版如何打包才可以后台上传安装<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9,如何使用深喉咙网站生成系统让您制作的网站更容易被搜索引擎收录<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
第四章：深喉咙模块制作教程[暂未完成]：<br />
&nbsp; &nbsp; &nbsp; &nbsp; 1,深喉咙的框架简单介绍<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,深喉咙模块制作开发教程详细演示过程[为大家演示并制作一个全新的模块]<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3,深喉咙的模块打包和后台安装教程;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
第五章：使用深喉咙本地测试安装制作好网站后,如何把您的网站程序和数据库上传到虚拟主机<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></p>
</div>
</td>
</tr>
			
			<tr><td class='tableCellTwo' >
<div class='itemWrapper' >
<span class='defaultBold'><a href='http://www.deepthroat.com.cn/cn/?p=32&a=view&r=165' onclick='showHide("news_item_165"); return false;'>Deepthroat 3.6简体中文版本免费预告</a>&nbsp;(2008-04-29 11:04:56)</span>
</div>

<div class='itemWrapper' id='news_item_165'  style='display: none;'><p><p>2008年5月1日我们将推出Deepthroat 3.6简体中文版本，并且从该版本开始，取消简体中文版本域名授权的认证方式，不做任何功能限制，免费供大家下载使用。</p>
<p>&ldquo;让广大用户快捷、简便地建立自己的网站&rdquo;是我们开发Deepthroat的初衷，在过去的日子里开发团队一直为实现这个愿望而不懈努力。</p>
<p>自2004年起，Deepthroat与广大用户一起成长，从最初的Deepthroat 1.0版本到即将推出的Deepthroat 3.6版本，Deepthroat也由单一的文章管理系统发展成为了文章、新闻、下载、图片、留言、产品、招聘、订单等数十个模块组成的综合性网站内容管理系统。</p>
<p>追逐梦想的过程是痛苦的：在开发Deepthroat的过程中我们曾饿着肚子工作，几台电脑，一腔热血，项目组也几经重组，甚至濒临解散;追逐梦想的过程也是快乐的，因为有大家的支持：从在论坛热情地给我们建议、致电我们报告bug热心提出修改意见，到自发的宣传Deepthroat、推荐商业版本给有需要的朋友&hellip;&hellip;</p>
<p>正是有了大家的支持和关爱，我们才能走到今天，特别是商业版本用户，你们为Deepthroat的快速发展做了巨大的贡献。这一点我们时刻铭记在心，同时会以更好的产品和服务来回报大家。为了感谢商业用户对Deepthroat的支持与厚爱，我们特别制定了以下回报计划：<br />
1、所有原商业用户可以免费使用我们发布的精美模板和功能模块；<br />
2、原简体中文版本商业用户的技术支持时间延长一年；<br />
3、原简体中文版本商业用户保留论坛vip会员资格，享用vip资源。<br />
4、原简体中文版本商业用户购买双语版本、多语版本等商业版本系统享受八折优惠。<br />
<br />
注：<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、所有上文涉及到的&ldquo;原商业用户&rdquo;指截至2008年5月1日前成交的商业用户。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、Deepthroat 3.6简体中文版本及后续的所有简体中文免费版本，未获商业授权之前不得用于商业用途（包括但不限于二次开发衍生产品的销售活动）。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、用户在使用本开发组开发发布的任意产品的过程中，产生的所有纠纷与开发组无关。</p>
<p>本文解释权归Deepthroat官方所有。</p></p>
</div>
</td>
</tr>
			
			<tr><td class='tableCellTwo' >
<div class='itemWrapper' >
<span class='defaultBold'><a href='http://www.deepthroat.com.cn/cn/?p=32&a=view&r=162' onclick='showHide("news_item_162"); return false;'>深喉咙企业网站生成系统官方最新公告</a>&nbsp;(2008-03-26 04:02:54)</span>
</div>

<div class='itemWrapper' id='news_item_162'  style='display: none;'><p><p><strong>Aiwise 中国:<br />
Zhengzhou Aiwise Technology Co.,Ld<br />
爱慧国际中国区华北分公司（深喉咙项目开发组）</strong>Tel 电话 :+86-371-66052229(办公室搬迁原客服电话68958636于3月31日起停用)<br />
Fax 传真 :+86-371-69339333-808<br />
E-mail 邮件 : zy842335#163.com或shenhoulong#163.com(发邮件时用@替换#，下同)&nbsp;</p>
<p><strong>Zhongshan Aiwise Technology Co.,Ld<br />
中山市凯慧电子科技有限公司 （爱慧国际中国区华南分公司）</strong><br />
Tel 电话 :+86-760-2188686<br />
Fax 传真 :+86-760-3304444<br />
E-mail 邮件 : zy842335#163.com或shenhoulong#163.com</p>
<p><hr />
</p>
<p><strong>Aiwise 中国香港:<br />
Aiwise International Group (Hong Kong) Limited</strong><br />
爱慧国际集团（香港）有限公司<br />
Tel 电话 :+852-22676589<br />
Fax 传真 :+852-24873839<br />
E-mail 邮件 : zy842335#163.com或shenhoulong#163.com</p></p>
</div>
</td>
</tr>
			</table>