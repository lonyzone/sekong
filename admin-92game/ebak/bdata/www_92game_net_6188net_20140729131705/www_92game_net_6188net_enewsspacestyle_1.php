<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsspacestyle`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsspacestyle` (
  `styleid` smallint(5) unsigned NOT NULL auto_increment,
  `stylename` varchar(30) NOT NULL default '',
  `stylepic` varchar(255) NOT NULL default '',
  `stylesay` varchar(255) NOT NULL default '',
  `stylepath` varchar(30) NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  `membergroup` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsspacestyle` values('1','默认个人空间模板','','默认个人空间模板','default','1',',1,2,');");
E_D("replace into `www_92game_net_6188net_enewsspacestyle` values('2','默认企业空间模板','','默认企业空间模板','comdefault','0',',3,4,');");

@include("../../inc/footer.php");
?>