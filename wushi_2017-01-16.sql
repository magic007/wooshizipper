# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 124.172.243.212 (MySQL 5.5.17-log)
# Database: wushi
# Generation Time: 2017-01-16 14:13:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ws_article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_article`;

CREATE TABLE `ws_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `pageId` int(11) NOT NULL DEFAULT '0',
  `pageName` varchar(100) NOT NULL DEFAULT '',
  `summary` text,
  `content` longtext,
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `origialPic` varchar(255) NOT NULL DEFAULT '',
  `smallPic` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_article` WRITE;
/*!40000 ALTER TABLE `ws_article` DISABLE KEYS */;

INSERT INTO `ws_article` (`id`, `channelId`, `pageId`, `pageName`, `summary`, `content`, `dtTime`, `cguid`, `origialPic`, `smallPic`)
VALUES
	(1,7,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地——广东省广州市花都区狮岭镇。</p>\r\n				<p>自成立以来,乌石公司一直秉承着“优质产品，诚信服务”的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中心。</p>\r\n				<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-04 16:35:15','','',''),
	(2,2,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地——广东省广州市花都区狮岭镇。</p>\r\n				<p>自成立以来,乌石公司一直秉承着“优质产品，诚信服务”的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中心。</p>\r\n				<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-04 16:34:57','','',''),
	(3,1,0,'','','','2013-12-05 11:30:09','','',''),
	(7,23,0,'','','<style type=\"text/css\">\r\n    html,body{margin:0;padding:0;}\r\n    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}\r\n    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}\r\n</style>\r\n<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?key=&v=1.1&services=true\"></script>\r\n<div style=\"width:530px;height:250px;border:#ccc solid 1px;\" id=\"dituContent\"></div>\r\n<script type=\"text/javascript\">\r\n    //创建和初始化地图函数：\r\n    function initMap(){\r\n        createMap();//创建地图\r\n        setMapEvent();//设置地图事件\r\n        addMapControl();//向地图添加控件\r\n        addMarker();//向地图中添加marker\r\n    }\r\n    \r\n    //创建地图函数：\r\n    function createMap(){\r\n        var map = new BMap.Map(\"dituContent\");//在百度地图容器中创建一个地图\r\n        var point = new BMap.Point(113.282543,23.262773);//定义一个中心点坐标\r\n        map.centerAndZoom(point,9);//设定地图的中心点和坐标并将地图显示在地图容器中\r\n        window.map = map;//将map变量存储在全局\r\n    }\r\n    \r\n    //地图事件设置函数：\r\n    function setMapEvent(){\r\n        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)\r\n        map.enableScrollWheelZoom();//启用地图滚轮放大缩小\r\n        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)\r\n        map.enableKeyboard();//启用键盘上下左右键移动地图\r\n    }\r\n    \r\n    //地图控件添加函数：\r\n    function addMapControl(){\r\n        //向地图中添加缩放控件\r\n	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});\r\n	map.addControl(ctrl_nav);\r\n        //向地图中添加缩略图控件\r\n	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});\r\n	map.addControl(ctrl_ove);\r\n        //向地图中添加比例尺控件\r\n	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});\r\n	map.addControl(ctrl_sca);\r\n    }\r\n    \r\n    //标注点数组\r\n    var markerArr = [\r\n		  {title:\"广州市乌石拉链有限公司\",content:\"电话(Tel)：&nbsp;+86-20-86925666&nbsp;&nbsp;86911922<br/>传真(Fax)：+86-20-86911911<br/>公司网址：http://www.wooshizipper.com<br/>E-mail：wooshizipper@163.com<br/>地址：广州市花都区狮岭镇狮岭大道中87号\",point:\"113.195769|23.453913\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"清远市通用皮具配件有限公司\",content:\"电话(Tel)：&nbsp;0763-3607979<br/>传真(Fax)：0763-3607979<br/>公司网址：http://www.wooshizipper.com<br/>工厂地址：清远市高新区雄兴工业大道C区6号清远市通用皮具配件有限公司\",point:\"113.109878|23.56886\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;兴威店\",content:\"电话(Tel)：&nbsp;+86-20-86923732&nbsp;&nbsp;86934732<br/>传真(Fax)：+86-20-86928732<br/>公司网址：http://www.wooshizipper.com<br/>E-mail：wswjll@163.com<br/>中国广州市花都区狮岭镇狮岭（国际）皮革皮具城A广场路1、2号\",point:\"113.159221|23.466402\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;菊花店\",content:\"电话(Tel)：&nbsp;+86-20-86917900&nbsp;&nbsp;86917890<br/>传真(Fax)：+86-20-86917868<br/>公司网址：http://&nbsp;www.wooshizipper.com<br/>E-mail：wsjhll@163.com<br/>中国广州市花都区狮岭镇狮岭（国际）皮革皮具城一期B一街45、47号\",point:\"113.159472|23.466452\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;琼花店\",content:\"电话(Tel)：&nbsp;+86-20-36973999&nbsp;&nbsp;36973889<br/>传真(Fax)：+86-20-36973636<br/>公司网站：http://&nbsp;www.wooshizipper.com<br/>E-mail：wsqhll@126.com<br/>地址:中国广州市花都区狮岭镇狮岭大道西91号联润二街9号、11号铺\",point:\"113.181706|23.460435\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州良盛办事处\",content:\"电话(Tel)：020-36713307<br/>传真(Fax)：020-36713293<br/>地址：广州市白云区新石路良盛鞋材皮具五金城B5-11-12\",point:\"113.282543|23.262773\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州三元里佳豪店\",content:\"电话(Tel)：020-37415830<br/>地址：广州市白云区佳豪国际皮料城E117\",point:\"113.264791|23.163839\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"东莞办事处\",content:\"电话(Tel)：0769-89398368<br/>传真(Fax)：0769-81205566<br/>地址：东莞市茶山镇上元村布料市场C2-28、29\",point:\"113.889068|23.070238\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ];\r\n    //创建marker\r\n    function addMarker(){\r\n        for(var i=0;i<markerArr.length;i++){\r\n            var json = markerArr[i];\r\n            var p0 = json.point.split(\"|\")[0];\r\n            var p1 = json.point.split(\"|\")[1];\r\n            var point = new BMap.Point(p0,p1);\r\n			var iconImg = createIcon(json.icon);\r\n            var marker = new BMap.Marker(point,{icon:iconImg});\r\n			var iw = createInfoWindow(i);\r\n			var label = new BMap.Label(json.title,{\"offset\":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});\r\n			marker.setLabel(label);\r\n            map.addOverlay(marker);\r\n            label.setStyle({\r\n                        borderColor:\"#808080\",\r\n                        color:\"#333\",\r\n                        cursor:\"pointer\"\r\n            });\r\n			\r\n			(function(){\r\n				var index = i;\r\n				var _iw = createInfoWindow(i);\r\n				var _marker = marker;\r\n				_marker.addEventListener(\"click\",function(){\r\n				    this.openInfoWindow(_iw);\r\n			    });\r\n			    _iw.addEventListener(\"open\",function(){\r\n				    _marker.getLabel().hide();\r\n			    })\r\n			    _iw.addEventListener(\"close\",function(){\r\n				    _marker.getLabel().show();\r\n			    })\r\n				label.addEventListener(\"click\",function(){\r\n				    _marker.openInfoWindow(_iw);\r\n			    })\r\n				if(!!json.isOpen){\r\n					label.hide();\r\n					_marker.openInfoWindow(_iw);\r\n				}\r\n			})()\r\n        }\r\n    }\r\n    //创建InfoWindow\r\n    function createInfoWindow(i){\r\n        var json = markerArr[i];\r\n        var iw = new BMap.InfoWindow(\"<b class=\'iw_poi_title\' title=\'\" + json.title + \"\'>\" + json.title + \"</b><div class=\'iw_poi_content\'>\"+json.content+\"</div>\");\r\n        return iw;\r\n    }\r\n    //创建一个Icon\r\n    function createIcon(json){\r\n        var icon = new BMap.Icon(\"http://app.baidu.com/map/images/us_mk_icon.png\", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})\r\n        return icon;\r\n    }\r\n    \r\n    initMap();//创建和初始化地图\r\n</script>','2013-12-10 17:14:49','','',''),
	(8,6,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地&mdash;&mdash;广东省广州市花都区狮岭镇。</p>\r\n<p>自成立以来,乌石公司一直秉承着&ldquo;优质产品，诚信服务&rdquo;的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有 乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基 地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中 心。</p>\r\n<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-06 14:45:19','','',''),
	(4,26,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地——广东省广州市花都区狮岭镇。</p>\r\n				<p>自成立以来,乌石公司一直秉承着“优质产品，诚信服务”的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中心。</p>\r\n				<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-05 09:43:53','','',''),
	(5,22,0,'','','<h2>乌石拉链有限公司</h2>\r\n<p>地址： 广州市花都区狮岭镇狮岭大道中87号</p>\r\n<p>邮编：510850</p>\r\n<p>电话：+86-20-86915061&nbsp;&nbsp;86929128&nbsp;&nbsp;传真：+86-20-86915068</p>\r\n<p>网址：http://www.wooshizipper.com</p>\r\n<h2>乌石拉链</h2>\r\n<p>+86-20-86923732&nbsp;&nbsp;86917900</p>\r\n<p>+86-20-36973999&nbsp;&nbsp;86925666</p>\r\n<p>网址：http://www.wooshizipper.com</p>\r\n','2013-12-05 10:51:22','','',''),
	(6,27,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地——广东省广州市花都区狮岭镇。</p>\r\n				<p>自成立以来,乌石公司一直秉承着“优质产品，诚信服务”的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中心。</p>\r\n				<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>\r\n<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地——广东省广州市花都区狮岭镇。</p>\r\n				<p>自成立以来,乌石公司一直秉承着“优质产品，诚信服务”的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中心。</p>\r\n				<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-06 14:54:36','','',''),
	(9,4,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地&mdash;&mdash;广东省广州市花都区狮岭镇。</p>\r\n<p>自成立以来,乌石公司一直秉承着&ldquo;优质产品，诚信服务&rdquo;的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有 乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基 地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中 心。</p>\r\n<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-06 14:45:35','','',''),
	(10,5,0,'','','<p>乌石始创于1984年，坐落于国内最大的皮革皮具生产销售中心和原辅材料集散地&mdash;&mdash;广东省广州市花都区狮岭镇。</p>\r\n<p>自成立以来,乌石公司一直秉承着&ldquo;优质产品，诚信服务&rdquo;的理念,形成集研发、设计、生产、销售、服务于一体的多元化拉链五金公司。旗下拥有 乌石拉链和远丰五金两大品牌。为了不断扩大规模实现长期发展战略目标，公司于2009年进行资源整合,在清远投资兴建了占地155亩的现代化拉链生产基 地；为了不断提高企业核心竞争力,乌石还全面导入ISO9001质量管理体系认证、6S管理体系和企业信息管理系统（ERP），建立了强大的产品研发中 心。</p>\r\n<p>乌石公司引进了先进设备和生产技术,并一直致力于各式拉链、拉头及五金配件的生产与研发,其品种和规格在狮岭五金拉链行业中是最为齐全的拉链制造商之一，同时也是多家箱包厂家的指定辅料供应商。</p>','2013-12-06 14:45:43','','',''),
	(11,19,0,'','','1. 负责公司前台访客接待及电话登记、接转；\r\n2. 及时更新和管理员工通讯地址和电话号码等联系信息并协助各部门进行每月文具的采购及发放；\r\n3. 受理会议室及会议设备预约，协调会议时间，下发会议通知，布置会议室；\r\n4. 负责公司往来信件、包裹的安排及与快递公司的联系；\r\n5. 负责公司车辆的管理与协调；\r\n6. 公司保安，保洁，员工餐厅的协助管理；\r\n7. 负责公司日常办公用品与相关耗材管理；\r\n8. 员工工服及劳保用品管理；\r\n9. 完成上级交给的其它事务性工作\r\n \r\nKnowledge, Skills and Experience:\r\n1. 大专及以上学历，英语或财务专业优先；\r\n2. 两年以上工作经验，有外资公司行政管理工作经验为佳；\r\n3. 良好的英语水平及计算机技能 (精通Excel, Word, PowerPoint)；\r\n4. 良好的工作安排和组织能力，处事灵活， 良好的人际沟通能力和团队协作精神。','2013-12-06 17:13:04','','',''),
	(12,20,0,'','','<p>1. 负责公司前台访客接待及电话登记、接转；</p>\r\n<p>2. 及时更新和管理员工通讯地址和电话号码等联系信息并协助各部门进行每月文具的采购及发放；</p>\r\n<p>3. 受理会议室及会议设备预约，协调会议时间，下发会议通知，布置会议室；</p>\r\n<p>4. 负责公司往来信件、包裹的安排及与快递公司的联系；</p>\r\n<p>5. 负责公司车辆的管理与协调；</p>\r\n<p>6. 公司保安，保洁，员工餐厅的协助管理；</p>\r\n<p>7. 负责公司日常办公用品与相关耗材管理；</p>\r\n<p>8. 员工工服及劳保用品管理；</p>\r\n<p>9. 完成上级交给的其它事务性工作</p>\r\n \r\n<p>Knowledge, Skills and Experience:</p>\r\n<p>1. 大专及以上学历，英语或财务专业优先；</p>\r\n<p>2. 两年以上工作经验，有外资公司行政管理工作经验为佳；</p>\r\n<p>3. 良好的英语水平及计算机技能 (精通Excel, Word, PowerPoint)；</p>\r\n<p>4. 良好的工作安排和组织能力，处事灵活， 良好的人际沟通能力和团队协作精神。</p>','2013-12-06 17:14:24','','',''),
	(13,28,0,'','','\r\n','2013-12-07 10:42:51','','',''),
	(15,44,0,'','','<p>1 responsible for the company\'s receptionist and telephone registration, transfer; procurement and distribution of </p>\r\n<p>2 update employee\'s address and phone number and other contact information and monthly stationery assist each department; </p>\r\n<p>3 conference room and conference equipment booking, coordinating meetings, issued a notice of the meeting, arrangement of meeting rooms; </p>\r\n<p>4 responsible for the company letters, parcels and contact with the courier company; </p>\r\n<p>5 responsible for the vehicle management and coordination; </p>\r\n<p>6, security, cleaning, assist in the management of canteen; </p>\r\n<p>7 responsible for daily office supplies and consumables management; </p>\r\n<p>8 staff uniforms and supplies labor management; </p>\r\n<p>9 the higher authorities to complete the other work Knowledge, Skills and Experience: 1 and above college degree, preferably in English or finance; 2 years or above working experience in a Foreign capital company, administrative management work experience is preferred; 3 good command of English and computer skills (proficiency in Excel, Word, PowerPoint); 4 good work arrangements and organizational ability, flexibility, good interpersonal communication ability and the team cooperation spirit.</p>','2013-12-07 11:14:13','','',''),
	(16,45,0,'','','<p>1 responsible for the company\'s receptionist and telephone registration, transfer; procurement and distribution of </p>\r\n<p>2 update employee\'s address and phone number and other contact information and monthly stationery assist each department; </p>\r\n<p>3 conference room and conference equipment booking, coordinating meetings, issued a notice of the meeting, arrangement of meeting rooms; </p>\r\n<p>4 responsible for the company letters, parcels and contact with the courier company; </p>\r\n<p>5 responsible for the vehicle management and coordination; </p>\r\n<p>6, security, cleaning, assist in the management of canteen; </p>\r\n<p>7 responsible for daily office supplies and consumables management; </p>\r\n<p>8 staff uniforms and supplies labor management; </p>\r\n<p>9 the higher authorities to complete the other work Knowledge, Skills and Experience: 1 and above college degree, preferably in English or finance; 2 years or above working experience in a Foreign capital company, administrative management work experience is preferred; 3 good command of English and computer skills (proficiency in Excel, Word, PowerPoint); 4 good work arrangements and organizational ability, flexibility, good interpersonal communication ability and the team cooperation spirit.</p>','2013-12-07 11:14:34','','',''),
	(14,29,0,'','','Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers. Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers.','2013-12-07 10:42:33','','',''),
	(17,47,0,'','','<h2> Wushi zipper Co., </h2>\r\n<p> address: Guangzhou City Shiling Town Huadu District Shiling Road No. 87 </p>\r\n<p> zip code: 510850</p>\r\n<p> Tel: +86-20-86915061&nbsp; &nbsp; 86929128&nbsp; &nbsp; fax: +86-20-86915068</p>\r\n<p> web site: http://www.wooshizipper.com</p>\r\n<h2> Wushi zip </h2>\r\n<p>+86-20-86923732&nbsp; &nbsp; 86917900</p>\r\n<p>+86-20-36973999&nbsp; &nbsp; 86925666</p>\r\n<p> web site: http://www.wooshizipper.com</p>','2013-12-07 11:15:06','','',''),
	(18,48,0,'','','<style type=\"text/css\">\r\n    html,body{margin:0;padding:0;}\r\n    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}\r\n    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}\r\n</style>\r\n<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?key=&v=1.1&services=true\"></script>\r\n<div style=\"width:530px;height:250px;border:#ccc solid 1px;\" id=\"dituContent\"></div>\r\n<script type=\"text/javascript\">\r\n    //创建和初始化地图函数：\r\n    function initMap(){\r\n        createMap();//创建地图\r\n        setMapEvent();//设置地图事件\r\n        addMapControl();//向地图添加控件\r\n        addMarker();//向地图中添加marker\r\n    }\r\n    \r\n    //创建地图函数：\r\n    function createMap(){\r\n        var map = new BMap.Map(\"dituContent\");//在百度地图容器中创建一个地图\r\n        var point = new BMap.Point(113.282543,23.262773);//定义一个中心点坐标\r\n        map.centerAndZoom(point,9);//设定地图的中心点和坐标并将地图显示在地图容器中\r\n        window.map = map;//将map变量存储在全局\r\n    }\r\n    \r\n    //地图事件设置函数：\r\n    function setMapEvent(){\r\n        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)\r\n        map.enableScrollWheelZoom();//启用地图滚轮放大缩小\r\n        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)\r\n        map.enableKeyboard();//启用键盘上下左右键移动地图\r\n    }\r\n    \r\n    //地图控件添加函数：\r\n    function addMapControl(){\r\n        //向地图中添加缩放控件\r\n	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});\r\n	map.addControl(ctrl_nav);\r\n        //向地图中添加缩略图控件\r\n	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});\r\n	map.addControl(ctrl_ove);\r\n        //向地图中添加比例尺控件\r\n	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});\r\n	map.addControl(ctrl_sca);\r\n    }\r\n    \r\n    //标注点数组\r\n    var markerArr = [\r\n		  {title:\"广州市乌石拉链有限公司\",content:\"电话(Tel)：&nbsp;+86-20-86925666&nbsp;&nbsp;86911922<br/>传真(Fax)：+86-20-86911911<br/>公司网址：http://www.wooshizipper.com<br/>E-mail：wooshizipper@163.com<br/>地址：广州市花都区狮岭镇狮岭大道中87号\",point:\"113.195769|23.453913\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"清远市通用皮具配件有限公司\",content:\"电话(Tel)：&nbsp;0763-3607979<br/>传真(Fax)：0763-3607979<br/>公司网址：http://www.wooshizipper.com<br/>工厂地址：清远市高新区雄兴工业大道C区6号清远市通用皮具配件有限公司\",point:\"113.109878|23.56886\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;兴威店\",content:\"电话(Tel)：&nbsp;+86-20-86923732&nbsp;&nbsp;86934732<br/>传真(Fax)：+86-20-86928732<br/>公司网址：http://www.wooshizipper.com<br/>E-mail：wswjll@163.com<br/>中国广州市花都区狮岭镇狮岭（国际）皮革皮具城A广场路1、2号\",point:\"113.159221|23.466402\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;菊花店\",content:\"电话(Tel)：&nbsp;+86-20-86917900&nbsp;&nbsp;86917890<br/>传真(Fax)：+86-20-86917868<br/>公司网址：http://&nbsp;www.wooshizipper.com<br/>E-mail：wsjhll@163.com<br/>中国广州市花都区狮岭镇狮岭（国际）皮革皮具城一期B一街45、47号\",point:\"113.159472|23.466452\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州市乌石拉链有限公司&nbsp;琼花店\",content:\"电话(Tel)：&nbsp;+86-20-36973999&nbsp;&nbsp;36973889<br/>传真(Fax)：+86-20-36973636<br/>公司网站：http://&nbsp;www.wooshizipper.com<br/>E-mail：wsqhll@126.com<br/>地址:中国广州市花都区狮岭镇狮岭大道西91号联润二街9号、11号铺\",point:\"113.181706|23.460435\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州良盛办事处\",content:\"电话(Tel)：020-36713307<br/>传真(Fax)：020-36713293<br/>地址：广州市白云区新石路良盛鞋材皮具五金城B5-11-12\",point:\"113.282543|23.262773\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"广州三元里佳豪店\",content:\"电话(Tel)：020-37415830<br/>地址：广州市白云区佳豪国际皮料城E117\",point:\"113.264791|23.163839\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ,{title:\"东莞办事处\",content:\"电话(Tel)：0769-89398368<br/>传真(Fax)：0769-81205566<br/>地址：东莞市茶山镇上元村布料市场C2-28、29\",point:\"113.889068|23.070238\",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}\r\n		 ];\r\n    //创建marker\r\n    function addMarker(){\r\n        for(var i=0;i<markerArr.length;i++){\r\n            var json = markerArr[i];\r\n            var p0 = json.point.split(\"|\")[0];\r\n            var p1 = json.point.split(\"|\")[1];\r\n            var point = new BMap.Point(p0,p1);\r\n			var iconImg = createIcon(json.icon);\r\n            var marker = new BMap.Marker(point,{icon:iconImg});\r\n			var iw = createInfoWindow(i);\r\n			var label = new BMap.Label(json.title,{\"offset\":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});\r\n			marker.setLabel(label);\r\n            map.addOverlay(marker);\r\n            label.setStyle({\r\n                        borderColor:\"#808080\",\r\n                        color:\"#333\",\r\n                        cursor:\"pointer\"\r\n            });\r\n			\r\n			(function(){\r\n				var index = i;\r\n				var _iw = createInfoWindow(i);\r\n				var _marker = marker;\r\n				_marker.addEventListener(\"click\",function(){\r\n				    this.openInfoWindow(_iw);\r\n			    });\r\n			    _iw.addEventListener(\"open\",function(){\r\n				    _marker.getLabel().hide();\r\n			    })\r\n			    _iw.addEventListener(\"close\",function(){\r\n				    _marker.getLabel().show();\r\n			    })\r\n				label.addEventListener(\"click\",function(){\r\n				    _marker.openInfoWindow(_iw);\r\n			    })\r\n				if(!!json.isOpen){\r\n					label.hide();\r\n					_marker.openInfoWindow(_iw);\r\n				}\r\n			})()\r\n        }\r\n    }\r\n    //创建InfoWindow\r\n    function createInfoWindow(i){\r\n        var json = markerArr[i];\r\n        var iw = new BMap.InfoWindow(\"<b class=\'iw_poi_title\' title=\'\" + json.title + \"\'>\" + json.title + \"</b><div class=\'iw_poi_content\'>\"+json.content+\"</div>\");\r\n        return iw;\r\n    }\r\n    //创建一个Icon\r\n    function createIcon(json){\r\n        var icon = new BMap.Icon(\"http://app.baidu.com/map/images/us_mk_icon.png\", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})\r\n        return icon;\r\n    }\r\n    \r\n    initMap();//创建和初始化地图\r\n</script>','2013-12-10 17:14:56','','',''),
	(19,30,0,'','','Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers. Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers.','2013-12-07 11:16:25','','',''),
	(20,31,0,'','','Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers. Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers.','2013-12-07 11:16:28','','',''),
	(21,32,0,'','','Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers. Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers.','2013-12-07 11:16:31','','',''),
	(22,33,0,'','','Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers. Wu Shi was founded in 1984, is located in China\'s largest leather production and sales center and raw and auxiliary materials distribution -- Shiling Town Huadu District, Guangzhou City, Guangdong province. Since its establishment, the company has been adhering to the \"Wushi quality products, sincere service\" concept, the formation of R & D, design, production, sales, service in one of the diversified zipper hardware company. Owns the Wushi zipper and Yuanfeng hardware two brands. In order to expanding the scale to achieve long-term development strategy, the company in 2009 through the integration of resources, invest in Qingyuan covers an area of 155 acres of modern zipper production base; in order to improve the core competitiveness of enterprises, Wu Shi is a comprehensive import ISO9001 quality management system certification, 6S management system and enterprise management information system (ERP), a powerful product R & D center. Wu Shi company introduced advanced equipment and production technology, and has been committed to the production and development of all kinds of zipper, zipper, hardware accessories, the varieties and specifications in Shiling metal zipper industry is one of the most complete zipper manufacturer, is also a bag manufacturers designated materials suppliers.','2013-12-07 11:16:34','','','');

/*!40000 ALTER TABLE `ws_article` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_calllist
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_calllist`;

CREATE TABLE `ws_calllist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `callId` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_comment`;

CREATE TABLE `ws_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(11) NOT NULL DEFAULT '0',
  `channelId` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `content` text,
  `email` varchar(60) NOT NULL,
  `homepage` varchar(60) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `dtTime` datetime NOT NULL,
  `auditing` tinyint(4) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `memberId` int(11) NOT NULL DEFAULT '0',
  `memberTableName` varchar(255) NOT NULL,
  `answerId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_download
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_download`;

CREATE TABLE `ws_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `softwareName` varchar(200) NOT NULL DEFAULT '',
  `softwareSize` varchar(200) NOT NULL DEFAULT '',
  `language` varchar(40) NOT NULL DEFAULT '',
  `classification` varchar(200) NOT NULL DEFAULT '',
  `platform` varchar(200) NOT NULL DEFAULT '',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `introduce` text,
  `filePath` varchar(200) NOT NULL DEFAULT '',
  `counts` int(11) NOT NULL DEFAULT '0',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_flash
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_flash`;

CREATE TABLE `ws_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `url` varchar(200) NOT NULL DEFAULT '',
  `picpath` varchar(200) NOT NULL DEFAULT '',
  `group_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `summary` text,
  `dt_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_flash_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_flash_group`;

CREATE TABLE `ws_flash_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `summary` text,
  `dt_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sign` int(11) NOT NULL DEFAULT '0',
  `title_text_color` varchar(255) NOT NULL DEFAULT '0xffffff',
  `title_bg_color` varchar(255) NOT NULL DEFAULT '0xff6600',
  `title_bg_alpha` int(11) NOT NULL DEFAULT '60',
  `autoPlayTime` int(11) NOT NULL DEFAULT '8',
  `transformFlag` int(11) NOT NULL DEFAULT '2',
  `btn_text_color` varchar(255) NOT NULL DEFAULT '0xffffff',
  `btn_over_color` varchar(255) NOT NULL DEFAULT '0xff6600',
  `btn_out_color` varchar(255) NOT NULL DEFAULT '0x000033',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_guestbook
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_guestbook`;

CREATE TABLE `ws_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `homepage` varchar(60) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `ip` varchar(40) NOT NULL DEFAULT '',
  `isPublic` int(11) NOT NULL DEFAULT '0',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` text,
  `content1` text,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `telephone` varchar(16) NOT NULL DEFAULT '',
  `company` varchar(60) NOT NULL DEFAULT '',
  `auditing` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_jobs`;

CREATE TABLE `ws_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `jobName` varchar(200) NOT NULL DEFAULT '',
  `jobKind` varchar(100) NOT NULL DEFAULT '',
  `requireNum` int(11) NOT NULL DEFAULT '0',
  `experience` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `age` varchar(100) NOT NULL DEFAULT '',
  `height` varchar(50) NOT NULL DEFAULT '',
  `languageSkill` varchar(100) NOT NULL DEFAULT '',
  `lastTime` varchar(50) NOT NULL DEFAULT '',
  `salary` varchar(50) NOT NULL DEFAULT '',
  `educational` varchar(50) NOT NULL DEFAULT '',
  `isHouse` varchar(50) NOT NULL DEFAULT '',
  `sex` varchar(4) NOT NULL DEFAULT '',
  `computerLevel` varchar(100) NOT NULL DEFAULT '',
  `summary` text,
  `telphone` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_linkers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_linkers`;

CREATE TABLE `ws_linkers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `links` int(11) NOT NULL DEFAULT '0',
  `linkerName` varchar(100) NOT NULL DEFAULT '',
  `linkAddress` varchar(150) NOT NULL,
  `origialPic` varchar(255) NOT NULL,
  `smallPic` varchar(255) NOT NULL,
  `summary` text,
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_list`;

CREATE TABLE `ws_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isTopic` tinyint(1) NOT NULL DEFAULT '0',
  `isImportant` tinyint(1) NOT NULL DEFAULT '0',
  `channelId` int(11) NOT NULL DEFAULT '0',
  `title` varchar(60) NOT NULL DEFAULT '',
  `author` varchar(30) NOT NULL DEFAULT '',
  `source` varchar(60) NOT NULL DEFAULT '',
  `counts` int(11) NOT NULL DEFAULT '0',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tags` varchar(60) NOT NULL DEFAULT '',
  `check` tinyint(4) NOT NULL DEFAULT '0',
  `uname` varchar(16) NOT NULL DEFAULT '',
  `summary` text,
  `pic` varchar(100) NOT NULL DEFAULT '',
  `recommend` int(11) NOT NULL DEFAULT '0',
  `mark` int(11) NOT NULL DEFAULT '0',
  `guid` varchar(16) NOT NULL DEFAULT '',
  `isPic` int(11) NOT NULL DEFAULT '0',
  `spic` varchar(255) NOT NULL DEFAULT '',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `origialPic` varchar(255) NOT NULL DEFAULT '',
  `smallPic` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_list` WRITE;
/*!40000 ALTER TABLE `ws_list` DISABLE KEYS */;

INSERT INTO `ws_list` (`id`, `isTopic`, `isImportant`, `channelId`, `title`, `author`, `source`, `counts`, `dtTime`, `editTime`, `tags`, `check`, `uname`, `summary`, `pic`, `recommend`, `mark`, `guid`, `isPic`, `spic`, `cguid`, `origialPic`, `smallPic`, `ordering`, `sign`)
VALUES
	(1,0,0,15,'乌石公司2012年度总结表彰大会暨','','',17,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'280851C191F579EB',0,'','','','',0,0),
	(2,0,0,16,'b','','',31,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'3FDBAC4158A7F63D',0,'','','','',0,0),
	(3,0,0,15,'2013年新春联欢会','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'B44A6537B96ADD2E',0,'','','','',0,0),
	(4,0,0,15,'2012年11月30日我司参加中国皮具时尚盛典开幕式','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'69F66C3590A9CCB5',0,'','','','',0,0),
	(5,0,0,15,'热烈庆祝乌石公司第二届运动会隆重举办','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'9D968622C9B5733D',0,'','','','',0,0),
	(6,0,0,15,'热烈庆祝乌石公司第二届运动会隆重举办','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'417D53D2676382C7',0,'','','','',0,0),
	(7,0,0,15,'2011年总结表彰大会暨2012新春联欢会乌石拉链门店形象升级','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'C8B62FF2EB5D4E4F',0,'','','','',0,0),
	(8,0,0,15,'2011年9月9日乌石中秋灯谜游园活动“奉献爱心 共创文明”','','',3,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'C612A0AC3F6AE9FD',0,'','','','',0,0),
	(9,0,0,15,'2011年5月2日乌石公司第一届运动会','','',16,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'5E4EDBEBD5028148',0,'','','','',0,0),
	(10,0,0,15,'2011年02月17日狮岭镇党委对我司进行节日问候','','',3,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'BAD65D9FF8E61862',0,'','','','',0,0),
	(11,0,0,15,'乌石公司2012年度总结表彰大会暨','','',3,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'D9274564D4AA513E',0,'','','','',0,0),
	(12,0,0,15,'2013年新春联欢会','','',2,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'EF38317A1347563D',0,'','','','',0,0),
	(13,0,0,15,'2012年11月30日我司参加中国皮具时尚盛典开幕式','','',5,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'B865B35B1B6558FA',0,'','','','',0,0),
	(14,0,0,15,'热烈庆祝乌石公司第二届运动会隆重举办','','',3,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'21995B3AF9EEBCA2',0,'','','','',0,0),
	(15,0,0,15,'2012乌石拉链厚积薄发 进军广州市场专注28年 用心沉淀乌石品质','','',7,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'5285D9424BB52EE7',0,'','','','',0,0),
	(16,0,0,15,'2011年总结表彰大会暨2012新春联欢会乌石拉链门店形象升级','','',9,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'E3BB6E17DAAF5BBF',0,'','','','',0,0),
	(17,0,0,15,'2011年9月9日乌石中秋灯谜游园活动“奉献爱心 共创文明”2011年5月2日乌石公司第一届运动会','','',1,'2013-12-05 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'B8E57DFF65CE6DAB',0,'','','','',0,0),
	(30,0,0,9,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(29,0,0,9,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(25,0,0,9,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(28,0,0,9,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(34,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(35,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(36,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(37,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(38,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(39,0,0,10,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(40,0,0,12,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(41,0,0,12,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(42,0,0,12,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(43,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(44,0,0,13,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(45,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(46,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(47,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(48,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(49,0,0,11,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(50,0,0,12,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(51,0,0,12,'乌石产品展示','乌石','',38,'2013-12-05 00:00:00','0000-00-00 00:00:00','d',0,'',NULL,'',0,0,'52E75AC4DE7806B9',0,'','','/upload/201312/20131206161256136.jpg','/upload/201312/s_2013120617451798.jpg',0,0),
	(53,0,0,20,'','','',4,'2013-12-06 00:00:00','0000-00-00 00:00:00','',0,'',NULL,'',0,0,'5825C6A01DF2BAC2',0,'','','','',0,0);

/*!40000 ALTER TABLE `ws_list` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_list_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_list_content`;

CREATE TABLE `ws_list_content` (
  `guid` varchar(16) NOT NULL DEFAULT '',
  `pageId` int(11) NOT NULL DEFAULT '0',
  `pageName` varchar(60) NOT NULL DEFAULT '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_list_content` WRITE;
/*!40000 ALTER TABLE `ws_list_content` DISABLE KEYS */;

INSERT INTO `ws_list_content` (`guid`, `pageId`, `pageName`, `content`)
VALUES
	('280851C191F579EB',0,'','乌石公司2012年度总结表彰大会暨'),
	('3FDBAC4158A7F63D',0,'','d'),
	('B44A6537B96ADD2E',0,'','2013年新春联欢会'),
	('69F66C3590A9CCB5',0,'','2012年11月30日我司参加中国皮具时尚盛典开幕式'),
	('9D968622C9B5733D',0,'','热烈庆祝乌石公司第二届运动会隆重举办'),
	('417D53D2676382C7',0,'','热烈庆祝乌石公司第二届运动会隆重举办'),
	('C8B62FF2EB5D4E4F',0,'','2011年总结表彰大会暨2012新春联欢会乌石拉链门店形象升级'),
	('C612A0AC3F6AE9FD',0,'','2011年9月9日乌石中秋灯谜游园活动“奉献爱心 共创文明”'),
	('5E4EDBEBD5028148',0,'','<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会2011年5月2日乌石公司第一届运动会</p>\r\n<p>&nbsp;</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>2011年5月2日乌石公司第一届运动会</p>\r\n<p>&nbsp;</p>'),
	('BAD65D9FF8E61862',0,'','2011年02月17日狮岭镇党委对我司进行节日问候'),
	('D9274564D4AA513E',0,'','乌石公司2012年度总结表彰大会暨'),
	('EF38317A1347563D',0,'','2013年新春联欢会'),
	('B865B35B1B6558FA',0,'','2012年11月30日我司参加中国皮具时尚盛典开幕式'),
	('21995B3AF9EEBCA2',0,'','热烈庆祝乌石公司第二届运动会隆重举办'),
	('5285D9424BB52EE7',0,'','2012乌石拉链厚积薄发 进军广州市场专注28年 用心沉淀乌石品质'),
	('E3BB6E17DAAF5BBF',0,'','2011年总结表彰大会暨2012新春联欢会乌石拉链门店形象升级'),
	('B8E57DFF65CE6DAB',0,'','2011年9月9日乌石中秋灯谜游园活动“奉献爱心 共创文明”2011年5月2日乌石公司第一届运动会'),
	('81D505A62E362BD9',0,'',''),
	('1A416EEEBA42A595',0,'','<p><span id=\"comp-paste-div-8875\">职位薪金：2500-3000/月<br />\r\n职位描述：与客户核对销售订单信息的准确性<br />\r\n跟进客户货品的物流到达情况，及时通知客户，保障客户正常签收货品<br />\r\n要求：   1、能熟练操作WORD,EXCEL等办公软件。<br />\r\n2、有责任心，细心和耐心<br />\r\n3、沟通表达能力好，声线优美</span></p>'),
	('5825C6A01DF2BAC2',0,'','<p>岗位职责：<br />\r\n1、及时、准确接听/转接电话，如需要，记录留言并及时转达；<br />\r\n2、接待来访客人并及时准确通知被访人员；<br />\r\n3、收发公司邮件、报刊、传真和物品，并做好登记管理以及转递工作；<br />\r\n4、负责快件收发、机票及火车票的准确预定；<br />\r\n5、负责前台区域的环境维护，保证设备安全及正常运转（包括复印机、空调及打卡机等）；<br />\r\n6、协助公司员工的复印、传真等工作；<br />\r\n7、完成上级主管交办的其它工作<br />\r\n任职资格：<br />\r\n1、女，形象好，气质佳，年龄22&mdash;35岁，身高1.60以上；<br />\r\n2、大专及以上学历，1年相关工作经验，文秘、行政管理等相关专业优先考虑；<br />\r\n3、较强的服务意识，熟练使用电脑办公软件；<br />\r\n4、具备良好的协调能力、沟通能力，负有责任心，性格活泼开朗，具有亲和力；<br />\r\n5、普通话准确流利；<br />\r\n6、具备一定商务礼仪知识。</p>');

/*!40000 ALTER TABLE `ws_list_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_menu`;

CREATE TABLE `ws_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(24) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `summary` varchar(200) NOT NULL DEFAULT '',
  `keys` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(14) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `link` varchar(200) NOT NULL DEFAULT '',
  `deep` int(11) NOT NULL DEFAULT '0',
  `parentId` int(11) NOT NULL DEFAULT '0',
  `params` text,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `isClaw` tinyint(1) NOT NULL DEFAULT '0',
  `template` varchar(40) NOT NULL DEFAULT '',
  `isfun` tinyint(4) NOT NULL DEFAULT '0',
  `isComment` tinyint(4) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `isHidden` tinyint(1) NOT NULL DEFAULT '0',
  `origialPic` varchar(200) NOT NULL DEFAULT '',
  `smallPic` varchar(200) NOT NULL DEFAULT '',
  `width` int(11) NOT NULL DEFAULT '130',
  `hight` int(11) NOT NULL DEFAULT '130',
  `isExternalLinks` tinyint(4) NOT NULL DEFAULT '0',
  `dtLanguage` varchar(10) NOT NULL DEFAULT 'cn',
  `redirectUrl` varchar(200) DEFAULT '',
  `related_common` varchar(20) NOT NULL DEFAULT 'common.php',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_menu` WRITE;
/*!40000 ALTER TABLE `ws_menu` DISABLE KEYS */;

INSERT INTO `ws_menu` (`id`, `menuName`, `title`, `summary`, `keys`, `type`, `ordering`, `link`, `deep`, `parentId`, `params`, `published`, `isClaw`, `template`, `isfun`, `isComment`, `level`, `isHidden`, `origialPic`, `smallPic`, `width`, `hight`, `isExternalLinks`, `dtLanguage`, `redirectUrl`, `related_common`)
VALUES
	(1,'profile','公司简介','','','article',1,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(4,'Industrypioneer','领航人物','','','article',2,'',1,1,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(5,'Honorarycertificate','荣誉证书','','','article',3,'',1,1,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(6,'missionvision','企业使命愿景','','','article',1,'',1,1,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(7,'bignews','公司大事记','','','article',4,'',1,1,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(8,'ProductCenter','产品中心','','','calllist',2,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(9,'Metal','金属拉链系列','','','list',1,'',1,8,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(10,'Nylon','尼龙拉链系列','','','list',2,'',1,8,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(11,'Resin','树脂拉链系列','','','list',3,'',1,8,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(12,'Hardwareheader','五金拉头系列','','','list',4,'',1,8,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(13,'Series','精品系列','','','list',5,'',1,8,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_3.php'),
	(14,'news','新闻中心','','','list',3,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_2.php'),
	(28,'','About us','','','article',0,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(15,'new','公司新闻','','','list',1,'',1,14,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_2.php'),
	(16,'Advisory','行业咨询','','','list',2,'',1,14,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_2.php'),
	(18,'jobs','人才资源','','','article',4,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(19,'Talentstrategy','人才战略','','','article',1,'',1,18,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(20,'hr','人才招聘','','','article',2,'',1,18,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(21,'Contac','联系我们','','','article',5,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(22,'Note','在线留言','','','article',1,'',1,21,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(23,'map','电子地图和地址','','','article',2,'',1,21,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(27,'show','公司简介','','','article',0,'',1,1,NULL,0,0,'',0,0,0,0,'','',130,130,0,'cn','','common_1.php'),
	(29,'AboutUs','Company profile ','','','article',0,'',1,28,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(30,'','Corporate mission','','','article',0,'',1,28,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(31,'','Leader','','','article',0,'',1,28,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(32,'','Certificate of honor','','','article',0,'',1,28,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(33,'','Great event','','','article',0,'',1,28,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(34,'','Product','','','list',0,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_3.php'),
	(35,'','Metal zipper','','','list',0,'',1,34,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_3.php'),
	(36,'','Nylon zipper','','','list',0,'',1,34,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_3.php'),
	(37,'','Resin zipper','','','list',0,'',1,34,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_3.php'),
	(38,'','Ironware zipper','','','list',0,'',1,34,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common.php'),
	(39,'','Collections','','','list',0,'',1,34,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_3.php'),
	(40,'','News','','','list',0,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_2.php'),
	(41,'','Company news','','','list',0,'',1,40,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_2.php'),
	(42,'','Industry information','','','list',0,'',1,40,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_2.php'),
	(43,'','Talent','','','article',0,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(44,'','Human resource strategy','','','article',0,'',1,43,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(45,'','Recruitment  information','','','article',0,'',1,43,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(46,'','Contact us','','','article',0,'',0,0,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(47,'','Online message','','','article',0,'',1,46,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php'),
	(48,'','Map','','','article',0,'',1,46,NULL,0,0,'',0,0,0,0,'','',130,130,0,'en','','common_1.php');

/*!40000 ALTER TABLE `ws_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_models_reg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_models_reg`;

CREATE TABLE `ws_models_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL DEFAULT '',
  `model_name` varchar(200) NOT NULL DEFAULT '',
  `config` text,
  `install` text,
  `unstall` text,
  `summary` text,
  `version` varchar(10) NOT NULL DEFAULT '',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_models_reg` WRITE;
/*!40000 ALTER TABLE `ws_models_reg` DISABLE KEYS */;

INSERT INTO `ws_models_reg` (`id`, `type`, `model_name`, `config`, `install`, `unstall`, `summary`, `version`, `readonly`)
VALUES
	(9,'guestbook','留言模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>留言模块</model_name>\r\n	<type>guestbook</type>\r\n	<summary>这是一个留言模块，主要通过收集、整理、回复客户留言，提高网站互动性，为网站带来活力和商机。</summary>\r\n	<version>70510</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/guestbook/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/guestbook/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_guestbook.php</param>\r\n		<param name=\"destination\">admini/controllers/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_guestbook.php</param>\r\n		<param name=\"destination\">admini/models/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/guestbook/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/guestbook/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n	<param name=\"source\">index_guestbook.php</param>\r\n	<param name=\"destination\">content/index/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">CREATE TABLE `dt_guestbook` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `name` varchar(30) NOT NULL default \'\',\r\n	  `email` varchar(60) NOT NULL default \'\',\r\n	  `homepage` varchar(60) NOT NULL default \'\',\r\n	  `qq` varchar(15) NOT NULL default \'\',\r\n	  `ip` varchar(40) NOT NULL default \'\',\r\n	  `isPublic` int(11) NOT NULL default \'0\',\r\n	  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n	  `content` text NOT NULL,\r\n	  `content1` text NOT NULL,\r\n	  `channelId` int(11) NOT NULL default \'0\',\r\n	  `telephone` varchar(16) NOT NULL default \'\',\r\n	  `company` varchar(60) NOT NULL,\r\n	  `auditing` tinyint(4) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/guestbook/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/guestbook</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}guestbook` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'guestbook\'</param>\r\n	</cmd>\r\n</deepthroat>','这是一个留言模块，主要通过收集、整理、回复客户留言，提高网站互动性，为网站带来活力和商机。','70510',0),
	(10,'calllist','列表调用模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>列表调用模块</model_name>\r\n	<type>calllist</type>\r\n	<summary>这是一个列表调用模块，用来调用新闻频道或栏目。</summary>\r\n	<version>70905</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_index.php</param>\r\n<param name=\"destination\">admini/views/calllist/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_controllers_calllist.php</param>\r\n<param name=\"destination\">admini/controllers/calllist.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_models_calllist.php</param>\r\n<param name=\"destination\">admini/models/calllist.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">content_index.php</param>\r\n<param name=\"destination\">content/calllist/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_index.php</param>\r\n<param name=\"destination\">content/calllist/parts_index.php</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">CREATE TABLE `{TB_PREFIX}calllist` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `channelId` int(11) NOT NULL,\r\n  `callId` varchar(400) character set utf8 NOT NULL,\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n</cmd>\r\n</deepthroat>\r\n\r\n\r\n','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/views/calllist/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/controllers/calllist.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/models/calllist.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/calllist/</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DROP TABLE `{TB_PREFIX}calllist` </param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'calllist\'</param>\r\n</cmd>\r\n</deepthroat>','这是一个列表调用模块，用来调用新闻频道或栏目。','70905',0),
	(8,'video','视频模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>视频模块</model_name>\r\n	<type>video</type>\r\n	<summary>这是一个视频模块，可以展示例如企业形象影片之类的视频。</summary>\r\n	<version>70507</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_create.php</param>\r\n<param name=\"destination\">admini/views/video/create.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_index.php</param>\r\n<param name=\"destination\">admini/views/video/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_edit.php</param>\r\n<param name=\"destination\">admini/views/video/edit.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_controllers_video.php</param>\r\n<param name=\"destination\">admini/controllers/video.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_models_video.php</param>\r\n<param name=\"destination\">admini/models/video.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">content_index.php</param>\r\n<param name=\"destination\">content/video/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_index.php</param>\r\n<param name=\"destination\">content/video/parts_index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_view.php</param>\r\n<param name=\"destination\">content/video/parts_view.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">index_video.php</param>\r\n<param name=\"destination\">content/index/video.php</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">CREATE TABLE `{TB_PREFIX}video` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `channelId` int(11) NOT NULL default \'0\',\r\n  `filePath` varchar(200) NOT NULL,\r\n  `fileSize` varchar(50) default NULL,\r\n  `title` varchar(150) NOT NULL,\r\n  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n  `tags` varchar(200) NOT NULL,\r\n  `description` text NOT NULL,\r\n  `picture` varchar(200) NOT NULL,\r\n  `counts` int(11) NOT NULL default \'0\',\r\n  `cguid` varchar(16) NOT NULL,\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;</param>\r\n</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/views/video/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/controllers/video.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/models/video.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/video/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/index/video.php</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DROP TABLE `{TB_PREFIX}video` </param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'video\'</param>\r\n</cmd>\r\n</deepthroat>','这是一个视频模块，可以展示例如企业形象影片之类的视频。','70507',0),
	(7,'order','订单模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>订单模块</model_name>\r\n	<type>order</type>\r\n	<summary>这是一个订单模块，用于产生一个客户订单。</summary>\r\n	<version>70511</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_edit.php</param>\r\n<param name=\"destination\">admini/views/order/edit.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_index.php</param>\r\n<param name=\"destination\">admini/views/order/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_controllers_order.php</param>\r\n<param name=\"destination\">admini/controllers/order.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_models_order.php</param>\r\n<param name=\"destination\">admini/models/order.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">content_index.php</param>\r\n<param name=\"destination\">content/order/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_index.php</param>\r\n<param name=\"destination\">content/order/parts_index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_create.php</param>\r\n<param name=\"destination\">content/order/parts_create.php</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">CREATE TABLE `{TB_PREFIX}order` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `productName` varchar(100) default NULL,\r\n  `productSN` varchar(100) default NULL,\r\n  `deliveryTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n  `transports` varchar(100) default NULL,\r\n  `linkman` varchar(100) default NULL,\r\n  `unit` varchar(100) default NULL,\r\n  `address` varchar(100) default NULL,\r\n  `phone` varchar(100) default NULL,\r\n  `email` varchar(100) default NULL,\r\n  `remark` text,\r\n  `handling` int(11) NOT NULL default \'0\',\r\n  `result` text,\r\n  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n  `channelId` int(11) NOT NULL default \'0\',\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/views/order/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/controllers/order.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/models/order.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/order/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/index/index_order_0.php</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DROP TABLE `{TB_PREFIX}order` </param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'order\'</param>\r\n</cmd>\r\n</deepthroat>','这是一个订单模块，用于产生一个客户订单。','70511',0),
	(6,'jobs','招聘模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>招聘模块</model_name>\r\n	<type>jobs</type>\r\n	<summary>招聘模块，用于企业发布招聘信息、遴选人才。</summary>\r\n	<version>70510</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create.php</param>\r\n		<param name=\"destination\">admini/views/jobs/create.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/jobs/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/jobs/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_viewresume.php</param>\r\n		<param name=\"destination\">admini/views/jobs/viewresume.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_viewresumes.php</param>\r\n		<param name=\"destination\">admini/views/jobs/viewresumes.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_jobs.php</param>\r\n		<param name=\"destination\">admini/controllers/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_jobs.php</param>\r\n		<param name=\"destination\">admini/models/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/jobs/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/jobs/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_send.php</param>\r\n		<param name=\"destination\">content/jobs/parts_send.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_jobs.php</param>\r\n		<param name=\"destination\">content/index/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_jobs_0.php</param>\r\n		<param name=\"destination\">content/index/index_jobs_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\"> CREATE TABLE `{TB_PREFIX}jobs` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL,\r\n	  `jobName` varchar(200) NOT NULL,\r\n	  `jobKind` varchar(100) NOT NULL,\r\n	  `requireNum` int(11) NOT NULL,\r\n	  `experience` varchar(50) NOT NULL,\r\n	  `address` varchar(200) NOT NULL,\r\n	  `age` varchar(100) NOT NULL,\r\n	  `height` varchar(50) NOT NULL,\r\n	  `languageSkill` varchar(100) NOT NULL,\r\n	  `lastTime` varchar(50) NOT NULL,\r\n	  `salary` varchar(50) NOT NULL,\r\n	  `educational` varchar(50) NOT NULL,\r\n	  `isHouse` varchar(50) NOT NULL,\r\n	  `sex` varchar(4) NOT NULL,\r\n	  `computerLevel` varchar(100) NOT NULL,\r\n	  `summary` text NOT NULL,\r\n	  `telphone` varchar(50) NOT NULL,\r\n	  `email` varchar(100) NOT NULL,\r\n	  `dtTime` datetime NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n		</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/jobs/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/jobs/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/jobs.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/index_jobs_0.php</param>\r\n	</cmd>	\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}jobs` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'jobs\'</param>\r\n	</cmd>\r\n</deepthroat>','招聘模块，用于企业发布招聘信息、遴选人才。','70510',0),
	(5,'picture','图片模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>图片模块</model_name>\r\n	<type>picture</type>\r\n	<summary>这是一个图片模块，可以展示企业形象、发布图片新闻等。</summary>\r\n	<version>70510</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create.php</param>\r\n		<param name=\"destination\">admini/views/picture/create.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/picture/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/picture/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_picture.php</param>\r\n		<param name=\"destination\">admini/controllers/picture.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_picture.php</param>\r\n		<param name=\"destination\">admini/models/picture.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/picture/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/picture/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_view.php</param>\r\n		<param name=\"destination\">content/picture/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_picture_0.php</param>\r\n		<param name=\"destination\">content/index/index_picture_0.php</param>\r\n	</cmd>\r\n<cmd type=\"sql\">\r\n		<param name=\"sql\">CREATE TABLE `{TB_PREFIX}picture` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default \'0\',\r\n	  `title` varchar(60) NOT NULL default \'\',\r\n	  `picture` varchar(255) NOT NULL,\r\n	  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n	  `spicture` varchar(255) NOT NULL,\r\n	  `tags` varchar(60) NOT NULL default \'\',\r\n	  `description` text NOT NULL,\r\n	  `isTopic` int(11) NOT NULL,\r\n	  `isImportant` int(11) NOT NULL,\r\n	  `counts` int(11) NOT NULL,\r\n	  `lpicture` varchar(255) NOT NULL,\r\n	  `uid` int(11) NOT NULL,\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n		</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/picture/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/picture.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/picture.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/picture/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/index_picture_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}picture` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'picture\'</param>\r\n	</cmd>\r\n</deepthroat>','这是一个图片模块，可以展示企业形象、发布图片新闻等。','70510',0),
	(4,'download','下载模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>下载模块</model_name>\r\n	<type>download</type>\r\n	<summary>这是一个下载模块，可以用户提供软件、文档资料的下载。</summary>\r\n	<version>70511</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create.php</param>\r\n		<param name=\"destination\">admini/views/download/create.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/download/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/download/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_download.php</param>\r\n		<param name=\"destination\">admini/controllers/download.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_download.php</param>\r\n		<param name=\"destination\">admini/models/download.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/download/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/download/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_view.php</param>\r\n		<param name=\"destination\">content/download/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_download_0.php</param>\r\n		<param name=\"destination\">content/index/index_download_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n	<param name=\"sql\">CREATE TABLE `{TB_PREFIX}download` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default \'0\',\r\n	  `softwareName` varchar(200) NOT NULL default \'NOT NULL\',\r\n	  `softwareSize` varchar(200) default NULL,\r\n	  `language` varchar(40) default NULL,\r\n	  `classification` varchar(200) default NULL,\r\n	  `platform` varchar(200) default NULL,\r\n	  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n	  `introduce` text,\r\n	  `filePath` varchar(200) NOT NULL default \'NOT NULL\',\r\n	  `counts` int(11) NOT NULL default \'0\',\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/download/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/download.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/download.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/download/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/index_download_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}download` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'download\'</param>\r\n	</cmd>\r\n</deepthroat>','这是一个下载模块，可以用户提供软件、文档资料的下载。','70511',0),
	(2,'list','文章列表模块','','','','','70506',1),
	(3,'product','产品模块','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>产品模块</model_name>\r\n	<type>product</type>\r\n	<summary>产品模块，用于展示企业产品信息。</summary>\r\n	<version>70510</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create.php</param>\r\n		<param name=\"destination\">admini/views/product/create.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/product/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_createcategory.php</param>\r\n		<param name=\"destination\">admini/views/product/createcategory.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_editcategory.php</param>\r\n		<param name=\"destination\">admini/views/product/editcategory.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/product/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_product.php</param>\r\n		<param name=\"destination\">admini/controllers/product.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_product.php</param>\r\n		<param name=\"destination\">admini/models/product.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_product_category.php</param>\r\n		<param name=\"destination\">admini/models/product_category.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/product/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/product/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_view.php</param>\r\n		<param name=\"destination\">content/product/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_product.php</param>\r\n		<param name=\"destination\">content/index/product.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_product_0.php</param>\r\n		<param name=\"destination\">content/index/index_product_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">CREATE TABLE `{TB_PREFIX}product` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `name` varchar(200) NOT NULL,\r\n	  `sn` varchar(100) NOT NULL,\r\n	  `spec` varchar(100) NOT NULL,\r\n	  `dtTime` datetime NOT NULL,\r\n	  `sellingPrice` decimal(10,0) NOT NULL,\r\n	  `preferPrice` decimal(10,0) NOT NULL,\r\n	  `summary` varchar(200) NOT NULL,\r\n	  `content` text NOT NULL,\r\n	  `origialPic` varchar(255) NOT NULL,\r\n	  `middlePic` varchar(255) NOT NULL,\r\n	  `smallPic` varchar(255) NOT NULL,\r\n	  `categoryId` int(11) NOT NULL,\r\n	  `counts` int(11) NOT NULL,\r\n	  `ordering` int(11) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">\r\n		CREATE TABLE `{TB_PREFIX}product_category` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `menuName` varchar(24) NOT NULL default \'\',\r\n	  `title` varchar(50) NOT NULL default \'\',\r\n	  `summary` varchar(200) NOT NULL default \'\',\r\n	  `keys` varchar(50) NOT NULL default \'\',\r\n	  `type` varchar(14) NOT NULL default \'\',\r\n	  `ordering` int(11) NOT NULL default \'0\',\r\n	  `link` varchar(255) NOT NULL,\r\n	  `deep` int(11) NOT NULL default \'0\',\r\n	  `channelId` int(11) NOT NULL default \'0\',\r\n	  `params` text,\r\n	  `published` tinyint(1) NOT NULL default \'0\',\r\n	  `isClaw` tinyint(1) NOT NULL,\r\n	  `template` varchar(40) NOT NULL,\r\n	  `isfun` tinyint(4) NOT NULL,\r\n	  `isComment` tinyint(4) NOT NULL,\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n	</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/product/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/product.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/product_category.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/product.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/product/</param>\r\n	</cmd>\r\n		<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/product.php</param>\r\n	</cmd>\r\n		<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/index_product_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}product` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}product_category` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'product\'</param>\r\n	</cmd>\r\n</deepthroat>','产品模块，用于展示企业产品信息。','70510',0),
	(1,'article','图文模块','','','','','70506',1),
	(11,'solutions','解决方案模块','','','','','70925',0),
	(12,'webmap','网站地图','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>网站地图</model_name>\r\n	<type>webmap</type>\r\n	<summary>这是一个网站地图模块，用来展示网站频道或栏目。</summary>\r\n	<version>80905</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_views_index.php</param>\r\n<param name=\"destination\">admini/views/webmap/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_controllers_webmap.php</param>\r\n<param name=\"destination\">admini/controllers/webmap.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">admini_models_webmap.php</param>\r\n<param name=\"destination\">admini/models/webmap.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">content_index.php</param>\r\n<param name=\"destination\">content/webmap/index.php</param>\r\n</cmd>\r\n<cmd type=\"copy\">\r\n<param name=\"source\">parts_index.php</param>\r\n<param name=\"destination\">content/webmap/parts_index.php</param>\r\n</cmd>\r\n</deepthroat>\r\n\r\n\r\n','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/views/webmap/</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/controllers/webmap.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">admini/models/webmap.php</param>\r\n</cmd>\r\n<cmd type=\"unlink\">\r\n<param name=\"file\">content/webmap/</param>\r\n</cmd>\r\n<cmd type=\"sql\">\r\n<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'webmap\'</param>\r\n</cmd>\r\n</deepthroat>','这是一个网站地图模块，用来展示网站频道或栏目。','80905',0),
	(13,'poll','投票系统','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>投票系统</model_name>\r\n	<type>poll</type>\r\n	<summary>这是一个投票系统，用来与用户进行互动，了解用户心理。</summary>\r\n	<version>81124</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/poll/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create_title.php</param>\r\n		<param name=\"destination\">admini/views/poll/create_title.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit_title.php</param>\r\n		<param name=\"destination\">admini/views/poll/edit_title.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create_choice.php</param>\r\n		<param name=\"destination\">admini/views/poll/create_choice.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit_choice.php</param>\r\n		<param name=\"destination\">admini/views/poll/edit_choice.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_poll.php</param>\r\n		<param name=\"destination\">admini/controllers/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_poll.php</param>\r\n		<param name=\"destination\">admini/models/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_poll_category.php</param>\r\n		<param name=\"destination\">admini/models/poll_category.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/poll/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/poll/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_view.php</param>\r\n		<param name=\"destination\">content/poll/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_poll.php</param>\r\n		<param name=\"destination\">content/index/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_poll_0.php</param>\r\n		<param name=\"destination\">content/index/index_poll_0.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">CREATE TABLE `{TB_PREFIX}poll` (\r\n		`id` int(11) NOT NULL auto_increment,\r\n		`channelId` int(11) NOT NULL default \'0\',\r\n		`choice` varchar(255) NOT NULL,\r\n		`categoryId` int(11) NOT NULL default \'0\',\r\n		`isdefault` set(\'a\',\'b\') NOT NULL default \'a\',\r\n		`ordering` int(11) NOT NULL default \'0\',\r\n		`num` int(11) NOT NULL default \'1\',\r\n		PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">\r\n		CREATE TABLE `{TB_PREFIX}poll_category` (\r\n		`id` int(11) NOT NULL auto_increment,\r\n		`title` varchar(200) NOT NULL default \'\',\r\n		`choice` set(\'a\',\'b\') default \'a\',\r\n		`client_ip` longtext,\r\n		`channelId` int(11) NOT NULL default \'0\',\r\n		`dtTime` date NOT NULL default \'0000-00-00\',\r\n		`ordering` int(11) NOT NULL default \'0\',\r\n		PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n	</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/poll/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/poll_category.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/poll/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/poll.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/index_poll_0.php</param>\r\n	</cmd>	\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}poll` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'poll\'</param>\r\n	</cmd>\r\n</deepthroat>','这是一个投票系统，用来与用户进行互动，了解用户心理。','81124',0),
	(14,'linkers','友情链接','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<config>\r\n	<model_name>友情链接</model_name>\r\n	<type>linkers</type>\r\n	<summary>这是一个友情链接模块，可以添加网站的友情链接。</summary>\r\n	<version>80404</version>\r\n</config>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_create.php</param>\r\n		<param name=\"destination\">admini/views/linkers/create.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_edit.php</param>\r\n		<param name=\"destination\">admini/views/linkers/edit.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_views_index.php</param>\r\n		<param name=\"destination\">admini/views/linkers/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_controllers_linkers.php</param>\r\n		<param name=\"destination\">admini/controllers/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">admini_models_linkers.php</param>\r\n		<param name=\"destination\">admini/models/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">content_index.php</param>\r\n		<param name=\"destination\">content/linkers/index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">parts_index.php</param>\r\n		<param name=\"destination\">content/linkers/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type=\"copy\">\r\n		<param name=\"source\">index_linkers.php</param>\r\n		<param name=\"destination\">content/index/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n	<param name=\"sql\">CREATE TABLE `{TB_PREFIX}linkers` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default \'0\',\r\n	  `picture` varchar(255) NOT NULL,\r\n	  `linkerName` varchar(100) NOT NULL default \'\',\r\n	  `linkAddress` varchar(150) NOT NULL,\r\n	  `summary` text NOT NULL,\r\n	  `dtTime` datetime NOT NULL default \'0000-00-00 00:00:00\',\r\n	  `indexPicture` varchar(255) NOT NULL,\r\n	  `counts` int(11) NOT NULL default \'200\',\r\n	  `smallPic` varchar(255) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>','<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<deepthroat>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/views/linkers/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/controllers/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">admini/models/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/linkers/</param>\r\n	</cmd>\r\n	<cmd type=\"unlink\">\r\n		<param name=\"file\">content/index/linkers.php</param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DROP TABLE `{TB_PREFIX}linkers` </param>\r\n	</cmd>\r\n	<cmd type=\"sql\">\r\n		<param name=\"sql\">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = \'linkers\'</param>\r\n	</cmd>\r\n</deepthroat>','这是一个友情链接模块，可以添加网站的友情链接。','80404',0);

/*!40000 ALTER TABLE `ws_models_reg` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_order`;

CREATE TABLE `ws_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL DEFAULT '',
  `productSN` varchar(100) NOT NULL DEFAULT '',
  `deliveryTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `transports` varchar(100) NOT NULL DEFAULT '',
  `linkman` varchar(100) NOT NULL DEFAULT '',
  `unit` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `remark` text,
  `handling` int(11) NOT NULL DEFAULT '0',
  `result` text,
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `channelId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_picture
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_picture`;

CREATE TABLE `ws_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `title` varchar(60) NOT NULL DEFAULT '',
  `middlePic` varchar(255) NOT NULL DEFAULT '',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `smallPic` varchar(255) NOT NULL DEFAULT '',
  `tags` varchar(60) NOT NULL DEFAULT '',
  `description` text,
  `isTopic` int(11) NOT NULL DEFAULT '0',
  `isImportant` int(11) NOT NULL DEFAULT '0',
  `counts` int(11) NOT NULL DEFAULT '0',
  `origialPic` varchar(255) NOT NULL DEFAULT '',
  `uid` int(11) NOT NULL DEFAULT '0',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `summary` text,
  `indexPicture` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_poll
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_poll`;

CREATE TABLE `ws_poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `choice` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL DEFAULT '0',
  `isdefault` set('a','b') NOT NULL DEFAULT 'a',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_poll_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_poll_category`;

CREATE TABLE `ws_poll_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `choice` set('a','b') DEFAULT 'a',
  `client_ip` longtext,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `dtTime` date NOT NULL DEFAULT '0000-00-00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_product`;

CREATE TABLE `ws_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL DEFAULT '',
  `sn` varchar(100) NOT NULL DEFAULT '',
  `spec` varchar(100) NOT NULL DEFAULT '',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sellingPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `preferPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `summary` varchar(200) NOT NULL DEFAULT '',
  `content` text,
  `origialPic` varchar(255) NOT NULL DEFAULT '',
  `middlePic` varchar(255) NOT NULL DEFAULT '',
  `smallPic` varchar(255) NOT NULL DEFAULT '',
  `indexPicture` varchar(255) NOT NULL DEFAULT '',
  `categoryId` int(11) NOT NULL DEFAULT '0',
  `counts` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_product_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_product_category`;

CREATE TABLE `ws_product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(24) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `summary` varchar(200) NOT NULL DEFAULT '',
  `keys` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(14) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `deep` int(11) NOT NULL DEFAULT '0',
  `channelId` int(11) NOT NULL DEFAULT '0',
  `params` text,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `isClaw` tinyint(1) NOT NULL DEFAULT '0',
  `template` varchar(40) NOT NULL DEFAULT '',
  `isfun` tinyint(4) NOT NULL DEFAULT '0',
  `isComment` tinyint(4) NOT NULL DEFAULT '0',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `parentId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_resume
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_resume`;

CREATE TABLE `ws_resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) NOT NULL DEFAULT '0',
  `channelId` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `sex` varchar(4) NOT NULL DEFAULT '',
  `birthday` varchar(50) NOT NULL DEFAULT '',
  `nation` varchar(50) NOT NULL DEFAULT '',
  `isMarried` varchar(50) NOT NULL DEFAULT '',
  `nowJob` varchar(100) NOT NULL DEFAULT '',
  `nowAddress` varchar(200) NOT NULL DEFAULT '',
  `residence` varchar(200) NOT NULL DEFAULT '',
  `educational` varchar(100) NOT NULL DEFAULT '',
  `height` varchar(50) NOT NULL DEFAULT '',
  `finishSchool` varchar(100) NOT NULL DEFAULT '',
  `finishTime` varchar(50) NOT NULL DEFAULT '',
  `speciality` varchar(100) NOT NULL DEFAULT '',
  `experience` varchar(100) NOT NULL DEFAULT '',
  `selfAppreciation` text,
  `languageSkill` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `telphone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `resume` text,
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_solutions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_solutions`;

CREATE TABLE `ws_solutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `title` varchar(60) NOT NULL DEFAULT '',
  `subheading` varchar(200) NOT NULL DEFAULT '',
  `application` varchar(200) NOT NULL DEFAULT '',
  `types` varchar(160) NOT NULL DEFAULT '',
  `keyword` varchar(100) NOT NULL DEFAULT '',
  `author` varchar(30) NOT NULL DEFAULT '',
  `counts` int(11) NOT NULL DEFAULT '0',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tags` varchar(60) NOT NULL DEFAULT '',
  `check` tinyint(4) NOT NULL DEFAULT '0',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `guid` varchar(16) NOT NULL DEFAULT '',
  `isPic` int(11) NOT NULL DEFAULT '0',
  `spic` varchar(255) NOT NULL DEFAULT '',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `origialPic` varchar(255) NOT NULL DEFAULT '',
  `smallPic` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_solutions_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_solutions_content`;

CREATE TABLE `ws_solutions_content` (
  `guid` varchar(16) NOT NULL DEFAULT '0',
  `pageId` int(11) NOT NULL DEFAULT '0',
  `pageName` varchar(60) NOT NULL DEFAULT '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table ws_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_user`;

CREATE TABLE `ws_user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `username` varchar(16) NOT NULL DEFAULT '',
  `pwd` varchar(40) NOT NULL DEFAULT '',
  `role` int(2) NOT NULL DEFAULT '0',
  `right` varchar(32) NOT NULL DEFAULT '''0''',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `auditing` tinyint(4) NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `detail1` varchar(255) NOT NULL DEFAULT '',
  `detail2` varchar(255) NOT NULL DEFAULT '',
  `detail3` varchar(255) NOT NULL DEFAULT '',
  `detail4` varchar(255) NOT NULL DEFAULT '',
  `detail5` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ws_user` WRITE;
/*!40000 ALTER TABLE `ws_user` DISABLE KEYS */;

INSERT INTO `ws_user` (`id`, `nickname`, `email`, `username`, `pwd`, `role`, `right`, `dtTime`, `auditing`, `ip`, `detail1`, `detail2`, `detail3`, `detail4`, `detail5`)
VALUES
	(1,'管理员','694538309@qq.com','admin','f8d01536f77c97e0768c4b0ca13d5ced40df9993',9,'\'0\'','2013-11-30 14:52:58',1,'192.168.1.158','','','','','');

/*!40000 ALTER TABLE `ws_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ws_video
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ws_video`;

CREATE TABLE `ws_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelId` int(11) NOT NULL DEFAULT '0',
  `filePath` varchar(200) NOT NULL DEFAULT '',
  `fileSize` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(150) NOT NULL DEFAULT '',
  `dtTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tags` varchar(200) NOT NULL DEFAULT '',
  `description` text,
  `picture` varchar(200) NOT NULL DEFAULT '',
  `counts` int(11) NOT NULL DEFAULT '0',
  `cguid` varchar(16) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
