#Realure.cn Created
# --------------------------------------------------------


DROP TABLE IF EXISTS dt_article;
CREATE TABLE `dt_article` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `pageId` int(11) NOT NULL default '0',
  `pageName` varchar(100) NOT NULL default '',
  `summary` text,
  `content` longtext,
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `cguid` varchar(16) NOT NULL default '',
  `origialPic` varchar(255) NOT NULL default '',
  `smallPic` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_article VALUES('1','1','0','公司简介','','<p>Aiwise公司(Aiwise International Group Limited)是国内最早为企业信息化建设提供优质互联网应用全流程服务的技术型公司之一。拥有信息产业部批准的ICP、ISP增值电信业务经营牌照；软件企业和软件产品&ldquo;双软&rdquo;资格认证，根据商务部信用等级标准，被评为AAA信用企业。</p>\r\n<p>我们的业务范围主要有网络平台，数字媒体，企业管理，项目包括：域名注册 虚拟主机 企业邮局 营销系统 中文域名 信息监控 租用托管 网站建设 Google谷歌推广，搜狐系列，新浪系列，网易系列, Tom系列,服务流程, 高端策划，企业资源规划（ERP），客户关系管理（CRM），商务智能（BI），供应链管理（SCM），生命周期管理（PLM），办公自动化（OA）。</p>\r\n<p>Aiwise公司坚持&ldquo;为客户创造价值&rdquo;的经营理念，一直专注于互联网、网络营销及其相关软件的技术研发、顾问咨询与推广应用。公司凭借多年的互联网应用服务经验以及持续性研究成就，在企业信息化顾问、政府信息化顾问、互联网应用方案策划、网站策划建设、信息化应用系统开发、信息化调研、全方位网络营销推广整合应用等方面得到客户的一致好评，赢得了业界和社会的普遍关注，经过几年来的不断努力和进取，天拓科技已经发展成为华南互联网基础服务第一品牌互联网顾问公司和网络营销专家，并用事实向社会诠释了互联网的作用和价值。</p>\r\n<p>Aiwise希望成为您的事业伙伴，我们珍重并以真诚回报您给予的信任和期待，因为我们的价值来自于我们协助您创造价值。</p>','2008-04-03 16:37:35','','','');
