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
  `origialPic` varchar(200) NOT NULL default '',
  `smallPic` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_calllist` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `callId` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_comment` (
  `id` int(11) NOT NULL auto_increment,
  `recordId` int(11) NOT NULL default '0',
  `channelId` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL,
  `content` text,
  `email` varchar(60) NOT NULL,
  `homepage` varchar(60) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `dtTime` datetime NOT NULL,
  `auditing` tinyint(4) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `memberId` int(11) NOT NULL default '0',
  `memberTableName` varchar(200) NOT NULL,
  `answerId` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_download` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `softwareName` varchar(200) NOT NULL default '',
  `softwareSize` varchar(200) NOT NULL default '',
  `language` varchar(40) NOT NULL default '',
  `classification` varchar(200) NOT NULL default '',
  `platform` varchar(200) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `introduce` text,
  `filePath` varchar(200) NOT NULL default '',
  `counts` int(11) NOT NULL default '0',
  `cguid` varchar(16) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_flash_group` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL default '',
  `summary` text,
  `dt_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `sign` int(11) NOT NULL default '0',
  `title_text_color` varchar(200) NOT NULL default '0xffffff',
  `title_bg_color` varchar(200) NOT NULL default '0xff6600',
  `title_bg_alpha` int(11) NOT NULL default '60',
  `autoPlayTime` int(11) NOT NULL default '8',
  `transformFlag` int(11) NOT NULL default '2',
  `btn_text_color` varchar(200) NOT NULL default '0xffffff',
  `btn_over_color` varchar(200) NOT NULL default '0xff6600',
  `btn_out_color` varchar(200) NOT NULL default '0x000033',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `spic` varchar(200) NOT NULL default '',
  `cguid` varchar(16) NOT NULL default '',
  `origialPic` varchar(200) NOT NULL default '',
  `smallPic` varchar(200) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_list_content` (
  `guid` varchar(16) NOT NULL default '',
  `pageId` int(11) NOT NULL default '0',
  `pageName` varchar(60) NOT NULL default '',
  `content` longtext,
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_picture` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `title` varchar(60) NOT NULL default '',
  `middlePic` varchar(200) NOT NULL default '',
  `dtTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `smallPic` varchar(200) NOT NULL default '',
  `tags` varchar(60) NOT NULL default '',
  `description` text,
  `isTopic` int(11) NOT NULL default '0',
  `isImportant` int(11) NOT NULL default '0',
  `counts` int(11) NOT NULL default '0',
  `origialPic` varchar(200) NOT NULL default '',
  `uid` int(11) NOT NULL default '0',
  `cguid` varchar(16) NOT NULL default '',
  `summary` text,
  `indexPicture` varchar(200) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_poll` (
  `id` int(11) NOT NULL auto_increment,
  `channelId` int(11) NOT NULL default '0',
  `choice` varchar(200) NOT NULL default '',
  `categoryId` int(11) NOT NULL default '0',
  `isdefault` set('a','b') NOT NULL default 'a',
  `ordering` int(11) NOT NULL default '0',
  `num` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `origialPic` varchar(200) NOT NULL default '',
  `middlePic` varchar(200) NOT NULL default '',
  `smallPic` varchar(200) NOT NULL default '',
  `indexPicture` varchar(200) NOT NULL default '',
  `categoryId` int(11) NOT NULL default '0',
  `counts` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--
CREATE TABLE `##_product_category` (
  `id` int(11) NOT NULL auto_increment,
  `menuName` varchar(24) NOT NULL default '',
  `title` varchar(50) NOT NULL default '',
  `summary` varchar(200) NOT NULL default '',
  `keys` varchar(50) NOT NULL default '',
  `type` varchar(14) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `link` varchar(200) NOT NULL default '',
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `spic` varchar(200) NOT NULL default '',
  `cguid` varchar(16) NOT NULL default '',
  `origialPic` varchar(200) NOT NULL default '',
  `smallPic` varchar(200) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sign` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `guid` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `detail1` varchar(200) NOT NULL default '',
  `detail2` varchar(200) NOT NULL default '',
  `detail3` varchar(200) NOT NULL default '',
  `detail4` varchar(200) NOT NULL default '',
  `detail5` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--<br>--