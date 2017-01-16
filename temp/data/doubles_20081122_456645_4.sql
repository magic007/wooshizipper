#Realure.cn Created
# --------------------------------------------------------



DROP TABLE IF EXISTS dt_order;
CREATE TABLE `dt_order` (
  `id` int(11) NOT NULL auto_increment,
  `productName` varchar(100) NOT NULL default '',
  `productSN` varchar(100) NOT NULL default '',
  `deliveryTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `transports` varchar(100) NOT NULL default '',
  `linkman` varchar(100) NOT NULL default '',
  `unit` varchar(100) NOT NULL default '',
  `address` varchar(100) NOT NULL default '',
  `phone` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `remark` text,
  `handling` int(11) NOT NULL default '0',
  `result` text,
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `channelId` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_picture;
CREATE TABLE `dt_picture` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `title` varchar(60) NOT NULL default '',
  `middlePic` varchar(255) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `smallPic` varchar(255) NOT NULL default '',
  `tags` varchar(60) NOT NULL default '',
  `description` text,
  `isTopic` int(11) NOT NULL default '0',
  `isImportant` int(11) NOT NULL default '0',
  `counts` int(11) NOT NULL default '0',
  `origialPic` varchar(255) NOT NULL default '',
  `uid` int(11) NOT NULL default '0',
  `cguid` varchar(16) NOT NULL default '',
  `summary` text,
  `indexPicture` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_product;
CREATE TABLE `dt_product` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `name` varchar(200) NOT NULL default '',
  `sn` varchar(100) NOT NULL default '',
  `spec` varchar(100) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `sellingPrice` decimal(10,2) NOT NULL default '0.00',
  `preferPrice` decimal(10,2) NOT NULL default '0.00',
  `summary` varchar(200) NOT NULL default '',
  `content` text,
  `origialPic` varchar(255) NOT NULL default '',
  `middlePic` varchar(255) NOT NULL default '',
  `smallPic` varchar(255) NOT NULL default '',
  `indexPicture` varchar(255) NOT NULL default '',
  `categoryId` int(11) NOT NULL default '0',
  `counts` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_product VALUES('5','3','多普达S1','多普达S1','智能手机','2008-03-19 14:54:12','3500.00','3199.00','白色版的多普达S1由于其钢琴烤漆的机身，给人感觉高档中不失活泼时尚。十分适合现在的年轻人使用。','<p><font id=\"Zoom\">多普达S1内部拥有一颗主频为201MHz的TI OMAP 850处理器。运行频率201MHz，64MB DDR RAM，128MB ROM的内存配备，用户还可通过MicroSD卡扩展。S1采用的TouchFLO技术是此款产品最大的亮点，TouchFLO技术的特点是用手指替代了 手写笔，用户只需用手指在屏幕上轻轻滑动便可完成各种操作，同样TouchFLO技术也支持手写笔功能，机器本身能自动区分手写笔与手指。</font></p>','/upload/200803/2008031914541210.jpg','/upload/200803/m_2008031914541210.jpg','/upload/200803/s_2008031914541210.jpg','/upload/200803/i_2008031914541210.jpg','2','25','0','0');
INSERT INTO dt_product VALUES('6','3','草莓BB8700g','BB8700g','智能手机','2008-03-19 14:58:38','3600.00','3200.00','莓手机的配置也一向是注意键盘操盘与屏幕显示。这款8700g也是一样，配备了横屏QVGA的屏幕以及QWERT的键盘。同样，定位于商务应用的这款黑莓也一如既往的没有配备摄像头以及存储卡插槽。','<p>整个8700g的设计就像一把盾牌，连空格键都是这样。键盘上没有像多普达或诺基亚的横屏机器的摇杆键，这也可以说是黑莓8700g的一大特色。在用惯了 摇杆导航键的其他手机后，你一定会对没有这个设计的黑莓感觉大不适应。但绝对值得一提的是，黑莓的操作系统可以让她的键盘得到最大的功能发挥，你可以在很 多地方（比如信息，电话，主界面等等）使用很多的快捷键，从而更方便快捷的使用这款手机。毫不夸张地说，这款手机的快捷键设计的非常合理与便捷。</p>','/upload/200803/20080319145838251.jpg','/upload/200803/m_20080319145838251.jpg','/upload/200803/s_20080319145838251.jpg','/upload/200803/i_20080319145838251.jpg','2','29','7','0');
INSERT INTO dt_product VALUES('4','3','康佳KJ-25','KJ-25','KJ-25','2008-03-19 14:43:12','12000.00','9999.00','图像效果比较规矩，对比度还是很不错的，色彩艳丽而不夸张','<p>这款46英寸液晶采用三星屏，泰鼎芯片，和索尼BRAVIA ENGINE同样的技术。图像效果比较规矩，对比度还是很不错的，色彩艳丽而不夸张，具有HDMI接口和VGA接口，但是网友反应音质较差，音响噪音过大。最低可达9999元。</p>','/upload/200803/20080319144251460.jpg','/upload/200803/m_20080319144251460.jpg','/upload/200803/s_20080319144251460.jpg','/upload/200803/i_20080319144251460.jpg','1','28','4','0');
INSERT INTO dt_product VALUES('3','3','飞利浦','HJK80','GYU-25','2008-03-19 14:41:48','15000.00','12600.00','采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现','<p>属于飞利浦高端产品，采用LPL屏，具有100Hz技术和流光溢彩2代效果，装饰效果好，流光溢彩采用的是LED灯管。图像对比度、通透性都非常出色，色彩表现极佳，毫无夸张</p>','/upload/200803/20080319144148185.jpg','/upload/200803/m_20080319144148185.jpg','/upload/200803/s_20080319144148185.jpg','/upload/200803/i_20080319144148185.jpg','1','37','5','0');
INSERT INTO dt_product VALUES('2','3','飞利浦N25','DHJ-25','HIPLK','2008-03-19 14:40:31','9800.00','8500.00','色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实','<p>这是夏新的一款40英寸液晶电视，采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。具有2组HDMI，1组VGA接口。</p>','/upload/200803/20080319144031478.jpg','/upload/200803/m_20080319144031478.jpg','/upload/200803/s_20080319144031478.jpg','/upload/200803/i_20080319144031478.jpg','1','24','2','0');
INSERT INTO dt_product VALUES('1','3','夏新','ST-88HT','MHJK','2008-03-19 14:39:25','12000.00','10500.00','色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。','<p>这是夏新的一款40英寸液晶电视，采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。具有2组HDMI，1组VGA接口。</p>','/upload/200803/20080319143925848.jpg','/upload/200803/m_20080319143925848.jpg','/upload/200803/s_20080319143925848.jpg','/upload/200803/i_20080319143925848.jpg','1','24','0','0');
INSERT INTO dt_product VALUES('7','12','Amoi','ST-88HT','MHJK','2008-03-19 17:30:59','12000.00','10500.00','Colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true.','<div dir=\"ltr\" id=\"result_box\">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>','/upload/200803/20080319173059209.jpg','/upload/200803/m_20080319173059209.jpg','/upload/200803/s_20080319173059209.jpg','/upload/200803/i_20080319173059209.jpg','3','23','0','0');
INSERT INTO dt_product VALUES('8','12','Philips N25','DHJ-25','HIPLK','2008-03-19 17:32:57','9800.00','8500.00','Colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true','<div dir=\"ltr\" id=\"result_box\">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>','/upload/200803/20080319173257867.jpg','/upload/200803/m_20080319173257867.jpg','/upload/200803/s_20080319173257867.jpg','/upload/200803/i_20080319173257867.jpg','3','23','0','0');
INSERT INTO dt_product VALUES('9','12','Philips','HJK80','GYU-25','2008-03-19 17:35:06','15000.00','12600.00','Using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance.','<div dir=\"ltr\" id=\"result_box\">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>','/upload/200803/20080319173506675.jpg','/upload/200803/m_20080319173506675.jpg','/upload/200803/s_20080319173506675.jpg','/upload/200803/i_20080319173506675.jpg','3','27','0','0');
INSERT INTO dt_product VALUES('10','12','Konka KJ-25','Konka KJ-25','KJ-25','2008-03-19 17:36:50','12000.00','9999.00','Image Comparison rules, the contrast is very good, without exaggeration colourful','<div dir=\"ltr\" id=\"result_box\">The Samsung 46-inch LCD screen, and Thai tripod chips, and Sony BRAVIA ENGINE same technology. Image Comparison rules, the contrast is very good, colourful without exaggeration, HDMI interface and a VGA interface, but users respond poor sound quality, sound too much noise. As low as 9,999 yuan.</div>','/upload/200803/20080319173650420.jpg','/upload/200803/m_20080319173650420.jpg','/upload/200803/s_20080319173650420.jpg','/upload/200803/i_20080319173650420.jpg','3','26','0','0');
INSERT INTO dt_product VALUES('11','12','Dopod S1','Dopod S1','smart phones ','2008-03-19 17:38:04','3500.00','3199.00','white version of the piano because of its Dopod S1 paint the fuselage, that feeling of luxury without losing in lively fashion. Very suitable for the young people now use.','<p>Dopod S1 has an internal frequency of 201 MHz TI OMAP 850 processor. Operating frequency of 201 MHz, 64MB DDR RAM, 128MB ROM equipped with memory, and users will be able to extend MicroSD card. S1 TouchFLO used new product technology is the biggest bright spot, TouchFLO technology is characterized by a finger replaces the pen, users only need a finger sliding gently on the screen can be completed in various operations, the same TouchFLO technology also supports pen functionality , the machine itself can automatically distinguish between pen and fingers.</p>','/upload/200803/20080319173804114.jpg','/upload/200803/m_20080319173804114.jpg','/upload/200803/s_20080319173804114.jpg','/upload/200803/i_20080319173804114.jpg','4','24','0','0');
INSERT INTO dt_product VALUES('12','12','Strawberry BB8700g ','BB8700g ','smart phones ','2008-03-19 17:39:26','3600.00','3200.00','Description: raspberries phone configuration has always paid attention to the keyboard Global DRAM Pricing and screen display. The 8700 g is the same, with a horizontal screen QVGA screen and QWERT ke','<p>87 g of the whole design as a shield, and even the space bar is so. Dopod on the keyboard like Nokia or horizontal screen machines rocker button, it can be said that this is the BlackBerry 8700 g one of the major features. In the rocker with a joystick used to the other phone, you will certainly not feel the design of the BlackBerry不适应. But definitely worth mentioning is that the BlackBerry operating system will allow her to maximize the functional keyboard play, you can in many places (such as information, telephone, the main interface, etc.) use a lot of shortcut to quicker and more convenient the use of the phone. It is no exaggeration to say that the phone was designed Shortcuts very reasonable and convenient.</p>','/upload/200803/20080319173926949.jpg','/upload/200803/m_20080319173926949.jpg','/upload/200803/s_20080319173926949.jpg','/upload/200803/i_20080319173926949.jpg','4','26','0','0');

DROP TABLE IF EXISTS dt_product_category;
CREATE TABLE `dt_product_category` (
  `id` int(11) NOT NULL auto_increment,
  `menuName` varchar(24) NOT NULL default '',
  `title` varchar(50) NOT NULL default '',
  `summary` varchar(200) NOT NULL default '',
  `keys` varchar(50) NOT NULL default '',
  `type` varchar(14) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `deep` int(11) NOT NULL default '0',
  `channelId` int(11) NOT NULL default '0',
  `params` text,
  `published` tinyint(1) NOT NULL default '0',
  `isClaw` tinyint(1) NOT NULL default '0',
  `template` varchar(40) NOT NULL default '',
  `isfun` tinyint(4) NOT NULL default '0',
  `isComment` tinyint(4) NOT NULL default '0',
  `cguid` varchar(16) NOT NULL default '',
  `parentId` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_product_category VALUES('2','','智能手机','智能手机','','','0','','0','3','','0','0','','0','0','','0');
INSERT INTO dt_product_category VALUES('1','','平板电视','平板电视','','','0','','0','3','','0','0','','0','0','','0');
INSERT INTO dt_product_category VALUES('3','','Flat-screen TVs','Flat-screen TVs','','','0','','0','12','','0','0','','0','0','','0');
INSERT INTO dt_product_category VALUES('4','','Smartphone','Smartphone','','','0','','0','12','','0','0','','0','0','','0');

DROP TABLE IF EXISTS dt_resume;
CREATE TABLE `dt_resume` (
  `id` int(11) NOT NULL auto_increment,
  `parentId` int(11) NOT NULL default '0',
  `channelId` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `sex` varchar(4) NOT NULL default '',
  `birthday` varchar(50) NOT NULL default '',
  `nation` varchar(50) NOT NULL default '',
  `isMarried` varchar(50) NOT NULL default '',
  `nowJob` varchar(100) NOT NULL default '',
  `nowAddress` varchar(200) NOT NULL default '',
  `residence` varchar(200) NOT NULL default '',
  `educational` varchar(100) NOT NULL default '',
  `height` varchar(50) NOT NULL default '',
  `finishSchool` varchar(100) NOT NULL default '',
  `finishTime` varchar(50) NOT NULL default '',
  `speciality` varchar(100) NOT NULL default '',
  `experience` varchar(100) NOT NULL default '',
  `selfAppreciation` text,
  `languageSkill` varchar(50) NOT NULL default '',
  `email` varchar(200) NOT NULL default '',
  `telphone` varchar(50) NOT NULL default '',
  `mobile` varchar(50) NOT NULL default '',
  `address` varchar(200) NOT NULL default '',
  `resume` text,
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_solutions;
CREATE TABLE `dt_solutions` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `title` varchar(60) NOT NULL default '',
  `subheading` varchar(200) NOT NULL default '',
  `application` varchar(200) NOT NULL default '',
  `types` varchar(160) NOT NULL default '',
  `keyword` varchar(100) NOT NULL default '',
  `author` varchar(30) NOT NULL default '',
  `counts` int(11) NOT NULL default '0',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `editTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `tags` varchar(60) NOT NULL default '',
  `check` tinyint(4) NOT NULL default '0',
  `pic` varchar(100) NOT NULL default '',
  `guid` varchar(16) NOT NULL default '',
  `isPic` int(11) NOT NULL default '0',
  `spic` varchar(255) NOT NULL default '',
  `cguid` varchar(16) NOT NULL default '',
  `origialPic` varchar(255) NOT NULL default '',
  `smallPic` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_solutions_content;
CREATE TABLE `dt_solutions_content` (
  `guid` varchar(16) NOT NULL default '0',
  `pageId` int(11) NOT NULL default '0',
  `pageName` varchar(60) NOT NULL default '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_user;
CREATE TABLE `dt_user` (
  `id` int(3) NOT NULL auto_increment,
  `nickname` varchar(32) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `username` varchar(16) NOT NULL default '',
  `pwd` varchar(40) NOT NULL default '',
  `role` int(2) NOT NULL default '0',
  `right` varchar(32) NOT NULL default '''0''',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `auditing` tinyint(4) NOT NULL default '0',
  `ip` varchar(20) NOT NULL default '',
  `detail1` varchar(255) NOT NULL default '',
  `detail2` varchar(255) NOT NULL default '',
  `detail3` varchar(255) NOT NULL default '',
  `detail4` varchar(255) NOT NULL default '',
  `detail5` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_user VALUES('1','管理员','admin@localhost','admin','d033e22ae348aeb5660fc2140aec35850c4da997','9','\'0\'','2008-11-19 01:34:26','1','127.0.0.1','','','','','');

DROP TABLE IF EXISTS dt_video;
CREATE TABLE `dt_video` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `filePath` varchar(200) NOT NULL default '',
  `fileSize` varchar(50) NOT NULL default '',
  `title` varchar(150) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `tags` varchar(200) NOT NULL default '',
  `description` text,
  `picture` varchar(200) NOT NULL default '',
  `counts` int(11) NOT NULL default '0',
  `cguid` varchar(16) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


