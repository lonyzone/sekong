<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewsplayer`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewsplayer` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `player` varchar(30) NOT NULL default '',
  `filename` varchar(20) NOT NULL default '',
  `bz` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewsplayer` values('1','RealPlayer','realplayer.php','RealPlayer播放器');");
E_D("replace into `www_92game_net_6188net_enewsplayer` values('2','MediaPlayer','mediaplayer.php','MediaPlayer播放器');");
E_D("replace into `www_92game_net_6188net_enewsplayer` values('3','FLASH','flasher.php','FLASH播放器');");
E_D("replace into `www_92game_net_6188net_enewsplayer` values('4','FLV播放器','flver.php','FLV播放器');");

@include("../../inc/footer.php");
?>