<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsindexpage`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsindexpage` (
  `tempid` smallint(5) unsigned NOT NULL auto_increment,
  `tempname` varchar(30) NOT NULL default '',
  `temptext` mediumtext NOT NULL,
  PRIMARY KEY  (`tempid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>