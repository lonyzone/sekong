<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsuserjs`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsuserjs` (
  `jsid` smallint(5) unsigned NOT NULL auto_increment,
  `jsname` varchar(60) NOT NULL default '',
  `jssql` text NOT NULL,
  `jstempid` smallint(5) unsigned NOT NULL default '0',
  `jsfilename` varchar(120) NOT NULL default '',
  `classid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`jsid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>