INSERT INTO dt_article VALUES('2','6','0','企业文化','','<p><strong>[ 企业文化 ]</strong><br />\r\n战略理念：<br />\r\n专业、品质、成本、服务、沟通<br />\r\n经营理念：<br />\r\n以市场为导向，以客户为中心，诚信经营，共同发展<br />\r\n目标理念：<br />\r\n打造让经销商放心，用户满意，使员工自豪的一流企业<br />\r\n顾客理念：<br />\r\n用户至尊，信誉为本</p>\r\n<p><strong>[ 发展理念 ]</strong> <br />\r\n外塑形象，内强素质，狠抓质量，以高新技术打造国际优质产品<br />\r\n文化理念：<br />\r\n以人为本,求真务实，团结奋进，变革创新<br />\r\n精神理念：<br />\r\n关爱人类，贡献社会，共创美好未来<br />\r\n行动理念：<br />\r\n诚实做人，踏实做事，勤奋敬业，精益求精</p>','2008-03-19 14:08:04','','','');
INSERT INTO dt_article VALUES('3','7','0','企业荣誉','','<ul>\r\n    <li>&nbsp; 所有产品一次性全部通过国家强制性3C认证。&nbsp;</li>\r\n    <li>企业通过ISO9001：2000质量体系认证。&nbsp;</li>\r\n    <li>产品通过美国UL认证和CB认证，欧洲CE认证。&nbsp;</li>\r\n    <li>&nbsp;07系列荣获2003年度国家专利技术发明一等奖。&nbsp;&nbsp;</li>\r\n    <li>中央电视台颁发&rdquo;中国品牌展播&rdquo;荣誉播出证书。&nbsp;</li>\r\n    <li>首批中国质量网&rdquo;全国质量诚信示范企业&rdquo;。&nbsp;</li>\r\n    <li>&nbsp;中国产品推广评价中心授予&rdquo;全国消费者信得过产品&rdquo;。&nbsp;</li>\r\n    <li>&nbsp;中央政治局委员、广东省委书记莅临公司视察。&nbsp;</li>\r\n    <li>&nbsp;产品通过&ldquo;中国质量信用企业AAA级&rdquo;认证。&nbsp;</li>\r\n</ul>','2008-03-19 14:10:26','','','');
INSERT INTO dt_article VALUES('4','5','0','联系我们','','<p>客服电话：(0371)68958636-601，68958636-602<br />\r\n客服 QQ：38681997，461780798<br />\r\n技服 QQ：125346033<br />\r\n商务 QQ：962810650，38681997，779578864</p>\r\n<p>(北京时间 周一至周六 9:00AM-12:00AM&nbsp; 2:00PM-6:00PM)<br />\r\n客服邮箱：shenhoulong@163.com</p>\r\n<p>如果您对Deepthroat平台有好的建议，请通过以下的建议邮箱联系我们<br />\r\n建议邮箱：zy842335@163.com</p>\r\n<p>地址：河南省郑州市大学南路<br />\r\n邮编：450005</p>','2008-11-21 09:25:31','','','');
INSERT INTO dt_article VALUES('5','10','0','Company Profile','','<p>As a producing enterprise, Henan Shenglong has always looked on \'innovation\' as the foundation of the company\'s development. Integrate innovation philosophy into the whole company, actively cultivate a unique corporate culture, by means of organizing labor emulation, developing entertainment activities and choosing advanced models through public appraisal etc., build up master consciousness of the employees taking the enterprise as home, mobilize enthusiasm and creativity of the employees, build a circumstance and atmosphere of union and upwards, and enhance affinity, cohesion and fighting capacity of allits employees</p>','2008-03-19 16:17:11','','','');
INSERT INTO dt_article VALUES('6','16','0','Enterprises Honor ','','<p class=\"style3\">Honor Fame Enterprises Limited is a Leather Goods Manufacter in  Hong Kong.We already have over 20 Year experience in Leather Goods  Business.<br />\r\nHead office is located in Hong Kong with our own LeatherGoods  Factory in Nanhui ,China.</p>','2008-03-19 15:32:38','','','');
INSERT INTO dt_article VALUES('7','15','0','Corporate Culture','','<p>Posted Wed. Mar 19, 3:11 AM ET by Lyndsey Parker in Reality Rocks <br />\r\nLast week on Beatles Night, American Idol golden boy David Archuleta astonishingly flubbed the lyrics to &quot;We Can Work It Out.&quot; It seemed hard to believe that the perfectly poised Stage Search winner, who\'d been such a standout only a couple weeks earlier singing John Lennon\'s &quot;Imagine,&quot; would so badly mangle a Lennon/McCartney number like this.</p>\r\n<p>Well, since that incident, rumors have circulated that little David\'s overbearing father was to blame. And if these rumors are true, then Jeff Archuleta just might be the creepiest reality-TV stage dad since Ashlee and Jessica\'s Papa Joe Simpson.</p>\r\n<p>According to Entertainment Tonight, David\'s dad Jeff &quot;yelled at David during a recording session...and even brought him to tears&quot; the day before the first Beatles Night, supposedly because he didn\'t think his son\'s singing was up to par. If that\'s true, then gawd only knows how much he yelled after David\'s blunder (or, as I like to call it, &quot;Archuletdown&quot;) last Tuesday.</p>\r\n<p>I don\'t know if Jeff went easier on David this week, because David was in much better form tonight. Maybe Jeff\'s alleged old intimidation tactics worked on David\'s less-stellar Idol opponents this week, since L.A. Rag Mag further reports that back when a 12-year-old David competed on Star Search, his daddy dearest was banned from the set for supposedly harrassing David\'s competitors.</p>\r\n<p>Don\'t know if that rumor is true either, but there are some tough-as-nails contestants on Idol this year. So if Jeff talks smack to, say, feisty Chikezie or leather-clad biker nurse Amanda Overmyer--or bullies little David in front of protective mama bear Brooke White--he may get more than he bargained for.</p>','2008-03-19 16:16:45','','','');
INSERT INTO dt_article VALUES('8','14','0','Contact Us','','<p align=\"left\">ADDRESS:<br />\r\nFujian Newland Auto-ID Tech. Co., Ltd. <br />\r\nNewland  Science &amp; Technology Park <br />\r\nNo.1 Rujiang Rd., Mawei, <br />\r\nFuzhou, Fujian  350001, China</p>\r\n<p align=\"left\">TEL: 86-591-83979219</p>\r\n<p align=\"left\">FAX: 86-591-83979208</p>\r\n<p align=\"left\">WEB: <a href=\"http://www.nlscan.com/\">www.nlscan.com</a></p>\r\n<p align=\"left\">E-mail: <a href=\"mailto:promote@mail.nlscan.com\">promote@mail.nlscan.com</a></p>','2008-03-19 16:22:11','','','');

