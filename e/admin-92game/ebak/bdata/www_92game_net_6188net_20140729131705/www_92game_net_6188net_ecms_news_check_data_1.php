<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_ecms_news_check_data`;");
E_C("CREATE TABLE `www_92game_net_6188net_ecms_news_check_data` (
  `id` int(10) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `keyid` varchar(255) NOT NULL default '',
  `dokey` tinyint(1) NOT NULL default '0',
  `newstempid` smallint(5) unsigned NOT NULL default '0',
  `closepl` tinyint(1) NOT NULL default '0',
  `haveaddfen` tinyint(1) NOT NULL default '0',
  `infotags` varchar(80) NOT NULL default '',
  `writer` varchar(30) NOT NULL default '',
  `befrom` varchar(60) NOT NULL default '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>