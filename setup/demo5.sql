--<br>--
CREATE TABLE `##_article` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;
--<br>--
INSERT INTO `##_article` (`id`, `channelId`, `pageId`, `pageName`, `summary`, `content`, `dtTime`, `cguid`, `origialPic`, `smallPic`) VALUES
(1, 1, 0, '公司简介', '', '<p>Aiwise公司(Aiwise International Group Limited)是国内最早为企业信息化建设提供优质互联网应用全流程服务的技术型公司之一。拥有信息产业部批准的ICP、ISP增值电信业务经营牌照；软件企业和软件产品&ldquo;双软&rdquo;资格认证，根据商务部信用等级标准，被评为AAA信用企业。</p>\r\n<p>我们的业务范围主要有网络平台，数字媒体，企业管理，项目包括：域名注册 虚拟主机 企业邮局 营销系统 中文域名 信息监控 租用托管 网站建设 Google谷歌推广，搜狐系列，新浪系列，网易系列, Tom系列,服务流程, 高端策划，企业资源规划（ERP），客户关系管理（CRM），商务智能（BI），供应链管理（SCM），生命周期管理（PLM），办公自动化（OA）。</p>\r\n<p>Aiwise公司坚持&ldquo;为客户创造价值&rdquo;的经营理念，一直专注于互联网、网络营销及其相关软件的技术研发、顾问咨询与推广应用。公司凭借多年的互联网应用服务经验以及持续性研究成就，在企业信息化顾问、政府信息化顾问、互联网应用方案策划、网站策划建设、信息化应用系统开发、信息化调研、全方位网络营销推广整合应用等方面得到客户的一致好评，赢得了业界和社会的普遍关注，经过几年来的不断努力和进取，天拓科技已经发展成为华南互联网基础服务第一品牌互联网顾问公司和网络营销专家，并用事实向社会诠释了互联网的作用和价值。</p>\r\n<p>Aiwise希望成为您的事业伙伴，我们珍重并以真诚回报您给予的信任和期待，因为我们的价值来自于我们协助您创造价值。</p>', '2008-04-03 16:37:35', '', '', ''),
(2, 6, 0, '企业文化', '', '<p><strong>[ 企业文化 ]</strong><br />\r\n战略理念：<br />\r\n专业、品质、成本、服务、沟通<br />\r\n经营理念：<br />\r\n以市场为导向，以客户为中心，诚信经营，共同发展<br />\r\n目标理念：<br />\r\n打造让经销商放心，用户满意，使员工自豪的一流企业<br />\r\n顾客理念：<br />\r\n用户至尊，信誉为本</p>\r\n<p><strong>[ 发展理念 ]</strong> <br />\r\n外塑形象，内强素质，狠抓质量，以高新技术打造国际优质产品<br />\r\n文化理念：<br />\r\n以人为本,求真务实，团结奋进，变革创新<br />\r\n精神理念：<br />\r\n关爱人类，贡献社会，共创美好未来<br />\r\n行动理念：<br />\r\n诚实做人，踏实做事，勤奋敬业，精益求精</p>', '2008-03-19 14:08:04', '', '', ''),
(3, 7, 0, '企业荣誉', '', '<ul>\r\n    <li>&nbsp; 所有产品一次性全部通过国家强制性3C认证。&nbsp;</li>\r\n    <li>企业通过ISO9001：2000质量体系认证。&nbsp;</li>\r\n    <li>产品通过美国UL认证和CB认证，欧洲CE认证。&nbsp;</li>\r\n    <li>&nbsp;07系列荣获2003年度国家专利技术发明一等奖。&nbsp;&nbsp;</li>\r\n    <li>中央电视台颁发&rdquo;中国品牌展播&rdquo;荣誉播出证书。&nbsp;</li>\r\n    <li>首批中国质量网&rdquo;全国质量诚信示范企业&rdquo;。&nbsp;</li>\r\n    <li>&nbsp;中国产品推广评价中心授予&rdquo;全国消费者信得过产品&rdquo;。&nbsp;</li>\r\n    <li>&nbsp;中央政治局委员、广东省委书记莅临公司视察。&nbsp;</li>\r\n    <li>&nbsp;产品通过&ldquo;中国质量信用企业AAA级&rdquo;认证。&nbsp;</li>\r\n</ul>', '2008-03-19 14:10:26', '', '', ''),
(4, 5, 0, '联系我们', '', '<p>客服电话：(0371)68958636-601，68958636-602<br />\r\n客服 QQ：38681997，461780798<br />\r\n技服 QQ：125346033<br />\r\n商务 QQ：962810650，38681997，779578864</p>\r\n<p>(北京时间 周一至周六 9:00AM-12:00AM&nbsp; 2:00PM-6:00PM)<br />\r\n客服邮箱：shenhoulong@163.com</p>\r\n<p>如果您对Deepthroat平台有好的建议，请通过以下的建议邮箱联系我们<br />\r\n建议邮箱：zy842335@163.com</p>\r\n<p>地址：河南省郑州市大学南路<br />\r\n邮编：450005</p>', '2008-11-21 09:25:31', '', '', ''),
(5, 10, 0, 'Company Profile', '', '<p>As a producing enterprise, Henan Shenglong has always looked on ''innovation'' as the foundation of the company''s development. Integrate innovation philosophy into the whole company, actively cultivate a unique corporate culture, by means of organizing labor emulation, developing entertainment activities and choosing advanced models through public appraisal etc., build up master consciousness of the employees taking the enterprise as home, mobilize enthusiasm and creativity of the employees, build a circumstance and atmosphere of union and upwards, and enhance affinity, cohesion and fighting capacity of allits employees</p>', '2008-03-19 16:17:11', '', '', ''),
(6, 16, 0, 'Enterprises Honor ', '', '<p class="style3">Honor Fame Enterprises Limited is a Leather Goods Manufacter in  Hong Kong.We already have over 20 Year experience in Leather Goods  Business.<br />\r\nHead office is located in Hong Kong with our own LeatherGoods  Factory in Nanhui ,China.</p>', '2008-03-19 15:32:38', '', '', ''),
(7, 15, 0, 'Corporate Culture', '', '<p>Posted Wed. Mar 19, 3:11 AM ET by Lyndsey Parker in Reality Rocks <br />\r\nLast week on Beatles Night, American Idol golden boy David Archuleta astonishingly flubbed the lyrics to &quot;We Can Work It Out.&quot; It seemed hard to believe that the perfectly poised Stage Search winner, who''d been such a standout only a couple weeks earlier singing John Lennon''s &quot;Imagine,&quot; would so badly mangle a Lennon/McCartney number like this.</p>\r\n<p>Well, since that incident, rumors have circulated that little David''s overbearing father was to blame. And if these rumors are true, then Jeff Archuleta just might be the creepiest reality-TV stage dad since Ashlee and Jessica''s Papa Joe Simpson.</p>\r\n<p>According to Entertainment Tonight, David''s dad Jeff &quot;yelled at David during a recording session...and even brought him to tears&quot; the day before the first Beatles Night, supposedly because he didn''t think his son''s singing was up to par. If that''s true, then gawd only knows how much he yelled after David''s blunder (or, as I like to call it, &quot;Archuletdown&quot;) last Tuesday.</p>\r\n<p>I don''t know if Jeff went easier on David this week, because David was in much better form tonight. Maybe Jeff''s alleged old intimidation tactics worked on David''s less-stellar Idol opponents this week, since L.A. Rag Mag further reports that back when a 12-year-old David competed on Star Search, his daddy dearest was banned from the set for supposedly harrassing David''s competitors.</p>\r\n<p>Don''t know if that rumor is true either, but there are some tough-as-nails contestants on Idol this year. So if Jeff talks smack to, say, feisty Chikezie or leather-clad biker nurse Amanda Overmyer--or bullies little David in front of protective mama bear Brooke White--he may get more than he bargained for.</p>', '2008-03-19 16:16:45', '', '', ''),
(8, 14, 0, 'Contact Us', '', '<p align="left">ADDRESS:<br />\r\nFujian Newland Auto-ID Tech. Co., Ltd. <br />\r\nNewland  Science &amp; Technology Park <br />\r\nNo.1 Rujiang Rd., Mawei, <br />\r\nFuzhou, Fujian  350001, China</p>\r\n<p align="left">TEL: 86-591-83979219</p>\r\n<p align="left">FAX: 86-591-83979208</p>\r\n<p align="left">WEB: <a href="http://www.nlscan.com/">www.nlscan.com</a></p>\r\n<p align="left">E-mail: <a href="mailto:promote@mail.nlscan.com">promote@mail.nlscan.com</a></p>', '2008-03-19 16:22:11', '', '', '');
--<br>--
CREATE TABLE `##_calllist` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `callId` varchar(400) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
--<br>--
INSERT INTO `##_calllist` (`id`, `channelId`, `callId`) VALUES
(2, 11, '17,18'),
(1, 2, '9,8');
--<br>--
CREATE TABLE `##_comment` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--<br>--
CREATE TABLE `##_download` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
CREATE TABLE `##_flash` (
  `id` int(11) NOT NULL auto_increment,
  `title` text,
  `url` varchar(200) NOT NULL default '',
  `picpath` varchar(200) NOT NULL default '',
  `group_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `summary` text,
  `dt_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
--<br>--
INSERT INTO `##_flash` (`id`, `title`, `url`, `picpath`, `group_id`, `ordering`, `summary`, `dt_time`) VALUES
(1, '世界热气球比赛', 'http://www.deepthroat.com.cn', '/upload/200710/20071027095455797.jpg', 1, 1, '世界热气球比赛', '2008-01-22 02:01:34'),
(2, '多色多彩的热气球', 'http://www.deepthroat.com.cn', '/upload/200710/200710270955095.jpg', 1, 2, '多色多彩的热气球', '2007-10-27 09:55:09'),
(3, '四只热气球', 'http://www.deepthroat.com.cn', '/upload/200710/20071027095519831.jpg', 1, 3, '四只热气球', '2007-10-27 09:55:19'),
(4, '满天热气球', 'http://www.deepthroat.com.cn', '/upload/200710/20071027095529300.jpg', 1, 4, '满天热气球', '2007-10-27 09:55:29'),
(5, '家具1', '', '/upload/200801/20080121234326963.jpg', 2, 0, '', '2008-01-23 12:02:12'),
(6, '家具2', '', '/upload/200801/20080121234335164.jpg', 2, 0, '', '2008-01-23 12:02:17');
--<br>--
CREATE TABLE `##_flash_group` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL default '',
  `summary` text,
  `dt_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
--<br>--
INSERT INTO `##_flash_group` (`id`, `title`, `summary`, `dt_time`, `sign`) VALUES
(1, '【首页】flash图片展示', '这个flash可以展示变换的图片。', '2008-01-23 12:06:21', 1),
(2, '【首页】家具轮换图片', '轮换图片', '2008-01-23 12:06:21', 0);
--<br>--
CREATE TABLE `##_guestbook` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
CREATE TABLE `##_jobs` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
--<br>--
INSERT INTO `##_jobs` (`id`, `channelId`, `jobName`, `jobKind`, `requireNum`, `experience`, `address`, `age`, `height`, `languageSkill`, `lastTime`, `salary`, `educational`, `isHouse`, `sex`, `computerLevel`, `summary`, `telphone`, `email`, `dtTime`, `ordering`, `sign`, `classification`) VALUES
(3, 13, 'Manager', 'Full-time ', 4, '3 years', 'Beijing', '25 years old and above ', 'Open', 'English', '2010-04-25', '2000¥', '大专', 'No', '男', '--不限--', '<p>1, college education<br />\r\n<br />\r\n2, in the TV repair work for more than three years, and have some management experience.<br />\r\n<br />\r\n3, can be hard-working, communication ability, and good image.<br />\r\n<br />\r\n4, around the age of 30 years old.</p>', '021-68683265', 'jobs@163.com', '2008-03-19 17:46:48', 0, 0, 'en'),
(4, 13, 'Recruitment Outsourc', 'Full-time ', 12, 'more than five years', 'Beijing', '35 years old ', 'opne', 'English', '2010-05-25', '¥3000', '大专', 'No', '男', '--不限--', '<p>1, college education <br />\r\n<br />\r\n2, and is familiar with the &quot;CIS&quot; market, and understand Russian with strong oral communication skills. <br />\r\n<br />\r\n3, in the TV marketing efforts for more than three years, and have some management experience. <br />\r\n<br />\r\n4, can be hard-working, communication ability, and good character. <br />\r\n<br />\r\n5, under the age of 35.</p>', '021-23659535', 'jobs@163.com ', '2008-03-19 17:51:04', 0, 0, 'en'),
(1, 4, '售后经理', '全职', 2, '3年以上', '北京', '25岁以上', '不限', '英语', '2010-04-25', '2000+提成', '大专', '不提供住房', '男', '--不限--', '<p>1、 大专以上学历</p>\r\n<p>2、 从事彩电维修工作三年以上，并具有一定的管理经验。</p>\r\n<p>3、 能吃苦耐劳，沟通能力强，形象良好。</p>\r\n<p>4、 年龄在30岁左右。</p>', '021-68683265', 'jobs@163.com', '2008-03-19 15:04:22', 0, 0, 'cn'),
(2, 4, '国外客户经理', '全职', 6, '5年以上', '北京', '35岁以下', '不限', '俄语', '2010-04-29', '3000+提成', '大专', '不提供', '男', '--不限--', '<p>1、大专以上学历</p>\r\n<p>2、熟悉&ldquo;独联体&rdquo;市场，懂俄文并具有较强口语沟通能力。</p>\r\n<p>3、从事彩电营销工作三年以上，并具有一定的管理经验。</p>\r\n<p>4、能吃苦耐劳，沟通能力强，品行良好。</p>\r\n<p>5、年龄在35岁以下。</p>', '021-23659535', 'jobs@163.com', '2008-03-19 15:07:36', 0, 0, 'cn');
--<br>--
CREATE TABLE `##_list` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;
--<br>--
INSERT INTO `##_list` (`id`, `isTopic`, `isImportant`, `channelId`, `title`, `author`, `source`, `counts`, `dtTime`, `editTime`, `tags`, `check`, `uname`, `summary`, `pic`, `recommend`, `mark`, `guid`, `isPic`, `spic`, `cguid`, `origialPic`, `smallPic`, `ordering`, `sign`) VALUES
(20, 0, 0, 18, 'Newland Exhibits in CeBIT 2008', 'newland', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'Newland Exhibits in CeBIT 2008', 0, '', '', '', 0, 0, 'E8661FBB6AC796D6', 0, '', '', '', '', 0, 0),
(19, 0, 0, 18, 'Newland''s website was renewed', 'newland', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'Newland''s website was renewed', 0, '', '', '', 0, 0, '66619B933DD62E75', 0, '', '', '', '', 0, 0),
(18, 0, 0, 18, 'Archuleta''s Daddy Dearest?', 'yahoo', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'Archuleta''s Daddy Dearest?', 0, '', '', '', 0, 0, 'D879E27679191A82', 0, '', '', '', '', 0, 0),
(17, 0, 0, 18, 'Archuleta''s Daddy Dearest?', 'yahoo', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'Archuleta''s Daddy Dearest?', 0, '', '', '', 0, 0, '42BAF092D9DC5F1A', 0, '', '', '', '', 0, 0),
(16, 0, 0, 18, '94-74 win over Houston', 'yahoo', '', 1, '2008-03-19 00:00:00', '2008-03-19 00:00:00', 'Garnett, Pierce lead Celtics to 94-74 win over Houston, snap', 0, '', '', '', 0, 0, '8CA87CDF9412B457', 0, '', '', '', '', 0, 0),
(15, 0, 0, 17, ' China warns of ''life or death struggle'' in Tibet ', 'yahoo', '', 12, '2008-03-19 00:00:00', '0000-00-00 00:00:00', ' China warns of ''life or death struggle'' in Tibet ', 0, '', '', '', 0, 0, '095F673E6077D528', 0, '', '', '', '', 0, 0),
(14, 0, 0, 17, 'UK papers apologize to McCann parents ', 'yahoo', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'UK papers apologize to McCann parents ', 0, '', '', '', 0, 0, 'F945F5A48A8DAED7', 0, '', '', '', '', 0, 0),
(13, 0, 0, 17, ' 4 killed in SoCal workplace shooting', 'yahoo', '', 5, '2008-03-19 00:00:00', '0000-00-00 00:00:00', ' 4 killed in SoCal workplace shooting', 0, '', '', '', 0, 0, '177E1FA6485E7CD0', 0, '', '', '', '', 0, 0),
(12, 0, 0, 17, 'Jury awards $590 million in Reno killing ', 'yahoo', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'Jury awards $590 million in Reno killing ', 0, '', '', '', 0, 0, 'CC30A79C30184650', 0, '', '', '', '', 0, 0),
(11, 0, 0, 17, 'Spitzer call girl loses $1 mln offer over videos ', 'Deepthroat', '', 0, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'girl', 0, '', '', '', 0, 0, 'AEFA72DF8C593E49', 0, '', '', '', '', 0, 0),
(10, 0, 0, 9, '技术解决方案', 'Deepthroat', '', 1, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '技术解决方案', 0, '', '', '', 0, 0, '3543F7FA8B628CD8', 0, '', '', '', '', 0, 0),
(9, 0, 0, 9, '咨询/服务行业网站解决方案', 'Deepthroat', '', 2, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '咨询/服务行业网站解决方案', 0, '', '', '', 0, 0, '10B66AF3096B49A5', 0, '', '', '', '', 0, 0),
(8, 0, 0, 9, '国际贸易网站解决方案', 'realure', '', 1, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '国际贸易网站解决方案', 0, '', '', '', 0, 0, '661A8F51D3734918', 0, '', '', '', '', 0, 0),
(7, 0, 0, 9, 'IT公司网站解决方案', 'Deepthroat', '', 2, '2008-03-19 00:00:00', '0000-00-00 00:00:00', 'IT公司网站解决方案', 0, '', '', '', 0, 0, '831465C8B8F5AD4D', 0, '', '', '', '', 0, 0),
(5, 0, 0, 8, '合作伙伴计划', 'Deepthroat', '', 5, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '合作伙伴', 0, '', '', '', 0, 0, '7AE4AC4C439A2987', 0, '', '', '', '', 0, 0),
(6, 0, 0, 9, '解决方案', 'Deepthroat', '', 3, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '解决方案', 0, '', '', '', 0, 0, '2EBC4240C0D14162', 0, '', '', '', '', 0, 0),
(4, 0, 0, 8, '深喉咙法律声明', 'Deepthroat', '', 2, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '法律', 0, '', '', '', 0, 0, 'A509981A1781866A', 0, '', '', '', '', 0, 0),
(3, 0, 0, 8, '深喉咙专用主机热卖中', 'Deepthroat', '', 1, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '主机', 0, '', '', '', 0, 0, '5158BDDB23928BFF', 0, '', '', '', '', 0, 0),
(1, 0, 0, 8, '“深喉咙”来由', 'Deepthroat', '', 2, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '来由', 0, '', '', '', 0, 0, '458EF974A4FD23C6', 0, '', '', '', '', 0, 0),
(2, 0, 0, 8, 'Deepthroat 简要招商计划', 'Deepthroat', '', 2, '2008-03-19 00:00:00', '0000-00-00 00:00:00', '招商', 0, '', '', '', 0, 0, '54466B69A9EA75B8', 0, '', '', '', '', 0, 0);
--<br>--
CREATE TABLE `##_list_content` (
  `guid` varchar(16) NOT NULL default '',
  `pageId` int(11) NOT NULL default '0',
  `pageName` varchar(60) NOT NULL default '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
INSERT INTO `##_list_content` (`guid`, `pageId`, `pageName`, `content`) VALUES
('D879E27679191A82', 0, '', '<p>Archuleta''s Daddy Dearest?<br />\r\nPosted Wed. Mar 19, 3:11 AM ET by Lyndsey Parker in Reality Rocks <br />\r\nLast week on Beatles Night, American Idol golden boy David Archuleta astonishingly flubbed the lyrics to &quot;We Can Work It Out.&quot; It seemed hard to believe that the perfectly poised Stage Search winner, who''d been such a standout only a couple weeks earlier singing John Lennon''s &quot;Imagine,&quot; would so badly mangle a Lennon/McCartney number like this.<br />\r\n<br />\r\nWell, since that incident, rumors have circulated that little David''s overbearing father was to blame. And if these rumors are true, then Jeff Archuleta just might be the creepiest reality-TV stage dad since Ashlee and Jessica''s Papa Joe Simpson. <br />\r\n<br />\r\nAccording to Entertainment Tonight, David''s dad Jeff &quot;yelled at David during a recording session...and even brought him to tears&quot; the day before the first Beatles Night, supposedly because he didn''t think his son''s singing was up to par. If that''s true, then gawd only knows how much he yelled after David''s blunder (or, as I like to call it, &quot;Archuletdown&quot;) last Tuesday.<br />\r\n<br />\r\nI don''t know if Jeff went easier on David this week, because David was in much better form tonight. Maybe Jeff''s alleged old intimidation tactics worked on David''s less-stellar Idol opponents this week, since L.A. Rag Mag further reports that back when a 12-year-old David competed on Star Search, his daddy dearest was banned from the set for supposedly harrassing David''s competitors.<br />\r\n<br />\r\nDon''t know if that rumor is true either, but there are some tough-as-nails contestants on Idol this year. So if Jeff talks smack to, say, feisty Chikezie or leather-clad biker nurse Amanda Overmyer--or bullies little David in front of protective mama bear Brooke White--he may get more than he bargained for.</p>'),
('66619B933DD62E75', 0, '', '<p>Our website was renewed in&nbsp;Oct. 2007.&nbsp;<font size="2"> If you have any questions  /problems please Email to </font><a href="mailto:promote@mail.nlscan.com"><font size="2">promote@mail.nlscan.com</font></a><font size="2">&nbsp;.</font></p>'),
('E8661FBB6AC796D6', 0, '', '<p>Newland Group,&nbsp;one of biggest IT manufacturer in P.R.China will be in CeBIT  Hannover 2008 between March 4 and 9, 2008 again.</p>\r\n<p>During the event, Newland Auto-ID Tech.Co.,Ltd, will present its full range  Data Collectors and barcode readers with their new innovative products.</p>\r\n<p>Newland sincerely invites you to visit our booth at Hall 7, E42.</p>\r\n<p>Please don&quot;t&nbsp;hesitate to contact&nbsp;us in case you have any questions.</p>'),
('42BAF092D9DC5F1A', 0, '', '<p>Posted Wed. Mar 19, 3:11 AM ET by Lyndsey Parker in Reality Rocks <br />\r\nLast week on Beatles Night, American Idol golden boy David Archuleta astonishingly flubbed the lyrics to &quot;We Can Work It Out.&quot; It seemed hard to believe that the perfectly poised Stage Search winner, who''d been such a standout only a couple weeks earlier singing John Lennon''s &quot;Imagine,&quot; would so badly mangle a Lennon/McCartney number like this.</p>\r\n<p>Well, since that incident, rumors have circulated that little David''s overbearing father was to blame. And if these rumors are true, then Jeff Archuleta just might be the creepiest reality-TV stage dad since Ashlee and Jessica''s Papa Joe Simpson.</p>\r\n<p>According to Entertainment Tonight, David''s dad Jeff &quot;yelled at David during a recording session...and even brought him to tears&quot; the day before the first Beatles Night, supposedly because he didn''t think his son''s singing was up to par. If that''s true, then gawd only knows how much he yelled after David''s blunder (or, as I like to call it, &quot;Archuletdown&quot;) last Tuesday.</p>\r\n<p>I don''t know if Jeff went easier on David this week, because David was in much better form tonight. Maybe Jeff''s alleged old intimidation tactics worked on David''s less-stellar Idol opponents this week, since L.A. Rag Mag further reports that back when a 12-year-old David competed on Star Search, his daddy dearest was banned from the set for supposedly harrassing David''s competitors.</p>\r\n<p>Don''t know if that rumor is true either, but there are some tough-as-nails contestants on Idol this year. So if Jeff talks smack to, say, feisty Chikezie or leather-clad biker nurse Amanda Overmyer--or bullies little David in front of protective mama bear Brooke White--he may get more than he bargained for.</p>'),
('095F673E6077D528', 0, '', '<p>BEIJING (AFP) - China said Wednesday it was engaged in a &quot;life or death struggle&quot; over Tibet as it announced 105 people had surrendered over an uprising and exiled groups warned hundreds had been detained. <br />\r\n<br />\r\nAfter days of violent protests against Chinese rule over the Himalayan region, China signalled it would step up a controversial campaign to quell the unrest despite intense international scrutiny ahead of the Olympics.<br />\r\n<br />\r\n&quot;We are currently in an intensely bloody and fiery struggle with the Dalai Lama clique, a life or death struggle with the enemy,&quot; Tibet''s Communist Party leader Zhang Qingli said in an editorial in the Tibet Daily on Wednesday.<br />\r\n<br />\r\n&quot;As long as we... remain of one heart, turn the masses into a walled city and work together to attack the enemy, then we can safeguard social stability and achieve a full victory in this intense battle against separatism.&quot;<br />\r\n<br />\r\nWhile China has insisted it has used no deadly force to quell the unrest, Tibet and other parts of the country that have seen Tibetans protests in recent days remained sealed off to the foreign press to prevent independent reporting.<br />\r\n<br />\r\nTibet''s parliament-in-exile said on Monday that &quot;hundreds&quot; of people had been killed in the Chinese crackdown, while activists have released photos of dead Tibetans whom they say were shot by Chinese security forces.<br />\r\n<br />\r\nChina''s official Xinhua news agency said 105 Tibetan &quot;rioters&quot; in Lhasa had surrendered by late Tuesday night, following a midnight Monday deadline in which they were promised leniency if they turned themselves in to authorities.<br />\r\n<br />\r\nChina has said Tibetan protesters killed 13 &quot;innocent civilians&quot; on Friday last week, the biggest day of protests that began a few days earlier to mark the anniversary of a failed 1959 uprising against Chinese rule.<br />\r\n<br />\r\nTibetan government vice chairman Baema Chilain said the people who gave themselves in to police had been directly involved in &quot;the beating, smashing, looting and arson&quot; on Friday, according to Xinhua.<br />\r\n<br />\r\nExiled groups and rights activists said hundreds, possibly thousands, of Tibetans had been detained and were at risk of torture amid a sweep by Chinese security forces throughout Tibet and the other hotspot areas.<br />\r\n<br />\r\n&quot;It seems like there are so many hundreds of arrests at least, possibly thousands, across the country (wider Tibetan region),&quot; Lhadon Tethong, director of Students for a Free Tibet, told AFP.<br />\r\n<br />\r\n&quot;We cannot keep up at this point... there is such a flood of information.&quot;<br />\r\n<br />\r\nHuman Rights Watch said in a statement it had unconfirmed reports of hundreds of arrests and warned those in custody were at great risk of being tortured.<br />\r\n<br />\r\n&quot;Given the long and well-documented history of torture of political activists by China''s security forces there is every reason to fear for the safety of those recently detained,&quot; said Brad Adams, Human Rights Watch''s Asia director.<br />\r\n<br />\r\n&quot;Only by giving access to independent monitors can China give the world some confidence that detainees are not being tortured or mistreated.&quot;<br />\r\n<br />\r\nA male official with the public security bureau in Lhasa would not comment on the surrenders or reported arrests on Wednesday and told AFP not to call back.<br />\r\n<br />\r\nThe Dalai Lama held talks with radical Tibetan exiles on Wednesday, his aides said, a day after the spiritual leader threatened to resign if violence in his homeland worsened.<br />\r\n<br />\r\nThe meeting with the Tibetan Youth Congress and other high-profile pressure groups came as he faced an intensifying challenge to his position as leader of the exiles'' movement, based in the northern Indian hill town of Dharamshala. <br />\r\n<br />\r\nThe Dalai Lama, who fled his homeland after the 1959 uprising, held a press conference from his base in northern India on Tuesday to defend himself against Chinese accusations that groups aligned to him were responsible for the unrest. <br />\r\n<br />\r\nThe Nobel Peace laureate, 72, said Tibetans and Chinese needed to live &quot;side by side,&quot; urged his people not to resort to violence and reiterated he was not trying to wrest the remote region from Beijing''s control. <br />\r\n<br />\r\n&quot;We must build good relations with the Chinese,&quot; he said from Dharamshala. <br />\r\n<br />\r\nBut in the article printed on Wednesday, Tibet chief Zhang made it clear what the government thought of the Dalai Lama. <br />\r\n<br />\r\n&quot;The Dalai Lama is a wolf wrapped in a robe, a monster with human face and animal''s heart,&quot; Zhang said. <br />\r\n<br />\r\nChina''s officially annexed Tibet in 1951, a year after sending troops in to &quot;liberate&quot; the region</p>'),
('8CA87CDF9412B457', 0, '', '<p>HOUSTON (AP)&mdash;It took the NBA&rsquo;s best team to end the Houston Rockets&rsquo; 22-game winning streak.<br />\r\n<br />\r\nKevin Garnett and the Boston Celtics stopped the Rockets&rsquo; remarkable run in emphatic fashion Tuesday night, pulling away in the second half for a 94-74 victory.<br />\r\n<br />\r\nGarnett scored 22 points and Paul Pierce added 20 as Boston handed Houston its first loss since a 97-89 defeat to Utah on Jan. 27. The Rockets then put together the NBA&rsquo;s second-longest winning streak, which ended 11 victories shy of the 1971-72 Los Angeles Lakers, who won 33 in a row.<br />\r\n<br />\r\n&ldquo;Our names will be mentioned there with Hall of Fame people,&rdquo; said Houston point guard Rafer Alston. &ldquo;We have something to tell our kids.&rdquo;<br />\r\n<br />\r\nIt was only Houston&rsquo;s second loss in 28 games and its fourth since a 97-93 loss in Boston on Jan. 2, a game Tracy McGrady sat out with a knee injury. The Rockets also lost for the first time in 11 games since Yao Ming went out with a season-ending foot injury on Feb. 26.<br />\r\n<br />\r\nThe Rockets were finally doomed by poor shooting and mistakes that they overcame during their streak with hustle and solid defense.<br />\r\n<br />\r\n&ldquo;I&rsquo;m too close to the situation right now to really appreciate,&rdquo; Rockets forward Shane Battier said. &ldquo;When I&rsquo;m old and gray and can&rsquo;t dribble this basketball anymore, I think I&rsquo;ll appreciate it. Right now, we&rsquo;re still in a playoff run and have got some dogs barking at our heels.&rdquo;<br />\r\n<br />\r\nBoston blanketed McGrady all night, holding Houston&rsquo;s remaining All-Star to eight points on 4-for-11 shooting. Other Rockets had routinely picked up the slack during the seven-week run whenever McGrady struggled, but the Celtics never let that happen.<br />\r\n<br />\r\nThe Rockets scored a season-low 34 points in the second half on 11-for-33 shooting.<br />\r\n<br />\r\n&ldquo;It&rsquo;s not disappointing,&rdquo; McGrady said. &ldquo;It&rsquo;s a hell of a team over there. They outplayed us. I&rsquo;ve never seen a defense like that. I mean, if they play defense like that, night in and night out, the NBA is in trouble because that was defense at its finest.&rdquo;<br />\r\n<br />\r\nLuis Scola scored 15 for Houston, which had a 15-game home streak snapped. Only the 1985-86 Rockets, who won 20 straight at The Summit, had a longer home-court streak in franchise history.<br />\r\n<br />\r\nReserve Leon Powe added 21 points for the Celtics, who&rsquo;ve won 13 of their last 14 games, the last three without All-Star guard Ray Allen, who&rsquo;s out with a sore left ankle.<br />\r\n<br />\r\nBoston beat San Antonio 93-91 on Monday night and Garnett said the Celtics were all business in their approach to Tuesday&rsquo;s game.<br />\r\n<br />\r\n&ldquo;There wasn&rsquo;t really a lot of talking on the bus last night after the win,&rdquo; Garnett said. &ldquo;We got on the plane, it was real subtle. There wasn&rsquo;t a lot of talking and I know when we&rsquo;re like that, we&rsquo;re focused.&rdquo;<br />\r\n<br />\r\nThe Rockets still have one more streak to protect&mdash;they&rsquo;ll go for their 13th straight road win in New Orleans on Wednesday night. The end of the big streak hadn&rsquo;t quite sunk in moments after this loss.<br />\r\n<br />\r\n&ldquo;I feel worse for the fans than I do for us,&rdquo; Battier said. &ldquo;We&rsquo;ll be all right. We&rsquo;ve got a game in 20 hours. We&rsquo;ll be out there trying to win another game. For the fans, they really were captivated by the streak and we hope they still get behind us and cheer us on.&rdquo;<br />\r\n<br />\r\n&nbsp;<br />\r\nMembers of the Houston Rockets&hellip; <br />\r\n<br />\r\nAP - Mar 19, 12:38 am EDT<br />\r\n&nbsp;Houston beat the Lakers on Sunday to take over sole possession of first place in the Western Conference and set up Tuesday&rsquo;s showdown between conference leaders.<br />\r\n<br />\r\nThey were tied at 40 at halftime, but Boston took control in the third quarter, led by its All-Star duo.<br />\r\n<br />\r\nGarnett swished a jumper from the top of the key 15 seconds out of the break and Pierce sank a 3-pointer on Boston&rsquo;s next trip down, the start of an 18-5 spurt. The Rockets missed eight of their first 10 shots out of the break and stopped getting the bounces that had always gone their way throughout the streak.<br />\r\n<br />\r\n&ldquo;I loved the way we played defense tonight,&rdquo; Garnett said. &ldquo;We had a lot of energy.&rdquo;<br />\r\n<br />\r\nEven when Houston got aggressive, it backfired.<br />\r\n<br />\r\nWith 3:18 left in the third quarter, Tony Allen drove the baseline and McGrady and Scola both jumped to block him. McGrady blocked the ball, but Scola whacked hit Allen and sent him hard to the court. Referee Scott Foster called a flagrant foul on Scola as Allen lay on the floor for several minutes. He finally got up and hit two free throws to put Boston up 64-52.<br />\r\n<br />\r\n&nbsp;<br />\r\nBoston Celtics'' Glen Davis, bo&hellip; <br />\r\n<br />\r\nAP - Mar 19, 12:35 am EDT<br />\r\n&nbsp;McGrady missed a jumper in the final seconds of the third quarter and Battier was there for the rebound, but tipped it right to James Posey, who started a fast break the other way.<br />\r\n<br />\r\n&ldquo;All good things must come to an end,&rdquo; McGrady said.<br />\r\n<br />\r\nThe Celtics outscored Houston 32-16 in the third quarter and built a 72-56 lead, the largest deficit the Rockets had faced since Boston had them down 20 in their first meeting. Houston went 7-for-16 from the field with six turnovers in the decisive quarter.<br />\r\n<br />\r\nBoston pushed the lead over 20 early in the fourth quarter. During a timeout, the crowd stood and applauded as a video on the scoreboard finished with a shot of the arena and the line: &ldquo;Where 22 in a row happens.&rdquo;<br />\r\n<br />\r\nThe rest of the game was a cold dose of reality.<br />\r\n<br />\r\nMcGrady left with 8:45 left and fans slowly filed out of the arena. With 2:09 left, Garnett drove down the line and hammered home a one-handed dunk, then added a milder throwdown on Boston&rsquo;s next possession.<br />\r\n<br />\r\nThe loss dropped Houston back into a first-place tie with the Lakers in the West. The Hornets are a half-game behind heading into Wednesday&rsquo;s matchup.</p>'),
('AEFA72DF8C593E49', 0, '', '<p>LOS ANGELES (Reuters) - Ashley Alexandra Dupre, the call girl at the center of the Elliot Spitzer sex scandal, watched the potential earnings from her new-found fame drop by $1 million on Tuesday as old nude videos of her emerged.<br />\r\n<br />\r\nAdult DVD distributor &quot;Girls Gone Wild&quot; discovered videos of a semi-nude Dupre, now 22, in its archives and plans to sell them on its Web site, a company spokesman said.<br />\r\n<br />\r\n&quot;Girls Gone Wild&quot; had offered to pay Dupre $1 million to pose nude in a magazine it plans to launch but, after discovering the old footage, the company withdrew its offer.<br />\r\n<br />\r\nLast week, Spitzer resigned as governor of New York after news surfaced he had paid for a sexual encounter in Washington, D.C. The New York Times revealed that Dupre was the prostitute he had hired.<br />\r\n<br />\r\nA &quot;Girls Gone Wild&quot; video crew met Dupre in Miami in 2003 and she stayed with them for a week shooting videos, the spokesman said.<br />\r\n<br />\r\n(Reporting by Bob Tourtellotte; Editing by John O''Callaghan)</p>'),
('CC30A79C30184650', 0, '', '<p>RENO, Nev. - A jury awarded a $590 million wrongful death judgment Tuesday to the young daughter of a woman killed by her estranged husband and to the slain woman''s estate. <br />\r\n<br />\r\nDarren Mack, once a wealthy pawn shop owner, is serving a life sentence for the June 2006 killing of his wife and shooting of the couple''s divorce judge.<br />\r\n<br />\r\nUnder the award in the wrongful death lawsuit, $530 million will go to the couple''s young daughter, Erika, and the rest will go to the estate of his slain wife, Charla, said Hans Jessup, administrator for the Washoe County court.<br />\r\n<br />\r\nIn a deal with prosecutors, Mack had pleaded guilty to first-degree murder in the June 2006 stabbing of Charla Mack. He also entered an Alford plea &mdash; in which a defendant acknowledges there is enough evidence for a conviction without admitting guilt &mdash; to a charge of attempted murder in the shooting of Washoe Family Court Judge Chuck Weller.<br />\r\n<br />\r\nMack said in court that he shot the judge through a courthouse window same day he slashed his wife''s throat in the garage of his southeast Reno town house.<br />\r\n<br />\r\nMack, 46, has since sought to withdraw his pleas and stand trial, maintaining that he had acted in self-defense and that his former lawyers coerced him into the plea deal.<br />\r\n<br />\r\nA judge has previously denied his motions to withdraw the pleas, but another hearing on the arguments is scheduled for next month.</p>'),
('177E1FA6485E7CD0', 0, '', '<p>SANTA MARIA, Calif. - Four men were shot to death in a junk yard Tuesday near California''s central coast in what police called &quot;a case of workplace violence.&quot; A suspect was taken into custody. <br />\r\n<br />\r\nThe shooting at Black Road Auto was reported about 4 p.m., and all four victims were dead by the time police and medics arrived, Police Chief Danny Macagni told the Santa Maria Times.<br />\r\n<br />\r\nThe victims, whose names were not immediately released, were shot at close range, Macagni said. One victim was found outside the junk yard, and three were found inside.<br />\r\n<br />\r\nThe gun used in the shooting was found at the scene.<br />\r\n<br />\r\n&quot;This is a case of workplace violence,&quot; the chief said. &quot;We have a lot of work to do here. We have a very large crime scene.&quot;<br />\r\n<br />\r\nPolice aided by California Highway Patrol helicopters searched the area to see whether there were more victims. Macagni said police believed there was &quot;a sole suspect that entered the premises and fired the shots.&quot;<br />\r\n<br />\r\nSanta Maria is a city of 92,000 people 150 miles northwest of Los Angeles, in northwestern Santa Barbara County.</p>'),
('F945F5A48A8DAED7', 0, '', '<p>LONDON - Two newspapers published extremely rare front-page apologies on Wednesday for suggesting that the parents of missing British girl Madeleine McCann had caused her death. <br />\r\n<br />\r\nThe apologies came on the same day that Britain''s High Court was due to rule on libel action brought by the McCanns over the newspaper coverage of the search for their daughter.<br />\r\n<br />\r\n&quot;Kate and Gerry McCann: Sorry&quot; read identical headlines on the front pages of The Daily Express and The Daily Star newspapers.<br />\r\n<br />\r\nThe papers, which belong to the Express Group, were among those that went furthest in claiming that the couple were responsible for their daughter''s disappearance and then covered it up.<br />\r\n<br />\r\n&quot;We acknowledge that there is no evidence whatsoever to support this theory and that Kate and Gerry are completely innocent of any involvement in their daughter''s disappearance,&quot; the identical apologies read.<br />\r\n<br />\r\nTwo further front-page apologies were expected to follow in the newspapers'' sister publications, The Sunday Express and The Sunday Star, the British Broadcasting Corp. reported.<br />\r\n<br />\r\nThe Express Group said it has paid &quot;a very substantial sum&quot; into the Madeleine Fund created by the McCanns to fund their search.<br />\r\n<br />\r\nMadeleine vanished May 3 &mdash; a few days before her 4th birthday &mdash; from a hotel room during a family vacation in Praia da Luz in Portugal''s Algarve region.<br />\r\n<br />\r\nWeeks later, Portuguese police named her parents as suspects. The couple say they were not involved in their daughter''s disappearance and have run an international campaign to find her.<br />\r\n<br />\r\nThey have complained that they are unable to give their version of events because of secrecy laws. In the meantime, British media have published stories claiming to be based on leaks, apparently from Portuguese officials.<br />\r\n<br />\r\nNo one has been charged and Portugal''s Justice Minister Alberto Costa said last month that the police investigation into the disappearance was nearing its conclusion.<br />\r\n<br />\r\n<br />\r\n</p>'),
('10B66AF3096B49A5', 0, '', '<p><strong>问题</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 网络技术的发展使网络应用越来越广泛，其应用范围的拓宽也远远超越了企业网站的范畴，大多数企业也认识到良好网站是提供企业核心竞争力的必需，纷纷在网上 搭建起了自己的营销舞台。然而，仍然有一些企业无法在互联网上对自身的经营模式和理念进行表达，在企业宣传、网络营销等方面做得不到位，这在很大程度上抑 制了企业的长足发展，在竞争力上处于劣势而使企业效益裹足不前。</p>\r\n<p><strong>解决方案</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 企业网站迫切要求电子商务投资产生商业价值，因此努力使网站设计与公司最关键的优先业务项目保持协调一致。深喉咙提出的&ldquo;资讯/服务行业网站解决方案&rdquo;正 是本着&ldquo;让信息创造价值&rdquo;的理念，一个新系统、一种全新的Web设计，全力解决资讯/服务行业网站中的信息交互，充分发挥企业网站本身应有的优势，提升信 息系统的延续性和扩展性，保护企业电子商务的投资。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 深喉咙系统作为构建资讯/服务行业网站信息的平台，建立在面向服务的架构上组织和设计，从而使Web表现与资讯/服务行业联系在一起，为企业从规划部署到系统运用缩短时间，帮助企业实现自己独特的设想。其设计思想表现在以下几个方面：<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、标准化。资讯/服务行业网站解决方案站在企业立场思考问题，其网站建立在客户的需求上，具有标准化的布局，使客户能够轻松的找到自己需要的信息，而不是在迷宫中穿梭。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、门户化。该方案把能表现企业核心价值的信息都罗列在首页，使企业和客户及时找到共同的需求。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、互动性。该方案把网站互动性考虑入内，系统本身便具有订单、留言本、评论等互动模块，这样使企业和用户及时通过便捷的方式进行沟通，极大程度上提高了用户的购买热情。</p>\r\n<p><strong>业务优势</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、拥有强大的技术开发实力，拥有多名精通NT及UNIX，JAVA，PHP，.NET，MsSQL，MySQL数据库的技术开发工程师，为客户提供电子商务解决方案，开发技术成熟。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、深喉咙对数十家企业进行过创意策划设计制作，丰富的客户服务经验，确保每一个项目的高质量。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、深喉咙网站设计设计简单明了又不失大气、稳重的气势，在Web设计方面采用标准新颖的设计理念。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、通过深喉咙系统开发的网站嵌入了良好的SEO支持，对Baidu&nbsp;、Google支持良好，便于海外推广。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5、深喉咙提供出色的技术支持服务，从业人员水平高等、服务及时。</p>\r\n<p><strong>主要功能</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、使用站点模板、预先构建的模块组件和灵活的Sidebar功能，可轻松创建站点并进行网络发布。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、完全个性化的操作界面，后台界面简洁大方，操作方便、人性化、自由化。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、方案使用.php技术，采用前台与后台代码相分离的原则，提高了网站浏览速度和网站安全性，并在很大程度上降低了服务器的承受负荷。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、根据用户需求，可定制企业模板。而且用户也可自行设计模板，以更好的体现用户的个性和特色。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、灵活的网站结构管理，用户可自行设置网站的频道结构、栏目结构，提供了直观的、网站框架的浏览和编辑界面。</p>'),
('3543F7FA8B628CD8', 0, '', '<p><strong>问题</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大部分企业初期建网时对公司网站设计并没有深刻的认识，尤其是中小企业，初期建网多为试探性操作，有的只是简单的几页介绍而已，网站信息、技术含量很少，再加上设计公司鱼目混珠，或者由于企业中缺少网站技术人员的维护，造成了网站在企业运营中的作用并不明显。</p>\r\n<p><strong>解决方案</strong></p>\r\n<p>&nbsp; &nbsp;&nbsp;&nbsp; 深喉咙是基于PHP+MySql技术独立开发的网站生成系统，其内容的创建和获取功能、存储和管理功能、权限分级管理、自由的产品设置功能、灵活的网站框架设计结构、便捷的频道/栏目增删改功能，可以快速、经济地打造出专业的网站。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 深喉咙技术解决方案是指使用一套经过完善设计的产品，并提供包含所有实施阶段专业的售前和售后服务，从规划部署到系统运用为企业提供模板定制、系统安装、项目集成等项目指导，帮助企业快速、经济地解决网站建设的高效、全新、快速和优秀的网站解决方案。</p>\r\n<p><strong>业务优势</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、拥有强大的技术开发实力，拥有多名精通NT及UNIX，JAVA，PHP，.NET，MsSQL，MySQL数据库的技术开发工程师，为客户提供电子商务解决方案，开发技术成熟。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、深喉咙外数十家企业进行过创意策划设计制作，丰富的客户服务经验，确保每一个项目的高质量。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、深喉咙网站设计设计简单明了又不失大气、稳重的气势，在Web设计方面采用标准新颖的设计理念。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、通过深喉咙系统开发的网站嵌入了良好的SEO支持，对Baidu&nbsp;、Google支持良好，便于海外推广。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5、深喉咙提供出色的技术支持服务，从业人员水平高等、服务及时。</p>\r\n<p><strong>主要功能</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、使用站点模板、预先构建的模块组件和灵活的Sidebar功能，可轻松创建站点并进行网络发布。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、完全个性化的操作界面，后台界面简洁大方，操作方便、人性化、自由化。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、方案使用.php技术，采用前台与后台代码相分离的原则，提高了网站浏览速度和网站安全性，并在很大程度上降低了服务器的承受负荷。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、根据用户需求，可定制企业模板。而且用户也可自行设计模板，以更好的体现用户的个性和特色。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、灵活的网站结构管理，用户可自行设置网站的频道结构、栏目结构，提供了直观的、网站框架的浏览和编辑界面。</p>'),
('831465C8B8F5AD4D', 0, '', '<p><strong>问题</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在竞争激烈的IT业，企业网站作为展示产品信息、服务和企业形象的平台，其主要存在的问题便是无法将海量存在、庞杂无序的信息清晰无误地传递给用户，且网 站本身便存在着信息难以收集和传递、信息内容无法恰当处理和控制，从而造成企业网站形同虚设、没有起到实质作用的后果。</p>\r\n<p><strong>解决方案</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;在当今竞争激烈的形势下，企业纷纷寻求更有效的方式最大程度上实现企业电子商务的实效，同时减少网络投资产生的高额费用。使用深喉咙IT网站解决方案，各企业可以根据特定需求定制网站模板、模块，从而制定一个栏目规划合理、导航完善、内容详实清晰的企业网站。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 深喉咙IT网站解决方案为用户提供了用于参考的网站构架、预先构建的站点模块组件和最佳网站策划，解决用户构建网站周期长、网站框架古板的问题。而且利用 该方案搭建网站简单灵活，短时间内可以使您的网站在同类网站中脱颖而出，使企业以最少的前期投资尽快从 IT 中取得回报。</p>\r\n<p><strong>业务优势</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、深喉咙团队有长期经营海外网站的建设经验，表现在熟悉外贸、精通英文以及规范化化的英文网站设计。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、深喉咙网站设计应全盘西方化，注意西方人的习惯（如字体，浏览器编码，语言细节等），网站内容形式符合西方人欣赏习惯。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、深喉咙网站设计设计简单明了又不失大气、稳重的气势，在Web设计方面采用标准新颖的设计理念。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、深喉咙拥有海外空间，可以保证海外用户访问网站的速度。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、通过深喉咙系统开发的网站嵌入了良好的SEO支持，对Baidu&nbsp;、Google支持良好，便于推广。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;6、深喉咙提供出色的技术支持服务，从业人员水平高等、服务及时。</p>\r\n<p><strong>主要功能</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、使用站点模板、预先构建的模块组件和灵活的Sidebar功能，可轻松创建站点并进行网络发布。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、完全个性化的操作界面，后台界面简洁大方，操作方便、人性化、自由化。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、方案使用.php技术，采用前台与后台代码相分离的原则，提高了网站浏览速度和网站安全性，并在很大程度上降低了服务器的承受负荷。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、根据用户需求，可定制企业模板。而且用户也可自行设计模板，以更好的体现用户的个性和特色。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、灵活的网站结构管理，用户可自行设置网站的频道结构、栏目结构，提供了直观的、网站框架的浏览和编辑界面。</p>'),
('661A8F51D3734918', 0, '', '<p><strong>问题</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 处于全球信息化的今天，国际贸易的外理和传递早已突破了时间性和地域性，电子商务已成为世界各大企业展示自身信息、处理交易的重要平台。然而我国虽已加入 WTO五年有余，但仍然有一些外销公司存在网站做法不规范、网站布局不人性化、网站设计不专业以及忽略国外用户习惯等问题，从而造成网络营销业务开展不顺 利的结果。</p>\r\n<p><strong>解决方案</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 电子商务促进了国际贸易的发展，也对国际贸易从理论到实践带来了极大的挑战。在当今经济全球化发展和知识经济的时代，国际贸易竞争呈现出诸多新的特征，如 何合理地搭建电子商务平台使其促进国际贸易的发展成为众多企业越来越关心的问题。深喉咙团队正是针对这种情况，结合公司原有的产品优势，制定了&ldquo;国际贸易 网站解决方案&rdquo;，将建站与营销融为一体，全面为企业搭建一个<font size="2">可扩展性,可靠性和互操作性的国际电子商务平台。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 深喉咙团队提出的&ldquo;国际贸易网站解决方案&rdquo;目的在于帮助客户深度拓展国际贸易互联网市场，其方案设计采用国际标准规范，针对各类目标群体制定了不同的网络营销策略，使客户以最少的前期投资尽快从电子商务平台中取得回报。</p>\r\n<p><strong>业务优势</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、深喉咙团队有长期经营海外网站的建设经验，表现在熟悉外贸、精通英文以及规范化化的英文网站设计。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、深喉咙网站设计应全盘西方化，注意西方人的习惯（如字体，浏览器编码，语言细节等），网站内容形式符合西方人欣赏习惯。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、深喉咙网站设计设计简单明了又不失大气、稳重的气势，在Web设计方面采用标准新颖的设计理念。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、深喉咙拥有海外空间，可以保证海外用户访问网站的速度。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、通过深喉咙系统开发的网站嵌入了良好的SEO支持，对Baidu&nbsp;、Google支持良好，便于海外推广。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;6、深喉咙提供出色的技术支持服务，从业人员水平高等、服务及时。</p>\r\n<p><strong>主要功能</strong></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、使用站点模板、预先构建的模块组件和灵活的Sidebar功能，可轻松创建站点并进行网络发布。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、完全个性化的操作界面，后台界面简洁大方，操作方便、人性化、自由化。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、方案使用.php技术，采用前台与后台代码相分离的原则，提高了网站浏览速度和网站安全性，并在很大程度上降低了服务器的承受负荷。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、根据用户需求，可定制企业模板。而且用户也可自行设计模板，以更好的体现用户的个性和特色。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、灵活的网站结构管理，用户可自行设置网站的频道结构、栏目结构，提供了直观的、网站框架的浏览和编辑界面。</p>'),
('2EBC4240C0D14162', 0, '', '<p><strong>概述</strong><br />\r\nDeepthroat与企业和行业精英们密切合作，提供解决方案框架。这些解决方案框架不仅充分利用了Deepthroat企业软件基础件，而且使数以千计的公司能够缩减Web平台开发周期和成本以获得竞争优势。</p>\r\n<p><strong><a href="http://deepthroat.com.cn/cn/?p=20">IT公司网站解决方案</a></strong><br />\r\n&nbsp; 通过将最佳实践、合作伙伴、支持和服务整合在一起， Deepthroat满足了IT行业独特的Web应用需求，这些IT行业包括：软件工程、网络服务、IT产品业(如：零售、代理和制造业)等。</p>\r\n<p><strong><a href="http://deepthroat.com.cn/cn/?p=21">国际贸易网站解决方案</a></strong><br />\r\n虽然有些解决方案是行业特有的，但是所有的公司都需要一套共同的业务应用。对于跨区域的网络营销平台搭建，Deepthroat 在与客户和合作伙伴密切合作并能出色实现客户目标。主要服务包括：营销平台计划、多语言支持。</p>\r\n<p><strong><a href="http://deepthroat.com.cn/cn/?p=22">咨询/服务行业网站解决方案</a></strong><br />\r\n对于有意充分利用网站来提高效率、服务质量和适应能力的企业，Deepthroat 团队是首选合作伙伴。面向服务的架构是建立在标准之上的一种组织和设计方法，使Web能够更加紧密地服务于业务目标。这些行业主要包括：广告/策划、金融 /保险、咨询业（如：教育、心理、营销）等。</p>\r\n<p><strong><a href="http://deepthroat.com.cn/cn/?p=41">技术解决方案</a></strong><br />\r\n密切注视应用基础架构是建设成为随需应变公司的关键。Deepthroat 解决方案框架为组织顺利实现其技术目标奠定了基础，它包括：定制（模版/模块）开发、软件安装配置、集成项目。</p>\r\n<p><strong>其他资源中心</strong><br />\r\nDeepthroat 理解客观地提供有关重要Web问题信息的重要性。我们开设技术资源中心就是为了提供有关下述&nbsp; 关键问题以及Deepthroat团队如何帮助客户解决这些问题的最新信息。</p>'),
('7AE4AC4C439A2987', 0, '', '<p><strong>与中国最具发展潜力的CMS合作，将赋予您许久特色优势，共创双赢局面。</strong></p>\r\n<p>合作对象：IDC服务商&nbsp;&nbsp;&nbsp; 硬件提供商&nbsp;&nbsp;&nbsp; 网络公司 ... ...</p>\r\n<p>在这个&ldquo;大象&rdquo;与&ldquo;跳蚤&rdquo;并存的年代，IT市场正变得越来越复杂，变化速度也日趋加快。互联网的普及使得各种CMS软件在不断提升产品品质，同时并 具有灵活、便捷、可靠的性能。客户在互联网应用需求已步入快速增长阶段，预计在未来的3年中，企业在应用网络基础架构和软件解决方案方面的花费将高达 1300亿美元。</p>\r\n<p>面对挑战，您怎样才能把握这一赢利商机呢？又怎样在新的市场中扩大业务，并在原有市场中站稳脚跟呢？您需要一个合作伙伴，它不但了解这些挑战，还能保证您大获成功。&nbsp; <br />\r\nDeepthroat 作为最具潜力的CMS软件，了解公司今天所面临的这些挑战，并且充分认识到结成合作伙伴，共同提供解决方案来创造客户价值的好处。与Deepthroat 合作，您将站到竞争的最前沿，不但能够扩大市场影响力，还能以较低的总体拥有成本来提供一流的解决方案。为了更快地实现双赢，Deepthroat 推出了一种联合销售的办法，以形成一个日益壮大的合作伙伴生态系统，并在各个环节提供全面的推广、销售和技术支持。</p>\r\n<p><strong>各地的许多公司都已决定与Deepthroat结成合作伙伴，原因如下：</strong></p>\r\n<p>扩大市场影响力<br />\r\n成为Deepthroat的合作伙伴，您就能够进入由Deepthroat的合作伙伴构成的生态系统 (生态系统包括合作的网络公司、IDC服务商、网络设备提供商、软件销售商) 。让我们携手合作，您可以利用Deepthroat一切有利资源和平台来创建、部署和管理端到端的解决方案。</p>\r\n<p>极高的投资回报<br />\r\n我们提供的极具竞争力的代理折扣和完善的服务使您能够更快地将产品推向市场，扩大业务机会，增强赢利能力，最终获得无与伦比的投资回报。启动<br />\r\n提供项目和服务来支持您与BEA之间的合作<br />\r\n&middot; 只面向合作伙伴的Web门户(开发中)<br />\r\n&middot; 全面的技术培训<br />\r\n&middot; 代理项目折扣</p>\r\n<p><strong>与Deepthroat合作您还将享有以下支持：</strong></p>\r\n<p>市场推广<br />\r\n提供资源，帮助您开拓新的市场和机遇<br />\r\n&middot; 行销和需求支持<br />\r\n&middot; 解决方案目录<br />\r\n&middot; 可定制的模版和模块</p>\r\n<p>销售<br />\r\n提供资源，帮助您寻找商机和完成交易<br />\r\n&middot; 合作关系负责人<br />\r\n&middot; 销售激励和折扣<br />\r\n&middot; 竞争情况信息</p>\r\n<p><br />\r\n支持<br />\r\n实时的在线支持，回答您所有的问题<br />\r\n&middot; 合作伙伴响应中心<br />\r\n&middot; 技术支持热线<br />\r\n&middot; 在线知识库<br />\r\n&middot; 社区论坛和技术文档</p>\r\n<p>立即申请合作：</p>\r\n<p>合作洽谈、咨询电话：0371-68958636-602</p>'),
('458EF974A4FD23C6', 0, '', '<p>深喉咙（Deep Throat，或称&ldquo;深喉&rdquo;）是人们对美国联邦调查局前副局长马克&middot;费尔特（W. Mark Felt）的代称，他向《华盛顿邮报》两名记者鲍勃&middot;伍德沃德（Bob Woodward）和卡尔&middot;伯恩斯坦（Carl Bernstein）透露以美国总统理察&middot;尼克森为首的共和党窃听对手民主党竞选总部的事件，这件事就是美国历史上著名的水门事件。深喉咙一直为两名记者 担任线人，是他们重要消息来源。在深喉咙的透露下，两名记者一起写一系列的文章暴露尼克森政府的不良行为。丑闻最终导致尼克森总统辞职，而白宫幕僚长鲍勃 &middot;哈特曼（H. R. Haldeman）及总统顾问约翰&middot;亚列舒曼（John Ehrlichman）被监禁。霍华德&middot;西蒙斯（Howard Simons）担任《华盛顿邮报》编辑期间，将秘密通知者取绰号&ldquo;深喉咙&rdquo;。</p>\r\n<p><strong>意义</strong></p>\r\n<p>正是这个&ldquo;深喉咙&rdquo;影响和改变了美国的政治格局。而我们用&ldquo;深喉咙&rdquo;这个代号赋予这套系统，其意不言自明。</p>'),
('54466B69A9EA75B8', 0, '', '<p>xmlol团队成立于2002年5月，主要致力于电子商务应用技术领域的探索和研发，在几年的时间里，为数千家中小企业提供多层面的电子商务应用服务和信息化建设方案，并成功运作了商业版本软件《Deepthroat企业网站生成系统》。</p>\r\n<p>Deepthroat企业网站生成系统是由XMLol团队精心打造的一款新生的CMS（内容管理系统）产品。XMLOL团队成功累积的Web技术开 发经验，以及多种Web创新设计都反映在Deepthroat CMS之中。系统本身采用先进的OO面向对象设计思想,以及成熟主流的技术架构,保证了整个系统的先进性。而且由于系统整体性规划和模块化设计，使系统通 用性强，易于维护，并且可以很容易的在此基础上进行系统拓展。自2004年9月发布Deepthroat 1.0，到今天的Deepthroat 3.4商业版本，xmlol一路走来，Deepthroat CMS也逐渐成熟。</p>\r\n<p>经过多年来的探索和学习，xmlol团队已经逐渐接近成为国内软件开发行业顶级团队，掌握着丰厚的互联网行业知识和经验.现在为了团队进一步发展， 我们已经策划好一整套完美的互联网在线[deepthroat]软件开发和运营计划，现在正式公开吸纳金额不小于100万元人民币的投资合作。</p>\r\n<p>我们竭诚邀请您与我们携手合作，共创明天，实现共赢！</p>\r\n<p><br />\r\n官方主页：<a href="http://www.deepthroat.com.cn/">http://www.deepthroat.com.cn</a></p>\r\n<p>联系电话：0371-68958636-601&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 手机号码：13613862435</p>\r\n<p>联系人：张印</p>'),
('5158BDDB23928BFF', 0, '', '<p>应广大用户需求，深喉咙官方推出双线路高性能虚拟主机,完美兼容深喉咙所有版本,现在推出特别优惠价位：</p>\r\n<ul>\r\n    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、250M(php)+国际域名+深喉咙 3.4&nbsp; 原价975元 现在仅需<strong><font color="#ff0000">800元</font></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、1G双线路虚拟主机(Asp/Asp.net/php) 原价1300元 现在仅需<strong><font color="#ff0000">1000元</font></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、更多优惠<a href="http://host.deepthroat.com.cn/">点此进入</a></li>\r\n</ul>'),
('A509981A1781866A', 0, '', '<p>本声明适用于您使用深喉咙企业网站生成系统（以下简称：Deepthroat）。</p>\r\n<p>一、总则</p>\r\n<p>您通过下载使用Deepthroat系列版本即表示您已经同意自己与本网订立本协议。本网站可随时执行全权决定更改&ldquo;条款&rdquo;。如&ldquo;条款&rdquo;有任何变更，本网将在本网站上刊载公告作为通知。经修订的&ldquo;条款&rdquo;一经在本网站上公布后，立即自动生效。</p>\r\n<p>二、使用须知</p>\r\n<p>用户在使用本站系统过程中，不得发布侵犯党和国家利益的言论，不得发布泄露国家机密的言论，不得发布有损害他们声誉的言论，不得发布侵犯他人版权的 言论等。用户在通过Deepthroat所发布、转载的文章所引起的版权问题以及因文章内包含毁谤、诋毁、攻击他人的信息等一切纠纷或后果由用户自行承 担，本网概不负责。</p>\r\n<p>三、法律责任与免责</p>\r\n<ol>\r\n    <li>本网站支持用户在使用本站系统过程中，进行合法的经营，但因为用户过失所造成的后果由用户自行承担，一切未经过本网官方认可的经营活动均与本官方站点无关。</li>\r\n    <li>&ldquo;您 的资料&rdquo;包括您在注册、使用本站服务过程中、在任何公开信息场合或通过任何电子邮件形式，向本站或其他用户提供的任何资料。您应对&ldquo;您的资料&rdquo;负全部责 任，而本站仅作为您在网上发布和刊登&quot;您的资料&quot;的被动渠道。本网站维持并及时更新会员资料，使其保持真实、准确、完整和反映当前情况。倘若您提供任何不 真实、不准确、不完整或不能反映当前情况的资料，或本网有合理理由怀疑该资料不真实、不准确、不完整或不能反映当前情况，本网站有权暂停或终止您在本网站 的注册身份及资料。</li>\r\n    <li>关于帐号的安全性：在登记过程中，您将选择会员注册名和密码。您须自行负责对您的会员注册名和密码保密，且须对您在会员注册名和密码下发生的所有活动承担责任。</li>\r\n    <li>系统的版权：本网对所有开发的或合作开发的服务的知识产权拥有所有权或使用权，这些服务受到适用的知识产权、版权、商标、服务商标、专利或其他法律的保护。</li>\r\n    <li>用户利益保障：本站不提供对用户数据进行备份工作，如因为操作失误、黑客攻击以及服务器故障引起的数据损失，本网将尽可能地恢复，但这种情况下所导致的损失为不可抗拒因素，本站具有免责权利。</li>\r\n</ol>');
--<br>--
CREATE TABLE `##_menu` (
  `id` int(11) NOT NULL auto_increment,
  `menuName` varchar(24) NOT NULL default '',
  `title` varchar(50) NOT NULL default '',
  `summary` varchar(200) NOT NULL default '',
  `keys` varchar(50) NOT NULL default '',
  `type` varchar(14) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `link` varchar(200) NOT NULL default '',
  `deep` int(11) NOT NULL default '0',
  `parentId` int(11) NOT NULL default '0',
  `params` text,
  `published` tinyint(1) NOT NULL default '0',
  `isClaw` tinyint(1) NOT NULL default '0',
  `template` varchar(40) NOT NULL default '',
  `isfun` tinyint(4) NOT NULL default '0',
  `isComment` tinyint(4) NOT NULL default '0',
  `level` int(11) NOT NULL default '0',
  `isHidden` tinyint(1) NOT NULL default '0',
  `origialPic` varchar(200) NOT NULL default '',
  `smallPic` varchar(200) NOT NULL default '',
  `width` int(11) NOT NULL default '130',
  `hight` int(11) NOT NULL default '130',
  `isExternalLinks` tinyint(4) NOT NULL default '0',
  `dtLanguage` varchar(10) NOT NULL default 'cn',
  `redirectUrl` varchar(200) default '',
  `related_common` varchar(20) NOT NULL default 'common.php',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
INSERT INTO `##_menu` (`id`, `menuName`, `title`, `summary`, `keys`, `type`, `ordering`, `link`, `deep`, `parentId`, `params`, `published`, `isClaw`, `template`, `isfun`, `isComment`, `level`, `isHidden`, `origialPic`, `smallPic`, `width`, `hight`, `dtLanguage`, `isExternalLinks`, `redirectUrl`, `related_common`) VALUES (16, 'EnterprisesHonor', 'EnterprisesHonor', 'Enterprises Honor', '', 'article', 0, '', 1, 10, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(15, 'CorporateCulture', 'Corporate Culture', 'Corporate Culture', '', 'article', 0, '', 1, 10, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(14, 'ContactUs', 'Contact Us', 'Contact Us', '', 'article', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(13, 'Recruitmenting', 'Recruitment', 'Recruitment', '', 'jobs', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(12, 'ProductsCenter', 'Products', 'Products', '', 'product', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(11, 'eNews', 'News', 'NewsCenter', '', 'calllist', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(10, 'CompanyProfile', 'Company Profile', 'Company Profile', '', 'article', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(9, 'industry', '行业咨询', '行业咨询', '', 'list', 0, '', 1, 2, '', 0, 0, '', 0, 0, 0, 0, '/upload/200811/20081122102102364.jpg', '/upload/200811/s_20081122102102364.jpg', 130, 130, 'cn', 0, '', 'common.php'),
(8, 'hotNews', '热点新闻', '热点新闻', '', 'list', 0, '', 1, 2, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(7, 'honours', '企业荣誉', '企业荣誉', '', 'article', 0, '', 1, 1, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(6, 'culture', '企业文化', '企业文化', '', 'article', 0, '', 1, 1, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(5, 'contact', '联系我们', '联系我们', '', 'article', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(4, 'recruitment', '人才招聘', '人才招聘', '', 'jobs', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(3, 'product', '产品中心', '产品中心', '', 'product', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(1, 'company', '公司简介', '公司简介', '', 'article', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(2, 'news', '新闻中心', '新闻中心', '', 'calllist', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '/upload/200811/20081122102023799.jpg', '/upload/200811/s_20081122102023799.jpg', 130, 130, 'cn', 0, '', 'common.php'),
(17, 'HotofNews', 'Hot News', 'Hot News', '', 'list', 0, '', 1, 11, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(18, 'IndustryAdvisory', 'Industry Advisory', 'Industry Advisory', '', 'list', 0, '', 1, 11, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(19, 'guestbook', '留言簿', '留言簿', '', 'guestbook', 0, '', 1, 5, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(20, 'messages', 'guestbook', '', '', 'guestbook', 0, '', 1, 14, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(21, 'ordering', '企业订单', '企业订单', '', 'order', 0, '', 1, 5, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(22, 'eorders', 'Ordering', 'orderings', '', 'order', 0, '', 1, 14, '', 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(24, 'friendlinks', '友情链接', '', '', 'linkers', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common_2.php'),
(25, 'friendlink', 'friendlink', '', '', 'linkers', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(26, 'toupiao', '投票', '', '', 'poll', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common.php'),
(27, 'poll', 'poll', '', '', 'poll', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(29, 'vedio', 'vedio', '', '', 'video', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'en', 0, '', 'common.php'),
(28, 'vedio', '視頻', '', '', 'video', 0, '', 0, 0, NULL, 0, 0, '', 0, 0, 0, 0, '', '', 130, 130, 'cn', 0, '', 'common_2.php');
--<br>--
CREATE TABLE `##_models_reg` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(30) NOT NULL default '',
  `model_name` varchar(200) NOT NULL default '',
  `config` text,
  `install` text,
  `unstall` text,
  `summary` text,
  `version` varchar(10) NOT NULL default '',
  `readonly` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;
--<br>--
INSERT INTO `##_models_reg` (`id`, `type`, `model_name`, `config`, `install`, `unstall`, `summary`, `version`, `readonly`) VALUES (9, 'guestbook', '留言模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>留言模块</model_name>\r\n	<type>guestbook</type>\r\n	<summary>这是一个留言模块，主要通过收集、整理、回复客户留言，提高网站互动性，为网站带来活力和商机。</summary>\r\n	<version>70510</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/guestbook/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/guestbook/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_guestbook.php</param>\r\n		<param name="destination">admini/controllers/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_guestbook.php</param>\r\n		<param name="destination">admini/models/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/guestbook/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/guestbook/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n	<param name="source">index_guestbook.php</param>\r\n	<param name="destination">content/index/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">CREATE TABLE `dt_guestbook` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `name` varchar(30) NOT NULL default '''',\r\n	  `email` varchar(60) NOT NULL default '''',\r\n	  `homepage` varchar(60) NOT NULL default '''',\r\n	  `qq` varchar(15) NOT NULL default '''',\r\n	  `ip` varchar(40) NOT NULL default '''',\r\n	  `isPublic` int(11) NOT NULL default ''0'',\r\n	  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n	  `content` text NOT NULL,\r\n	  `content1` text NOT NULL,\r\n	  `channelId` int(11) NOT NULL default ''0'',\r\n	  `telephone` varchar(16) NOT NULL default '''',\r\n	  `company` varchar(60) NOT NULL,\r\n	  `auditing` tinyint(4) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/guestbook/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/guestbook</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/guestbook.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}guestbook` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''guestbook''</param>\r\n	</cmd>\r\n</deepthroat>', '这是一个留言模块，主要通过收集、整理、回复客户留言，提高网站互动性，为网站带来活力和商机。', '70510', 0),
(10, 'calllist', '列表调用模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>列表调用模块</model_name>\r\n	<type>calllist</type>\r\n	<summary>这是一个列表调用模块，用来调用新闻频道或栏目。</summary>\r\n	<version>70905</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="copy">\r\n<param name="source">admini_views_index.php</param>\r\n<param name="destination">admini/views/calllist/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_controllers_calllist.php</param>\r\n<param name="destination">admini/controllers/calllist.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_models_calllist.php</param>\r\n<param name="destination">admini/models/calllist.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">content_index.php</param>\r\n<param name="destination">content/calllist/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_index.php</param>\r\n<param name="destination">content/calllist/parts_index.php</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">CREATE TABLE `{TB_PREFIX}calllist` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `channelId` int(11) NOT NULL,\r\n  `callId` varchar(400) character set utf8 NOT NULL,\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n</cmd>\r\n</deepthroat>\r\n\r\n\r\n', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="unlink">\r\n<param name="file">admini/views/calllist/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/controllers/calllist.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/models/calllist.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/calllist/</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DROP TABLE `{TB_PREFIX}calllist` </param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''calllist''</param>\r\n</cmd>\r\n</deepthroat>', '这是一个列表调用模块，用来调用新闻频道或栏目。', '70905', 0),
(8, 'video', '视频模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>视频模块</model_name>\r\n	<type>video</type>\r\n	<summary>这是一个视频模块，可以展示例如企业形象影片之类的视频。</summary>\r\n	<version>70507</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="copy">\r\n<param name="source">admini_views_create.php</param>\r\n<param name="destination">admini/views/video/create.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_views_index.php</param>\r\n<param name="destination">admini/views/video/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_views_edit.php</param>\r\n<param name="destination">admini/views/video/edit.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_controllers_video.php</param>\r\n<param name="destination">admini/controllers/video.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_models_video.php</param>\r\n<param name="destination">admini/models/video.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">content_index.php</param>\r\n<param name="destination">content/video/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_index.php</param>\r\n<param name="destination">content/video/parts_index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_view.php</param>\r\n<param name="destination">content/video/parts_view.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">index_video.php</param>\r\n<param name="destination">content/index/video.php</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">CREATE TABLE `{TB_PREFIX}video` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `channelId` int(11) NOT NULL default ''0'',\r\n  `filePath` varchar(200) NOT NULL,\r\n  `fileSize` varchar(50) default NULL,\r\n  `title` varchar(150) NOT NULL,\r\n  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n  `tags` varchar(200) NOT NULL,\r\n  `description` text NOT NULL,\r\n  `picture` varchar(200) NOT NULL,\r\n  `counts` int(11) NOT NULL default ''0'',\r\n  `cguid` varchar(16) NOT NULL,\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;</param>\r\n</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="unlink">\r\n<param name="file">admini/views/video/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/controllers/video.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/models/video.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/video/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/index/video.php</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DROP TABLE `{TB_PREFIX}video` </param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''video''</param>\r\n</cmd>\r\n</deepthroat>', '这是一个视频模块，可以展示例如企业形象影片之类的视频。', '70507', 0),
(7, 'order', '订单模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>订单模块</model_name>\r\n	<type>order</type>\r\n	<summary>这是一个订单模块，用于产生一个客户订单。</summary>\r\n	<version>70511</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="copy">\r\n<param name="source">admini_views_edit.php</param>\r\n<param name="destination">admini/views/order/edit.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_views_index.php</param>\r\n<param name="destination">admini/views/order/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_controllers_order.php</param>\r\n<param name="destination">admini/controllers/order.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_models_order.php</param>\r\n<param name="destination">admini/models/order.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">content_index.php</param>\r\n<param name="destination">content/order/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_index.php</param>\r\n<param name="destination">content/order/parts_index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_create.php</param>\r\n<param name="destination">content/order/parts_create.php</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">CREATE TABLE `{TB_PREFIX}order` (\r\n  `id` int(11) NOT NULL auto_increment,\r\n  `productName` varchar(100) default NULL,\r\n  `productSN` varchar(100) default NULL,\r\n  `deliveryTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n  `transports` varchar(100) default NULL,\r\n  `linkman` varchar(100) default NULL,\r\n  `unit` varchar(100) default NULL,\r\n  `address` varchar(100) default NULL,\r\n  `phone` varchar(100) default NULL,\r\n  `email` varchar(100) default NULL,\r\n  `remark` text,\r\n  `handling` int(11) NOT NULL default ''0'',\r\n  `result` text,\r\n  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n  `channelId` int(11) NOT NULL default ''0'',\r\n  PRIMARY KEY  (`id`)\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="unlink">\r\n<param name="file">admini/views/order/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/controllers/order.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/models/order.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/order/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/index/index_order_0.php</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DROP TABLE `{TB_PREFIX}order` </param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''order''</param>\r\n</cmd>\r\n</deepthroat>', '这是一个订单模块，用于产生一个客户订单。', '70511', 0),
(6, 'jobs', '招聘模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>招聘模块</model_name>\r\n	<type>jobs</type>\r\n	<summary>招聘模块，用于企业发布招聘信息、遴选人才。</summary>\r\n	<version>70510</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create.php</param>\r\n		<param name="destination">admini/views/jobs/create.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/jobs/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/jobs/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_viewresume.php</param>\r\n		<param name="destination">admini/views/jobs/viewresume.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_viewresumes.php</param>\r\n		<param name="destination">admini/views/jobs/viewresumes.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_jobs.php</param>\r\n		<param name="destination">admini/controllers/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_jobs.php</param>\r\n		<param name="destination">admini/models/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/jobs/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/jobs/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_send.php</param>\r\n		<param name="destination">content/jobs/parts_send.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_jobs.php</param>\r\n		<param name="destination">content/index/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_jobs_0.php</param>\r\n		<param name="destination">content/index/index_jobs_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql"> CREATE TABLE `{TB_PREFIX}jobs` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL,\r\n	  `jobName` varchar(200) NOT NULL,\r\n	  `jobKind` varchar(100) NOT NULL,\r\n	  `requireNum` int(11) NOT NULL,\r\n	  `experience` varchar(50) NOT NULL,\r\n	  `address` varchar(200) NOT NULL,\r\n	  `age` varchar(100) NOT NULL,\r\n	  `height` varchar(50) NOT NULL,\r\n	  `languageSkill` varchar(100) NOT NULL,\r\n	  `lastTime` varchar(50) NOT NULL,\r\n	  `salary` varchar(50) NOT NULL,\r\n	  `educational` varchar(50) NOT NULL,\r\n	  `isHouse` varchar(50) NOT NULL,\r\n	  `sex` varchar(4) NOT NULL,\r\n	  `computerLevel` varchar(100) NOT NULL,\r\n	  `summary` text NOT NULL,\r\n	  `telphone` varchar(50) NOT NULL,\r\n	  `email` varchar(100) NOT NULL,\r\n	  `dtTime` datetime NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n		</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/jobs/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/jobs/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/jobs.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/index_jobs_0.php</param>\r\n	</cmd>	\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}jobs` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''jobs''</param>\r\n	</cmd>\r\n</deepthroat>', '招聘模块，用于企业发布招聘信息、遴选人才。', '70510', 0),
(5, 'picture', '图片模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>图片模块</model_name>\r\n	<type>picture</type>\r\n	<summary>这是一个图片模块，可以展示企业形象、发布图片新闻等。</summary>\r\n	<version>70510</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create.php</param>\r\n		<param name="destination">admini/views/picture/create.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/picture/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/picture/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_picture.php</param>\r\n		<param name="destination">admini/controllers/picture.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_picture.php</param>\r\n		<param name="destination">admini/models/picture.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/picture/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/picture/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_view.php</param>\r\n		<param name="destination">content/picture/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_picture_0.php</param>\r\n		<param name="destination">content/index/index_picture_0.php</param>\r\n	</cmd>\r\n<cmd type="sql">\r\n		<param name="sql">CREATE TABLE `{TB_PREFIX}picture` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default ''0'',\r\n	  `title` varchar(60) NOT NULL default '''',\r\n	  `picture` varchar(255) NOT NULL,\r\n	  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n	  `spicture` varchar(255) NOT NULL,\r\n	  `tags` varchar(60) NOT NULL default '''',\r\n	  `description` text NOT NULL,\r\n	  `isTopic` int(11) NOT NULL,\r\n	  `isImportant` int(11) NOT NULL,\r\n	  `counts` int(11) NOT NULL,\r\n	  `lpicture` varchar(255) NOT NULL,\r\n	  `uid` int(11) NOT NULL,\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n		</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/picture/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/picture.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/picture.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/picture/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/index_picture_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}picture` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''picture''</param>\r\n	</cmd>\r\n</deepthroat>', '这是一个图片模块，可以展示企业形象、发布图片新闻等。', '70510', 0),
(4, 'download', '下载模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>下载模块</model_name>\r\n	<type>download</type>\r\n	<summary>这是一个下载模块，可以用户提供软件、文档资料的下载。</summary>\r\n	<version>70511</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create.php</param>\r\n		<param name="destination">admini/views/download/create.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/download/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/download/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_download.php</param>\r\n		<param name="destination">admini/controllers/download.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_download.php</param>\r\n		<param name="destination">admini/models/download.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/download/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/download/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_view.php</param>\r\n		<param name="destination">content/download/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_download_0.php</param>\r\n		<param name="destination">content/index/index_download_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n	<param name="sql">CREATE TABLE `{TB_PREFIX}download` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default ''0'',\r\n	  `softwareName` varchar(200) NOT NULL default ''NOT NULL'',\r\n	  `softwareSize` varchar(200) default NULL,\r\n	  `language` varchar(40) default NULL,\r\n	  `classification` varchar(200) default NULL,\r\n	  `platform` varchar(200) default NULL,\r\n	  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n	  `introduce` text,\r\n	  `filePath` varchar(200) NOT NULL default ''NOT NULL'',\r\n	  `counts` int(11) NOT NULL default ''0'',\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/download/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/download.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/download.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/download/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/index_download_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}download` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''download''</param>\r\n	</cmd>\r\n</deepthroat>', '这是一个下载模块，可以用户提供软件、文档资料的下载。', '70511', 0),
(2, 'list', '文章列表模块', '', '', '', '', '70506', 1),
(3, 'product', '产品模块', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>产品模块</model_name>\r\n	<type>product</type>\r\n	<summary>产品模块，用于展示企业产品信息。</summary>\r\n	<version>70510</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create.php</param>\r\n		<param name="destination">admini/views/product/create.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/product/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_createcategory.php</param>\r\n		<param name="destination">admini/views/product/createcategory.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_editcategory.php</param>\r\n		<param name="destination">admini/views/product/editcategory.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/product/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_product.php</param>\r\n		<param name="destination">admini/controllers/product.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_product.php</param>\r\n		<param name="destination">admini/models/product.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_product_category.php</param>\r\n		<param name="destination">admini/models/product_category.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/product/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/product/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_view.php</param>\r\n		<param name="destination">content/product/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_product.php</param>\r\n		<param name="destination">content/index/product.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_product_0.php</param>\r\n		<param name="destination">content/index/index_product_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">CREATE TABLE `{TB_PREFIX}product` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `name` varchar(200) NOT NULL,\r\n	  `sn` varchar(100) NOT NULL,\r\n	  `spec` varchar(100) NOT NULL,\r\n	  `dtTime` datetime NOT NULL,\r\n	  `sellingPrice` decimal(10,0) NOT NULL,\r\n	  `preferPrice` decimal(10,0) NOT NULL,\r\n	  `summary` varchar(200) NOT NULL,\r\n	  `content` text NOT NULL,\r\n	  `origialPic` varchar(255) NOT NULL,\r\n	  `middlePic` varchar(255) NOT NULL,\r\n	  `smallPic` varchar(255) NOT NULL,\r\n	  `categoryId` int(11) NOT NULL,\r\n	  `counts` int(11) NOT NULL,\r\n	  `ordering` int(11) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">\r\n		CREATE TABLE `{TB_PREFIX}product_category` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `menuName` varchar(24) NOT NULL default '''',\r\n	  `title` varchar(50) NOT NULL default '''',\r\n	  `summary` varchar(200) NOT NULL default '''',\r\n	  `keys` varchar(50) NOT NULL default '''',\r\n	  `type` varchar(14) NOT NULL default '''',\r\n	  `ordering` int(11) NOT NULL default ''0'',\r\n	  `link` varchar(255) NOT NULL,\r\n	  `deep` int(11) NOT NULL default ''0'',\r\n	  `channelId` int(11) NOT NULL default ''0'',\r\n	  `params` text,\r\n	  `published` tinyint(1) NOT NULL default ''0'',\r\n	  `isClaw` tinyint(1) NOT NULL,\r\n	  `template` varchar(40) NOT NULL,\r\n	  `isfun` tinyint(4) NOT NULL,\r\n	  `isComment` tinyint(4) NOT NULL,\r\n	  `cguid` varchar(16) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n	</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/product/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/product.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/product_category.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/product.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/product/</param>\r\n	</cmd>\r\n		<cmd type="unlink">\r\n		<param name="file">content/index/product.php</param>\r\n	</cmd>\r\n		<cmd type="unlink">\r\n		<param name="file">content/index/index_product_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}product` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}product_category` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''product''</param>\r\n	</cmd>\r\n</deepthroat>', '产品模块，用于展示企业产品信息。', '70510', 0),
(1, 'article', '图文模块', '', '', '', '', '70506', 1),
(11, 'solutions', '解决方案模块', '', '', '', '', '70925', 0),
(12, 'webmap', '网站地图', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>网站地图</model_name>\r\n	<type>webmap</type>\r\n	<summary>这是一个网站地图模块，用来展示网站频道或栏目。</summary>\r\n	<version>80905</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="copy">\r\n<param name="source">admini_views_index.php</param>\r\n<param name="destination">admini/views/webmap/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_controllers_webmap.php</param>\r\n<param name="destination">admini/controllers/webmap.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">admini_models_webmap.php</param>\r\n<param name="destination">admini/models/webmap.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">content_index.php</param>\r\n<param name="destination">content/webmap/index.php</param>\r\n</cmd>\r\n<cmd type="copy">\r\n<param name="source">parts_index.php</param>\r\n<param name="destination">content/webmap/parts_index.php</param>\r\n</cmd>\r\n</deepthroat>\r\n\r\n\r\n', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n<cmd type="unlink">\r\n<param name="file">admini/views/webmap/</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/controllers/webmap.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">admini/models/webmap.php</param>\r\n</cmd>\r\n<cmd type="unlink">\r\n<param name="file">content/webmap/</param>\r\n</cmd>\r\n<cmd type="sql">\r\n<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''webmap''</param>\r\n</cmd>\r\n</deepthroat>', '这是一个网站地图模块，用来展示网站频道或栏目。', '80905', 0),
(13, 'poll', '投票系统', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>投票系统</model_name>\r\n	<type>poll</type>\r\n	<summary>这是一个投票系统，用来与用户进行互动，了解用户心理。</summary>\r\n	<version>81124</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/poll/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create_title.php</param>\r\n		<param name="destination">admini/views/poll/create_title.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit_title.php</param>\r\n		<param name="destination">admini/views/poll/edit_title.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create_choice.php</param>\r\n		<param name="destination">admini/views/poll/create_choice.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit_choice.php</param>\r\n		<param name="destination">admini/views/poll/edit_choice.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_poll.php</param>\r\n		<param name="destination">admini/controllers/poll.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_poll.php</param>\r\n		<param name="destination">admini/models/poll.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_poll_category.php</param>\r\n		<param name="destination">admini/models/poll_category.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/poll/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/poll/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_view.php</param>\r\n		<param name="destination">content/poll/parts_view.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_poll.php</param>\r\n		<param name="destination">content/index/poll.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_poll_0.php</param>\r\n		<param name="destination">content/index/index_poll_0.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">CREATE TABLE `{TB_PREFIX}poll` (\r\n		`id` int(11) NOT NULL auto_increment,\r\n		`channelId` int(11) NOT NULL default ''0'',\r\n		`choice` varchar(255) NOT NULL,\r\n		`categoryId` int(11) NOT NULL default ''0'',\r\n		`isdefault` set(''a'',''b'') NOT NULL default ''a'',\r\n		`ordering` int(11) NOT NULL default ''0'',\r\n		`num` int(11) NOT NULL default ''1'',\r\n		PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">\r\n		CREATE TABLE `{TB_PREFIX}poll_category` (\r\n		`id` int(11) NOT NULL auto_increment,\r\n		`title` varchar(200) NOT NULL default '''',\r\n		`choice` set(''a'',''b'') default ''a'',\r\n		`client_ip` longtext,\r\n		`channelId` int(11) NOT NULL default ''0'',\r\n		`dtTime` date NOT NULL default ''0000-00-00'',\r\n		`ordering` int(11) NOT NULL default ''0'',\r\n		PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n	</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/poll/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/poll.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/poll.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/poll_category.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/poll/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/poll.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/index_poll_0.php</param>\r\n	</cmd>	\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}poll` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''poll''</param>\r\n	</cmd>\r\n</deepthroat>', '这是一个投票系统，用来与用户进行互动，了解用户心理。', '81124', 0),
(14, 'linkers', '友情链接', '<?xml version="1.0" encoding="utf-8"?>\r\n<config>\r\n	<model_name>友情链接</model_name>\r\n	<type>linkers</type>\r\n	<summary>这是一个友情链接模块，可以添加网站的友情链接。</summary>\r\n	<version>80404</version>\r\n</config>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_create.php</param>\r\n		<param name="destination">admini/views/linkers/create.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_edit.php</param>\r\n		<param name="destination">admini/views/linkers/edit.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_views_index.php</param>\r\n		<param name="destination">admini/views/linkers/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_controllers_linkers.php</param>\r\n		<param name="destination">admini/controllers/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">admini_models_linkers.php</param>\r\n		<param name="destination">admini/models/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">content_index.php</param>\r\n		<param name="destination">content/linkers/index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">parts_index.php</param>\r\n		<param name="destination">content/linkers/parts_index.php</param>\r\n	</cmd>\r\n	<cmd type="copy">\r\n		<param name="source">index_linkers.php</param>\r\n		<param name="destination">content/index/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n	<param name="sql">CREATE TABLE `{TB_PREFIX}linkers` (\r\n	  `id` int(11) NOT NULL auto_increment,\r\n	  `channelId` int(11) NOT NULL default ''0'',\r\n	  `picture` varchar(255) NOT NULL,\r\n	  `linkerName` varchar(100) NOT NULL default '''',\r\n	  `linkAddress` varchar(150) NOT NULL,\r\n	  `summary` text NOT NULL,\r\n	  `dtTime` datetime NOT NULL default ''0000-00-00 00:00:00'',\r\n	  `indexPicture` varchar(255) NOT NULL,\r\n	  `counts` int(11) NOT NULL default ''200'',\r\n	  `smallPic` varchar(255) NOT NULL,\r\n	  PRIMARY KEY  (`id`)\r\n	) ENGINE=MyISAM DEFAULT CHARSET=utf8;</param>\r\n	</cmd>\r\n</deepthroat>', '<?xml version="1.0" encoding="utf-8"?>\r\n<deepthroat>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/views/linkers/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/controllers/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">admini/models/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/linkers/</param>\r\n	</cmd>\r\n	<cmd type="unlink">\r\n		<param name="file">content/index/linkers.php</param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DROP TABLE `{TB_PREFIX}linkers` </param>\r\n	</cmd>\r\n	<cmd type="sql">\r\n		<param name="sql">DELETE FROM `{TB_PREFIX}models_reg` WHERE `type` = ''linkers''</param>\r\n	</cmd>\r\n</deepthroat>', '这是一个友情链接模块，可以添加网站的友情链接。', '80404', 0);
--<br>--
CREATE TABLE `##_order` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
CREATE TABLE `##_picture` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
CREATE TABLE `##_product` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;
--<br>--
INSERT INTO `##_product` (`id`, `channelId`, `name`, `sn`, `spec`, `dtTime`, `sellingPrice`, `preferPrice`, `summary`, `content`, `origialPic`, `middlePic`, `smallPic`, `indexPicture`, `categoryId`, `counts`, `ordering`, `sign`) VALUES
(5, 3, '多普达S1', '多普达S1', '智能手机', '2008-03-19 14:54:12', 3500.00, 3199.00, '白色版的多普达S1由于其钢琴烤漆的机身，给人感觉高档中不失活泼时尚。十分适合现在的年轻人使用。', '<p><font id="Zoom">多普达S1内部拥有一颗主频为201MHz的TI OMAP 850处理器。运行频率201MHz，64MB DDR RAM，128MB ROM的内存配备，用户还可通过MicroSD卡扩展。S1采用的TouchFLO技术是此款产品最大的亮点，TouchFLO技术的特点是用手指替代了 手写笔，用户只需用手指在屏幕上轻轻滑动便可完成各种操作，同样TouchFLO技术也支持手写笔功能，机器本身能自动区分手写笔与手指。</font></p>', '/upload/200803/2008031914541210.jpg', '/upload/200803/m_2008031914541210.jpg', '/upload/200803/s_2008031914541210.jpg', '/upload/200803/i_2008031914541210.jpg', 2, 25, 0, 0),
(6, 3, '草莓BB8700g', 'BB8700g', '智能手机', '2008-03-19 14:58:38', 3600.00, 3200.00, '莓手机的配置也一向是注意键盘操盘与屏幕显示。这款8700g也是一样，配备了横屏QVGA的屏幕以及QWERT的键盘。同样，定位于商务应用的这款黑莓也一如既往的没有配备摄像头以及存储卡插槽。', '<p>整个8700g的设计就像一把盾牌，连空格键都是这样。键盘上没有像多普达或诺基亚的横屏机器的摇杆键，这也可以说是黑莓8700g的一大特色。在用惯了 摇杆导航键的其他手机后，你一定会对没有这个设计的黑莓感觉大不适应。但绝对值得一提的是，黑莓的操作系统可以让她的键盘得到最大的功能发挥，你可以在很 多地方（比如信息，电话，主界面等等）使用很多的快捷键，从而更方便快捷的使用这款手机。毫不夸张地说，这款手机的快捷键设计的非常合理与便捷。</p>', '/upload/200803/20080319145838251.jpg', '/upload/200803/m_20080319145838251.jpg', '/upload/200803/s_20080319145838251.jpg', '/upload/200803/i_20080319145838251.jpg', 2, 29, 7, 0),
(4, 3, '康佳KJ-25', 'KJ-25', 'KJ-25', '2008-03-19 14:43:12', 12000.00, 9999.00, '图像效果比较规矩，对比度还是很不错的，色彩艳丽而不夸张', '<p>这款46英寸液晶采用三星屏，泰鼎芯片，和索尼BRAVIA ENGINE同样的技术。图像效果比较规矩，对比度还是很不错的，色彩艳丽而不夸张，具有HDMI接口和VGA接口，但是网友反应音质较差，音响噪音过大。最低可达9999元。</p>', '/upload/200803/20080319144251460.jpg', '/upload/200803/m_20080319144251460.jpg', '/upload/200803/s_20080319144251460.jpg', '/upload/200803/i_20080319144251460.jpg', 1, 28, 4, 0),
(3, 3, '飞利浦', 'HJK80', 'GYU-25', '2008-03-19 14:41:48', 15000.00, 12600.00, '采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现', '<p>属于飞利浦高端产品，采用LPL屏，具有100Hz技术和流光溢彩2代效果，装饰效果好，流光溢彩采用的是LED灯管。图像对比度、通透性都非常出色，色彩表现极佳，毫无夸张</p>', '/upload/200803/20080319144148185.jpg', '/upload/200803/m_20080319144148185.jpg', '/upload/200803/s_20080319144148185.jpg', '/upload/200803/i_20080319144148185.jpg', 1, 37, 5, 0),
(2, 3, '飞利浦N25', 'DHJ-25', 'HIPLK', '2008-03-19 14:40:31', 9800.00, 8500.00, '色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实', '<p>这是夏新的一款40英寸液晶电视，采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。具有2组HDMI，1组VGA接口。</p>', '/upload/200803/20080319144031478.jpg', '/upload/200803/m_20080319144031478.jpg', '/upload/200803/s_20080319144031478.jpg', '/upload/200803/i_20080319144031478.jpg', 1, 24, 2, 0),
(1, 3, '夏新', 'ST-88HT', 'MHJK', '2008-03-19 14:39:25', 12000.00, 10500.00, '色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。', '<p>这是夏新的一款40英寸液晶电视，采用LPL的S-IPS面板，色彩艳丽，图像清晰锐利，图像通透性高，暗部细节丰富，高亮部分有较好的表现，图像的质感真实。具有2组HDMI，1组VGA接口。</p>', '/upload/200803/20080319143925848.jpg', '/upload/200803/m_20080319143925848.jpg', '/upload/200803/s_20080319143925848.jpg', '/upload/200803/i_20080319143925848.jpg', 1, 24, 0, 0),
(7, 12, 'Amoi', 'ST-88HT', 'MHJK', '2008-03-19 17:30:59', 12000.00, 10500.00, 'Colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true.', '<div dir="ltr" id="result_box">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>', '/upload/200803/20080319173059209.jpg', '/upload/200803/m_20080319173059209.jpg', '/upload/200803/s_20080319173059209.jpg', '/upload/200803/i_20080319173059209.jpg', 3, 23, 0, 0),
(8, 12, 'Philips N25', 'DHJ-25', 'HIPLK', '2008-03-19 17:32:57', 9800.00, 8500.00, 'Colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true', '<div dir="ltr" id="result_box">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>', '/upload/200803/20080319173257867.jpg', '/upload/200803/m_20080319173257867.jpg', '/upload/200803/s_20080319173257867.jpg', '/upload/200803/i_20080319173257867.jpg', 3, 23, 0, 0),
(9, 12, 'Philips', 'HJK80', 'GYU-25', '2008-03-19 17:35:06', 15000.00, 12600.00, 'Using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance.', '<div dir="ltr" id="result_box">This is the Amoi a 40-inch LCD TV, using LPL S-IPS panel, colourful, clear sharp images, image permeability, dark rich details, highlighting some of the better performance, image texture true. HDMI with Group 2, Group 1 VGA interface.</div>', '/upload/200803/20080319173506675.jpg', '/upload/200803/m_20080319173506675.jpg', '/upload/200803/s_20080319173506675.jpg', '/upload/200803/i_20080319173506675.jpg', 3, 27, 0, 0),
(10, 12, 'Konka KJ-25', 'Konka KJ-25', 'KJ-25', '2008-03-19 17:36:50', 12000.00, 9999.00, 'Image Comparison rules, the contrast is very good, without exaggeration colourful', '<div dir="ltr" id="result_box">The Samsung 46-inch LCD screen, and Thai tripod chips, and Sony BRAVIA ENGINE same technology. Image Comparison rules, the contrast is very good, colourful without exaggeration, HDMI interface and a VGA interface, but users respond poor sound quality, sound too much noise. As low as 9,999 yuan.</div>', '/upload/200803/20080319173650420.jpg', '/upload/200803/m_20080319173650420.jpg', '/upload/200803/s_20080319173650420.jpg', '/upload/200803/i_20080319173650420.jpg', 3, 26, 0, 0),
(11, 12, 'Dopod S1', 'Dopod S1', 'smart phones ', '2008-03-19 17:38:04', 3500.00, 3199.00, 'white version of the piano because of its Dopod S1 paint the fuselage, that feeling of luxury without losing in lively fashion. Very suitable for the young people now use.', '<p>Dopod S1 has an internal frequency of 201 MHz TI OMAP 850 processor. Operating frequency of 201 MHz, 64MB DDR RAM, 128MB ROM equipped with memory, and users will be able to extend MicroSD card. S1 TouchFLO used new product technology is the biggest bright spot, TouchFLO technology is characterized by a finger replaces the pen, users only need a finger sliding gently on the screen can be completed in various operations, the same TouchFLO technology also supports pen functionality , the machine itself can automatically distinguish between pen and fingers.</p>', '/upload/200803/20080319173804114.jpg', '/upload/200803/m_20080319173804114.jpg', '/upload/200803/s_20080319173804114.jpg', '/upload/200803/i_20080319173804114.jpg', 4, 24, 0, 0),
(12, 12, 'Strawberry BB8700g ', 'BB8700g ', 'smart phones ', '2008-03-19 17:39:26', 3600.00, 3200.00, 'Description: raspberries phone configuration has always paid attention to the keyboard Global DRAM Pricing and screen display. The 8700 g is the same, with a horizontal screen QVGA screen and QWERT ke', '<p>87 g of the whole design as a shield, and even the space bar is so. Dopod on the keyboard like Nokia or horizontal screen machines rocker button, it can be said that this is the BlackBerry 8700 g one of the major features. In the rocker with a joystick used to the other phone, you will certainly not feel the design of the BlackBerry不适应. But definitely worth mentioning is that the BlackBerry operating system will allow her to maximize the functional keyboard play, you can in many places (such as information, telephone, the main interface, etc.) use a lot of shortcut to quicker and more convenient the use of the phone. It is no exaggeration to say that the phone was designed Shortcuts very reasonable and convenient.</p>', '/upload/200803/20080319173926949.jpg', '/upload/200803/m_20080319173926949.jpg', '/upload/200803/s_20080319173926949.jpg', '/upload/200803/i_20080319173926949.jpg', 4, 26, 0, 0);
--<br>--
CREATE TABLE `##_product_category` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
--<br>--
INSERT INTO `##_product_category` (`id`, `menuName`, `title`, `summary`, `keys`, `type`, `ordering`, `link`, `deep`, `channelId`, `params`, `published`, `isClaw`, `template`, `isfun`, `isComment`, `cguid`, `parentId`) VALUES
(2, '', '智能手机', '智能手机', '', '', 0, '', 0, 3, '', 0, 0, '', 0, 0, '', 0),
(1, '', '平板电视', '平板电视', '', '', 0, '', 0, 3, '', 0, 0, '', 0, 0, '', 0),
(3, '', 'Flat-screen TVs', 'Flat-screen TVs', '', '', 0, '', 0, 12, '', 0, 0, '', 0, 0, '', 0),
(4, '', 'Smartphone', 'Smartphone', '', '', 0, '', 0, 12, '', 0, 0, '', 0, 0, '', 0);
--<br>--
CREATE TABLE `##_resume` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--<br>--
CREATE TABLE `##_solutions` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
CREATE TABLE `##_solutions_content` (
  `guid` varchar(16) NOT NULL default '0',
  `pageId` int(11) NOT NULL default '0',
  `pageName` varchar(60) NOT NULL default '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_user` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
INSERT INTO `##_user` (`id`, `nickname`, `email`, `username`, `pwd`, `role`, `right`, `dtTime`, `auditing`, `ip`, `detail1`, `detail2`, `detail3`, `detail4`, `detail5`) VALUES
(1, '管理员', 'admin@localhost', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 9, '''0''', '2008-11-19 01:34:26', 1, '127.0.0.1', '', '', '', '', '');
--<br>--
CREATE TABLE `##_video` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--<br>--
INSERT INTO `##_video` (`id`, `channelId`, `filePath`, `fileSize`, `title`, `dtTime`, `tags`, `description`, `picture`, `counts`, `cguid`, `ordering`, `sign`) VALUES (2, 28, '/upload/200902/20090205113332475.flv', '19 MB', '3.8雙語版flv視頻', '2009-02-05 11:33:32', '3.8雙語版測試,,,', NULL, '', 0, '', 0, 0);
--<br>--
CREATE TABLE `##_linkers` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `links` int(11) NOT NULL default '0',
  `linkerName` varchar(100) NOT NULL default '',
  `linkAddress` varchar(150) NOT NULL default '',
  `origialPic` varchar(255) NOT NULL default '',
  `smallPic` varchar(255) NOT NULL default '',
  `summary` text,
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
INSERT INTO `##_linkers` (`id`, `channelId`, `links`, `linkerName`, `linkAddress`, `origialPic`, `smallPic`, `summary`, `dtTime`, `ordering`) VALUES (1, 24, 0, 'skype中国代理', 'http://service-skype.com.cn/', '/upload/200902/20090207160858302.gif', '/upload/200902/s_20090207160858302.gif', '<p>skype中国代理</p>', '2008-12-30 02:30:12', 0),
(2, 24, 0, '七彩发光字', 'http://www.qcfgz.com/', '/upload/200902/20090207160916154.gif', '/upload/200902/s_20090207160916154.gif', '<p>七彩发光字</p>', '2008-12-30 02:31:06', 0),
(3, 24, 0, '祥平房产', 'http://www.xpfc.com.cn/', '/upload/200902/20090207161716993.gif', '/upload/200902/s_20090207161716993.gif', '<p>祥平房产</p>', '2008-12-30 02:32:01', 0),
(4, 24, 0, '鼎晟科技', 'http://www.dingshengcn.com/', '/upload/200902/20090207160928294.gif', '/upload/200902/s_20090207160928294.gif', '<p>鼎晟科技</p>', '2008-12-30 02:32:55', 0),
(5, 24, 0, '和君咨询', 'http://eng.hjcn.com.cn/', '/upload/200902/20090207161806166.gif', '/upload/200902/s_20090207161806166.gif', '<p>和君咨询</p>', '2008-12-30 02:33:28', 0),
(6, 24, 0, '深喉咙企业官方网站', 'http://www.deepthroat.com.cn/', '/upload/200902/20090207161820634.jpg', '/upload/200902/s_20090207161820634.jpg', '<p>深喉咙企业官方网站</p>', '2008-12-30 02:36:17', 0),
(7, 24, 1, '杭州恒翔纺织', 'http://www.hx-textiles.cn/', '', '', '<p>杭州恒翔纺织</p>', '2008-12-30 02:37:12', 0),
(8, 24, 1, '福建新大陆', 'http://www.nlscan.com/', '', '', '<p>福建新大陆</p>', '2008-12-30 02:38:01', 0),
(9, 24, 1, '中山市祥鸿游艺机械厂', 'http://www.amuserides.com/', '', '', '<p>中山市祥鸿游艺机械厂</p>', '2008-12-30 02:38:29', 0),
(10, 24, 1, '佛山市骏朗会计师事务所', 'http://www.jlcpa.com.cn/', '', '', '<pre id="line1">\r\n佛山市骏朗会计师事务所</pre>', '2008-12-30 02:39:08', 0),
(11, 24, 1, '郑州大仟伯商贸有限公司', 'http://deepthroat-site.kb8.cn/', '', '', '郑州大仟伯商贸有限公司', '2008-12-30 02:40:07', 0),
(12, 24, 1, '广厦集团', 'http://gsjt.hebishi.com/', '', '', '<p>广厦集团</p>', '2008-12-30 02:41:08', 0),
(13, 24, 1, '海达之光', 'http://www.65388488.com/', '', '', '<p>海达之光</p>', '2008-12-30 02:43:01', 0),
(14, 24, 0, '河南三网互联科技有限公司', 'http://www.3netlink.com', '/upload/200902/20090207162507398.gif', '/upload/200902/s_20090207162507398.gif', NULL, '2009-02-07 16:25:07', 0),
(15, 24, 0, '汽车服务网', 'http://www.as618.com', '/upload/200902/20090207162633797.gif', '/upload/200902/s_20090207162633797.gif', NULL, '2009-02-07 16:26:33', 0),
(16, 24, 0, '武汉楚剑', 'http://www.cjkj110.com', '/upload/200902/20090207162950715.gif', '/upload/200902/s_20090207162950715.gif', NULL, '2009-02-07 16:29:50', 0),
(17, 24, 0, '达诚通信', 'http://www.rdcom.com', '/upload/200902/20090207163111923.jpg', '/upload/200902/s_20090207163111923.jpg', NULL, '2009-02-07 16:31:11', 0),
(18, 25, 1, 'wordpress', 'http://www.wordpress.org', '', '', NULL, '2009-02-07 16:42:40', 0);
--<br>--
CREATE TABLE `##_poll` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `choice` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL default '0',
  `isdefault` set('a','b') NOT NULL default 'a',
  `ordering` int(11) NOT NULL default '0',
  `num` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
INSERT INTO `##_poll` (`id`, `channelId`, `choice`, `categoryId`, `isdefault`, `ordering`, `num`) VALUES (1, 13, '增加网站模板', 1, 'b', 0, 20),
(2, 13, '整体功能', 1, 'a', 0, 16),
(3, 13, '增加采集功能', 1, 'b', 0, 10),
(4, 13, '搜索引擎优化', 1, 'b', 0, 12),
(6, 13, '采集功能', 2, 'a', 0, 16),
(7, 13, '会员功能', 2, 'b', 0, 15),
(8, 13, '商城功能', 2, 'b', 0, 20),
(9, 13, '对话功能', 2, 'b', 0, 12),
(10, 26, '一般', 3, 'b', 0, 1),
(11, 26, '不错', 3, 'b', 1, 1),
(12, 26, '有所改进', 3, 'a', 0, 2),
(13, 27, 'General', 4, 'b', 0, 1),
(14, 27, 'Improve', 4, 'b', 0, 1),
(15, 27, 'good', 4, 'a', 0, 1);
--<br>--
CREATE TABLE `##_poll_category` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL default '',
  `choice` set('a','b') default 'a',
  `client_ip` longtext,
  `channelId` int(11) NOT NULL default '0',
  `dtTime` date NOT NULL default '0000-00-00',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
INSERT INTO `##_poll_category` (`id`, `title`, `choice`, `client_ip`, `channelId`, `dtTime`, `ordering`) VALUES (1, '您觉得深喉咙哪些地方还需改进？', 'b', '2130706433', 13, '2008-12-29', 0),
(2, '您期待增加哪些功能？', 'a', '2130706433', 13, '2008-12-29', 0),
(3, '3.8双语版测试建议', 'a', '2130706433', 26, '2009-02-07', 0),
(4, 'suggest', 'a', NULL, 27, '2009-02-07', 0);
--<br>--