DROP TABLE IF EXISTS dt_calllist;
CREATE TABLE `dt_calllist` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `callId` varchar(400) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_calllist VALUES('2','11','17,18');
INSERT INTO dt_calllist VALUES('1','2','9,8');

DROP TABLE IF EXISTS dt_comment;
CREATE TABLE `dt_comment` (
  `id` int(11) NOT NULL auto_increment,
  `recordId` int(11) NOT NULL,
  `channelId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text,
  `email` varchar(60) NOT NULL,
  `homepage` varchar(60) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `dtTime` datetime NOT NULL,
  `auditing` tinyint(4) NOT NULL,
  `ordering` int(11) NOT NULL,
  `memberId` int(11) NOT NULL default '0',
  `memberTableName` varchar(255) NOT NULL,
  `answerId` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_download;
CREATE TABLE `dt_download` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `softwareName` varchar(200) NOT NULL default 'NOT NULL',
  `softwareSize` varchar(200) default NULL,
  `language` varchar(40) default NULL,
  `classification` varchar(200) default NULL,
  `platform` varchar(200) default NULL,
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `introduce` text,
  `filePath` varchar(200) NOT NULL default 'NOT NULL',
  `counts` int(11) NOT NULL default '0',
  `cguid` varchar(16) default NULL,
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_flash;
CREATE TABLE `dt_flash` (
  `id` int(11) NOT NULL auto_increment,
  `title` text,
  `url` varchar(200) NOT NULL default '',
  `picpath` varchar(200) NOT NULL default '',
  `group_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `summary` text,
  `dt_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_flash VALUES('1','世界热气球比赛','http://www.deepthroat.com.cn','/upload/200710/20071027095455797.jpg','1','1','世界热气球比赛','2008-01-22 02:01:34');
INSERT INTO dt_flash VALUES('2','多色多彩的热气球','http://www.deepthroat.com.cn','/upload/200710/200710270955095.jpg','1','2','多色多彩的热气球','2007-10-27 09:55:09');
INSERT INTO dt_flash VALUES('3','四只热气球','http://www.deepthroat.com.cn','/upload/200710/20071027095519831.jpg','1','3','四只热气球','2007-10-27 09:55:19');
INSERT INTO dt_flash VALUES('4','满天热气球','http://www.deepthroat.com.cn','/upload/200710/20071027095529300.jpg','1','4','满天热气球','2007-10-27 09:55:29');
INSERT INTO dt_flash VALUES('5','家具1','','/upload/200801/20080121234326963.jpg','2','0','','2008-01-23 12:02:12');
INSERT INTO dt_flash VALUES('6','家具2','','/upload/200801/20080121234335164.jpg','2','0','','2008-01-23 12:02:17');

DROP TABLE IF EXISTS dt_flash_group;
CREATE TABLE `dt_flash_group` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL default '',
  `summary` text,
  `dt_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_flash_group VALUES('1','【首页】flash图片展示','这个flash可以展示变换的图片。','2008-01-23 12:06:21','1');
INSERT INTO dt_flash_group VALUES('2','【首页】家具轮换图片','轮换图片','2008-01-23 12:06:21','0');

DROP TABLE IF EXISTS dt_guestbook;
CREATE TABLE `dt_guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `homepage` varchar(60) NOT NULL default '',
  `qq` varchar(15) NOT NULL default '',
  `ip` varchar(40) NOT NULL default '',
  `isPublic` int(11) NOT NULL default '0',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `content` text,
  `content1` text,
  `channelId` int(11) NOT NULL default '0',
  `telephone` varchar(16) NOT NULL default '',
  `company` varchar(60) NOT NULL default '',
  `auditing` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS dt_jobs;
CREATE TABLE `dt_jobs` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `jobName` varchar(200) NOT NULL default '',
  `jobKind` varchar(100) NOT NULL default '',
  `requireNum` int(11) NOT NULL default '0',
  `experience` varchar(50) NOT NULL default '',
  `address` varchar(200) NOT NULL default '',
  `age` varchar(100) NOT NULL default '',
  `height` varchar(50) NOT NULL default '',
  `languageSkill` varchar(100) NOT NULL default '',
  `lastTime` varchar(50) NOT NULL default '',
  `salary` varchar(50) NOT NULL default '',
  `educational` varchar(50) NOT NULL default '',
  `isHouse` varchar(50) NOT NULL default '',
  `sex` varchar(4) NOT NULL default '',
  `computerLevel` varchar(100) NOT NULL default '',
  `summary` text,
  `telphone` varchar(50) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  `classification` varchar(10) NOT NULL default 'cn',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO dt_jobs VALUES('3','13','Manager','Full-time ','4','3 years','Beijing','25 years old and above ','Open','English','2010-04-25','2000¥','大专','No','男','--不限--','<p>1, college education<br />\r\n<br />\r\n2, in the TV repair work for more than three years, and have some management experience.<br />\r\n<br />\r\n3, can be hard-working, communication ability, and good image.<br />\r\n<br />\r\n4, around the age of 30 years old.</p>','021-68683265','jobs@163.com','2008-03-19 17:46:48','0','0','en');
INSERT INTO dt_jobs VALUES('4','13','Recruitment Outsourc','Full-time ','12','more than five years','Beijing','35 years old ','opne','English','2010-05-25','¥3000','大专','No','男','--不限--','<p>1, college education <br />\r\n<br />\r\n2, and is familiar with the &quot;CIS&quot; market, and understand Russian with strong oral communication skills. <br />\r\n<br />\r\n3, in the TV marketing efforts for more than three years, and have some management experience. <br />\r\n<br />\r\n4, can be hard-working, communication ability, and good character. <br />\r\n<br />\r\n5, under the age of 35.</p>','021-23659535','jobs@163.com ','2008-03-19 17:51:04','0','0','en');
INSERT INTO dt_jobs VALUES('1','4','售后经理','全职','2','3年以上','北京','25岁以上','不限','英语','2010-04-25','2000+提成','大专','不提供住房','男','--不限--','<p>1、 大专以上学历</p>\r\n<p>2、 从事彩电维修工作三年以上，并具有一定的管理经验。</p>\r\n<p>3、 能吃苦耐劳，沟通能力强，形象良好。</p>\r\n<p>4、 年龄在30岁左右。</p>','021-68683265','jobs@163.com','2008-03-19 15:04:22','0','0','cn');
INSERT INTO dt_jobs VALUES('2','4','国外客户经理','全职','6','5年以上','北京','35岁以下','不限','俄语','2010-04-29','3000+提成','大专','不提供','男','--不限--','<p>1、大专以上学历</p>\r\n<p>2、熟悉&ldquo;独联体&rdquo;市场，懂俄文并具有较强口语沟通能力。</p>\r\n<p>3、从事彩电营销工作三年以上，并具有一定的管理经验。</p>\r\n<p>4、能吃苦耐劳，沟通能力强，品行良好。</p>\r\n<p>5、年龄在35岁以下。</p>','021-23659535','jobs@163.com','2008-03-19 15:07:36','0','0','cn');

DROP TABLE IF EXISTS dt_list;
CREATE TABLE `dt_list` (
  `id` int(11) NOT NULL auto_increment,
  `isTopic` tinyint(1) NOT NULL default '0',
  `isImportant` tinyint(1) NOT NULL default '0',
  `channelId` int(11) NOT NULL default '0',
  `title` varchar(60) NOT NULL default '',
  `author` varchar(30) NOT NULL default '',
  `source` varchar(60) NOT NULL default '',
  `counts` int(11) NOT NULL default '0',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `editTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `tags` varchar(60) NOT NULL default '',
  `check` tinyint(4) NOT NULL default '0',
  `uname` varchar(16) NOT NULL default '',
  `summary` text,
  `pic` varchar(100) NOT NULL default '',
  `recommend` int(11) NOT NULL default '0',
  `mark` int(11) NOT NULL default '0',
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

INSERT INTO dt_list VALUES('20','0','0','18','Newland Exhibits in CeBIT 2008','newland','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','Newland Exhibits in CeBIT 2008','0','','','','0','0','E8661FBB6AC796D6','0','','','','','0','0');
INSERT INTO dt_list VALUES('19','0','0','18','Newland\'s website was renewed','newland','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','Newland\'s website was renewed','0','','','','0','0','66619B933DD62E75','0','','','','','0','0');
INSERT INTO dt_list VALUES('18','0','0','18','Archuleta\'s Daddy Dearest?','yahoo','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','Archuleta\'s Daddy Dearest?','0','','','','0','0','D879E27679191A82','0','','','','','0','0');
INSERT INTO dt_list VALUES('17','0','0','18','Archuleta\'s Daddy Dearest?','yahoo','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','Archuleta\'s Daddy Dearest?','0','','','','0','0','42BAF092D9DC5F1A','0','','','','','0','0');
INSERT INTO dt_list VALUES('16','0','0','18','94-74 win over Houston','yahoo','','1','2008-03-19 00:00:00','2008-03-19 00:00:00','Garnett, Pierce lead Celtics to 94-74 win over Houston, snap','0','','','','0','0','8CA87CDF9412B457','0','','','','','0','0');
INSERT INTO dt_list VALUES('15','0','0','17',' China warns of \'life or death struggle\' in Tibet ','yahoo','','12','2008-03-19 00:00:00','0000-00-00 00:00:00',' China warns of \'life or death struggle\' in Tibet ','0','','','','0','0','095F673E6077D528','0','','','','','0','0');
INSERT INTO dt_list VALUES('14','0','0','17','UK papers apologize to McCann parents ','yahoo','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','UK papers apologize to McCann parents ','0','','','','0','0','F945F5A48A8DAED7','0','','','','','0','0');
INSERT INTO dt_list VALUES('13','0','0','17',' 4 killed in SoCal workplace shooting','yahoo','','5','2008-03-19 00:00:00','0000-00-00 00:00:00',' 4 killed in SoCal workplace shooting','0','','','','0','0','177E1FA6485E7CD0','0','','','','','0','0');
INSERT INTO dt_list VALUES('12','0','0','17','Jury awards $590 million in Reno killing ','yahoo','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','Jury awards $590 million in Reno killing ','0','','','','0','0','CC30A79C30184650','0','','','','','0','0');
INSERT INTO dt_list VALUES('11','0','0','17','Spitzer call girl loses $1 mln offer over videos ','Deepthroat','','0','2008-03-19 00:00:00','0000-00-00 00:00:00','girl','0','','','','0','0','AEFA72DF8C593E49','0','','','','','0','0');
INSERT INTO dt_list VALUES('10','0','0','9','技术解决方案','Deepthroat','','1','2008-03-19 00:00:00','0000-00-00 00:00:00','技术解决方案','0','','','','0','0','3543F7FA8B628CD8','0','','','','','0','0');
INSERT INTO dt_list VALUES('9','0','0','9','咨询/服务行业网站解决方案','Deepthroat','','2','2008-03-19 00:00:00','0000-00-00 00:00:00','咨询/服务行业网站解决方案','0','','','','0','0','10B66AF3096B49A5','0','','','','','0','0');
INSERT INTO dt_list VALUES('8','0','0','9','国际贸易网站解决方案','realure','','1','2008-03-19 00:00:00','0000-00-00 00:00:00','国际贸易网站解决方案','0','','','','0','0','661A8F51D3734918','0','','','','','0','0');
INSERT INTO dt_list VALUES('7','0','0','9','IT公司网站解决方案','Deepthroat','','2','2008-03-19 00:00:00','0000-00-00 00:00:00','IT公司网站解决方案','0','','','','0','0','831465C8B8F5AD4D','0','','','','','0','0');
INSERT INTO dt_list VALUES('5','0','0','8','合作伙伴计划','Deepthroat','','5','2008-03-19 00:00:00','0000-00-00 00:00:00','合作伙伴','0','','','','0','0','7AE4AC4C439A2987','0','','','','','0','0');
INSERT INTO dt_list VALUES('6','0','0','9','解决方案','Deepthroat','','3','2008-03-19 00:00:00','0000-00-00 00:00:00','解决方案','0','','','','0','0','2EBC4240C0D14162','0','','','','','0','0');
INSERT INTO dt_list VALUES('4','0','0','8','深喉咙法律声明','Deepthroat','','2','2008-03-19 00:00:00','0000-00-00 00:00:00','法律','0','','','','0','0','A509981A1781866A','0','','','','','0','0');
INSERT INTO dt_list VALUES('3','0','0','8','深喉咙专用主机热卖中','Deepthroat','','1','2008-03-19 00:00:00','0000-00-00 00:00:00','主机','0','','','','0','0','5158BDDB23928BFF','0','','','','','0','0');
INSERT INTO dt_list VALUES('1','0','0','8','“深喉咙”来由','Deepthroat','','2','2008-03-19 00:00:00','0000-00-00 00:00:00','来由','0','','','','0','0','458EF974A4FD23C6','0','','','','','0','0');
INSERT INTO dt_list VALUES('2','0','0','8','Deepthroat 简要招商计划','Deepthroat','','2','2008-03-19 00:00:00','0000-00-00 00:00:00','招商','0','','','','0','0','54466B69A9EA75B8','0','','','','','0','0');

