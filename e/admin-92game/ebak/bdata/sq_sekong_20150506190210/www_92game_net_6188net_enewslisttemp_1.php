<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_6188net_enewslisttemp`;");
E_C("CREATE TABLE `www_92game_net_6188net_enewslisttemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_6188net_enewslisttemp` values('1','默认新闻列表模板','<!DOCTYPE HTML>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$class_r[\$GLOBALS[navclassid]][bname]?> - <?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<!--[if lt IE 9]>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/templets/sekong/js/html5.js\\\\\"></script>\r\n<![endif]-->\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"/templets/sekong/css/common.css\\\\\"/>\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"favicon.ico\\\\\" />\r\n<style>\r\n.page_ .active {\r\n    background: none repeat scroll 0 0 #2b2b2b;\r\n    color: #fff;\r\n    display: inline-block;\r\n    font-weight: bold;\r\n    height: 30px;\r\n    line-height: 30px;\r\n    margin: 0 2px;\r\n    min-width: 24px;\r\n    overflow: hidden;\r\n    padding: 0 5px;\r\n    text-align: center;\r\n}\r\n</style>\r\n</head>\r\n<body>  \r\n    <!--header-->\r\n    <header class=\\\\\"header\\\\\">\r\n        <div class=\\\\\"header_in\\\\\">\r\n            <h1 class=\\\\\"logo\\\\\"><a href=\\\\\"/\\\\\" target=\\\\\"_self\\\\\">色空美图</a></h1>\r\n            <ul class=\\\\\"nav\\\\\">\r\n                <li><a href=\\\\\"/\\\\\" class=\\\\\"cur\\\\\">首页</a></li>\r\n                                [e:loop={\\\\\"select classid,classname,islast from {\$dbtbpre}enewsclass where bclassid=\\\\''0\\\\'' and showclass=\\\\''0\\\\'' order by myorder,classid ASC limit 11\\\\\",0,24,0}]\r\n                <?php\r\n                \$classurl=sys_ReturnBqClassname(\$bqr,9);\r\n                ?>\r\n                <?php\r\n                if(!\$bqr[islast])\r\n                {\r\n                ?>\r\n                <li class=\\\\\"nav_item2\\\\\">\r\n                <a href=\\\\\"\\\\\" class=\\\\\"nav_item2_a\\\\\"><?=\$bqr[classname]?></a>\r\n                    <i></i>\r\n                    <div>\r\n                 <?php\r\n                    \$newsclass=\$empire->query(\\\\\"select classid,classname from \\\\\".\$dbtbpre.\\\\\"enewsclass where bclassid=\\\\\".\$bqr[classid].\\\\\" order by myorder,classid desc limit 11\\\\\");\r\n                    while(\$classr=\$empire->fetch(\$newsclass))\r\n                    {\r\n                        \$classrurl=sys_ReturnBqClassname(\$classr,9);\r\n                        ?>\r\n                        <a href=\\\\\"<?=\$classrurl?>\\\\\"><?=\$classr[classname]?></a>\r\n                    <?php\r\n                    }\r\n                    ?>\r\n                    </div>\r\n                </li>\r\n                <?php\r\n                }else{\r\n                ?>\r\n                <li><a href=\\\\\"<?=\$classurl?>\\\\\"><?=\$bqr[classname]?></a></li>\r\n                <?php\r\n                }\r\n                ?>\r\n                </li>\r\n                [/e:loop]\r\n            </ul>\r\n            <a href=\\\\\"\\\\\" class=\\\\\"header_wap\\\\\">色空手机版</a>\r\n        </div>\r\n    </header>\r\n    <div class=\\\\\"list_wrap\\\\\">     \r\n        <div class=\\\\\"list_nav\\\\\">\r\n            <a href=\\\\\"\\\\\" class=\\\\\"cur\\\\\">热门</a>\r\n            <a href=\\\\\"\\\\\">最新</a>\r\n        </div>\r\n        <div class=\\\\\"list_page\\\\\">\r\n            <div class=\\\\\"page_\\\\\">\r\n                [!--show.listpage--]\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\\\\\"wrap\\\\\">\r\n        <ul class=\\\\\"list1_\\\\\">\r\n            [!--empirenews.listtemp--]\r\n            <!--list.var1-->\r\n            <!--list.var2-->\r\n            <!--list.var3-->\r\n            <!--list.var4-->\r\n            <!--list.var5-->\r\n            [!--empirenews.listtemp--]\r\n        </ul>\r\n        <!--页码-->\r\n        <div class=\\\\\"page_\\\\\">\r\n            [!--show.listpage--]\r\n        </div>\r\n    </div>\r\n    \r\n    <!--footer-->\r\n    <footer class=\\\\\"footer\\\\\">\r\n        <div class=\\\\\"wrap\\\\\">\r\n            <div class=\\\\\"footer_logo\\\\\">色空美图</div>\r\n            <dl class=\\\\\"footer_law\\\\\">\r\n                <dt>法律声明</dt>\r\n                <dd>本站所有作品不含有淫秽、色情内容，如有违反法律请联系管理员版权声明本站部份作品均属原创，版权归本站所有，未经同意请勿转载。</dd>\r\n            </dl>\r\n            <dl class=\\\\\"footer_about\\\\\">\r\n                <dt>关于我们</dt>\r\n                <dd><a href=\\\\\"\\\\\">关于我们</a></dd>\r\n                <dd><a href=\\\\\"\\\\\">联系我们</a></dd>\r\n                <dd><a href=\\\\\"\\\\\">图片版权说明</a></dd>\r\n            </dl>\r\n            <dl class=\\\\\"footer_follow\\\\\">\r\n                <dt>关注我们</dt>\r\n                <dd>\r\n                    <a href=\\\\\"\\\\\" class=\\\\\"footer_weibo\\\\\"></a>\r\n                    <a href=\\\\\"\\\\\" class=\\\\\"footer_douban\\\\\"></a>\r\n                </dd>\r\n            </dl>\r\n            <div class=\\\\\"footer_wap\\\\\">\r\n                <a href=\\\\\"\\\\\" class=\\\\\"footer_android\\\\\">安卓版</a>\r\n                <a href=\\\\\"\\\\\" class=\\\\\"footer_iphone\\\\\">IOS版</a>\r\n            </div>\r\n        </div>\r\n        <p class=\\\\\"footer_cp\\\\\">© 2014 Sekong.com All Rights Reserved.</p>\r\n    </footer>\r\n\r\n</body>\r\n</html>\r\n','0','0','<li>\r\n                <a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"img_mask\\\\\">\r\n                    <img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\">\r\n                    <span>[!--title--]</span>\r\n                </a>\r\n            </li>','5','1','Y-m-d','26','0','0');");
E_D("replace into `www_92game_net_6188net_enewslisttemp` values('2','tag列表模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--]图片_[!--pagetitle--]写真-<?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_public.css\\\\\" rel=\\\\\"stylesheet\\\\\" media=\\\\\"screen\\\\\" type=\\\\\"text/css\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_style.css\\\\\" rel=\\\\\"stylesheet\\\\\" media=\\\\\"screen\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script language=\\\\\"javascript\\\\\" type=\\\\\"text/javascript\\\\\" src=\\\\\"/templets/ye/css/jquery-1.4.4.min.js\\\\\"></script>\r\n<script language=\\\\\"javascript\\\\\" type=\\\\\"text/javascript\\\\\" src=\\\\\"/templets/ye/css/jquery.switchable[all].min.js\\\\\"></script>\r\n</head>\r\n<body>\r\n [!--temp.qtheader--]\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea1.js\\\\\"></script></div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000\\\\\">\r\n    <div class=\\\\\"position\\\\\">\r\n	<a href=\\\\\"/\\\\\">主页</a> > 热门标签 > [!--pagetitle--]\r\n	</div>\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box03\\\\\">\r\n  <ul class=\\\\\"product01\\\\\">\r\n\r\n[!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n<!--list.var2-->\r\n<!--list.var3-->\r\n<!--list.var4-->\r\n<!--list.var5-->\r\n[!--empirenews.listtemp--]\r\n  </ul>\r\n\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"page\\\\\">\r\n[!--show.listpage--]\r\n\r\n  </div>\r\n  </div>\r\n  \r\n  <div class=\\\\\"clear\\\\\"></div>\r\n   <div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea3.js\\\\\"></script></div>\r\n  [!--temp.footer--]\r\n</body>\r\n</html>','200','0','<li><a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"pic\\\\\" target=\\\\\"_Blank\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" width=\\\\\"184\\\\\" height=\\\\\"274\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"/> \r\n<p>[!--title--]</p></a>\r\n</li>','5','1','Y-m-d','26','0','0');");
E_D("replace into `www_92game_net_6188net_enewslisttemp` values('3','专题列表模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - <?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_public.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_style.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script src=\\\\\"/templets/ye/css/jquery-1.4.4.min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/jquery.switchable[all].min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/6188_new.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/da.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n</head>\r\n\r\n<body>\r\n  <div class=\\\\\"header\\\\\">\r\n      [!--temp.header--]\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 adrress\\\\\">当前位置:<a href=\\\\\"/\\\\\">首页</a> > <a href=\\\\''/s/\\\\''>美女专题</a> > [!--pagetitle--]</div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box02\\\\\">\r\n    <em>网友浏览过的美女:</em>\r\n[e:loop={\\\\''selfinfo\\\\'',6,3,0,\\\\\"\\\\\",\\\\\"rand()\\\\\"}]\r\n<a href=\\\\''<?=\$bqsr[titleurl]?>\\\\'' title=\\\\\"<?=esub(\$bqr[title],28)?>\\\\\" target=\\\\\"view_window\\\\\"><?=esub(\$bqr[title],28)?></a>\r\n[/e:loop]\r\n\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box01\\\\\">\r\n    <div class=\\\\\"mv_zt_alone\\\\\">\r\n<a class=\\\\\"img\\\\\"><img src=\\\\\"[!--class.classimg--]\\\\\" alt=\\\\\"[!--pagetitle--]\\\\\" width=\\\\\"150\\\\\" height=\\\\\"160\\\\\"/></a>\r\n          <h3>[!--pagetitle--]</h3>\r\n          <span class=\\\\\"mv_zt_txt\\\\\">\r\n            <em>详情：</em>\r\n<?=ReturnZtAddField(0,\\\\''guanyu\\\\'')?>\r\n          </span>\r\n          <span class=\\\\\"mv_zt_time\\\\\"><em></em></span>\r\n <span class=\\\\\"mv_zt_time\\\\\"><em></em></span>\r\n     <span class=\\\\\"mv_zt_bq\\\\\">\r\n<div class=\\\\\"bdsharebuttonbox\\\\\"><a href=\\\\\"#\\\\\" class=\\\\\"bds_more\\\\\" data-cmd=\\\\\"more\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_qzone\\\\\" data-cmd=\\\\\"qzone\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tqq\\\\\" data-cmd=\\\\\"tqq\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_renren\\\\\" data-cmd=\\\\\"renren\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_weixin\\\\\" data-cmd=\\\\\"weixin\\\\\"></a></div>\r\n<script>window._bd_share_config={\\\\\"common\\\\\":{\\\\\"bdSnsKey\\\\\":{},\\\\\"bdText\\\\\":\\\\\"\\\\\",\\\\\"bdMini\\\\\":\\\\\"2\\\\\",\\\\\"bdPic\\\\\":\\\\\"\\\\\",\\\\\"bdStyle\\\\\":\\\\\"0\\\\\",\\\\\"bdSize\\\\\":\\\\\"16\\\\\"},\\\\\"share\\\\\":{},\\\\\"image\\\\\":{\\\\\"viewList\\\\\":[\\\\\"qzone\\\\\",\\\\\"tsina\\\\\",\\\\\"tqq\\\\\",\\\\\"renren\\\\\",\\\\\"weixin\\\\\"],\\\\\"viewText\\\\\":\\\\\"分享到：\\\\\",\\\\\"viewSize\\\\\":\\\\\"16\\\\\"},\\\\\"selectShare\\\\\":{\\\\\"bdContainerClass\\\\\":null,\\\\\"bdSelectMiniList\\\\\":[\\\\\"qzone\\\\\",\\\\\"tsina\\\\\",\\\\\"tqq\\\\\",\\\\\"renren\\\\\",\\\\\"weixin\\\\\"]}};with(document)0[(getElementsByTagName(\\\\''head\\\\'')[0]||body).appendChild(createElement(\\\\''script\\\\'')).src=\\\\''http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=\\\\''+~(-new Date()/36e5)];</script>\r\n</span>\r\n     \r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea1.js\\\\\"></script></div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box01\\\\\">\r\n    <ul class=\\\\\"ul_alone\\\\\">\r\n       [!--empirenews.listtemp--] \r\n			<!--list.var1-->\r\n	   [!--empirenews.listtemp--]\r\n			\r\n    </ul>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"page\\\\\">\r\n[!--show.listpage--]\r\n\r\n  </div>\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"w1000 box03\\\\\">\r\n    <div class=\\\\\"title\\\\\">推荐图片</div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <ul class=\\\\\"mv_zt_show\\\\\">\r\n [e:loop={\\\\''selfinfo\\\\'',4,3,0,\\\\\"\\\\\",\\\\\"rand()\\\\\"}]\r\n<li>    <a href=\\\\''<?=\$bqsr[titleurl]?>\\\\'' alt=\\\\\"<?=esub(\$bqr[title],26)?>i\\\\\"  ><img src=\\\\''<?=\$bqr[titlepic]?>\\\\'' border=\\\\''0\\\\'' width=\\\\''185\\\\'' height=\\\\''280\\\\'' alt=\\\\''<?=esub(\$bqr[title],26)?>\\\\''> <p><?=esub(\$bqr[title],26)?></p></a></li>\r\n[/e:loop]\r\n [e:loop={\\\\''selfinfo\\\\'',1,3,0,\\\\\"\\\\\",\\\\\"rand()\\\\\"}]\r\n<li class=\\\\\"fiver\\\\\">  <a href=\\\\''<?=\$bqsr[titleurl]?>\\\\'' alt=\\\\\"<?=esub(\$bqr[title],26)?>i\\\\\"  ><img src=\\\\''<?=\$bqr[titlepic]?>\\\\'' border=\\\\''0\\\\'' width=\\\\''185\\\\'' height=\\\\''280\\\\'' alt=\\\\''<?=esub(\$bqr[title],26)?>\\\\''> <p><?=esub(\$bqr[title],26)?></p></a></li>\r\n[/e:loop]\r\n\r\n  </ul>\r\n  </div> </div>\r\n  \r\n<div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea2.js\\\\\"></script></div>\r\n\r\n   [!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li>\r\n<a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\"  alt=\\\\\"[!--oldtitle--]\\\\\" width=\\\\\"235\\\\\" height=\\\\\"345\\\\\">\r\n<p>[!--title--]</p></a>\r\n</li>','1','1','Y-m-d','28','0','0');");
E_D("replace into `www_92game_net_6188net_enewslisttemp` values('9','专题主页模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>热门专题 - <?=\$public_r[\\\\''add_www.92game.net.ming\\\\'']?></title>\r\n<link href=\\\\\"/templets/ye/css/6188_public.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<link href=\\\\\"/templets/ye/css/6188_style.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script src=\\\\\"/templets/ye/css/jquery-1.4.4.min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/jquery.switchable[all].min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/6188_new.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n<script src=\\\\\"/templets/ye/css/da.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n</head>\r\n\r\n<body>\r\n  [!--temp.header--]\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n <div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea1.js\\\\\"></script></div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n\r\n  <div class=\\\\\"w1000 adrress\\\\\">当前位置:<a href=\\\\\"/\\\\\">首页</a> > 美女专题</div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box02\\\\\">\r\n    <em>网友浏览过的美女:</em>\r\n	[e:loop={\\\\''selfinfo\\\\'',6,3,0,\\\\\"\\\\\",\\\\\"rand()\\\\\"}]\r\n<a href=\\\\''<?=\$bqsr[titleurl]?>\\\\'' title=\\\\\"<?=esub(\$bqr[title],28)?>\\\\\" target=\\\\\"view_window\\\\\"><?=esub(\$bqr[title],28)?></a>\r\n[/e:loop]\r\n\r\n\r\n  </div>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"w1000 box01\\\\\">\r\n    <div class=\\\\\"mv_zt_left\\\\\">\r\n      <ul class=\\\\\"mv_zt_list\\\\\">\r\n	    [!--empirenews.listtemp--] \r\n			<!--list.var1-->\r\n	   [!--empirenews.listtemp--]\r\n      </ul>\r\n        <div class=\\\\\"clear\\\\\"></div>\r\n  <div class=\\\\\"page\\\\\">\r\n[!--show.listpage--]\r\n\r\n  </div>\r\n  </div>\r\n     <div class=\\\\\"mv_zt_right\\\\\">\r\n\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"ad_w300\\\\\"><script src=\\\\\"/d/js/acmsd/thea7.js\\\\\"></script></div>\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"mv_zt_box\\\\\">\r\n        <h4>热门专题</h4>\r\n        <ul class=\\\\\"mv_txt_list\\\\\">\r\n		[e:loop={\\\\\"select ztname,ztpath from [!db.pre!]enewszt order by rand() limit 10\\\\\",10,24,0}]\r\n<li>\r\n<tt class=\\\\\"txt_li01\\\\\"><?=\$bqno?></tt> \r\n\r\n<em></em><a href=\\\\\"<?=\$public_r[newsurl]?><?=\$bqr[ztpath]?>/\\\\\" title=\\\\\"<?=\$bqr[ztname]?>\\\\\"><?=\$bqr[ztname]?></a></li>\r\n<li>\r\n[/e:loop]\r\n    \r\n          <div class=\\\\\"clear\\\\\"></div>\r\n        </ul>\r\n	 <div class=\\\\\"clear\\\\\"></div>\r\n      </div>\r\n	   <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"ad_w300\\\\\"><script src=\\\\\"/d/js/acmsd/thea8.js\\\\\"></script></div>\r\n	   <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"ad_w300\\\\\"><script src=\\\\\"/d/js/acmsd/thea9.js\\\\\"></script></div>\r\n    </div>\r\n  </div>\r\n\r\n<div class=\\\\\"clear\\\\\"></div>\r\n   <div class=\\\\\"w1000 ad\\\\\"><script src=\\\\\"/d/js/acmsd/thea1.js\\\\\"></script></div>\r\n    [!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li >\r\n					\r\n				<a  class=\\\\\"img\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\"  alt=\\\\\"[!--title--]\\\\\" width=\\\\\"150\\\\\" height=\\\\\"180\\\\\"></a>\r\n             \r\n                    <h3> <a href=\\\\\"[!--ftitle--]\\\\\"> [!--title--]</a></h3>\r\n					\r\n					 \r\n      		\r\n					  \r\n					     <span class=\\\\\"mv_zt_txt\\\\\">\r\n            <em>详情：</em>[!--smalltext--]...<a href=\\\\\"[!--ftitle--]\\\\\">更多内容>></a>\r\n\r\n          </span>\r\n				  \r\n					     <span class=\\\\\"mv_zt_txt\\\\\">\r\n            <em></em>\r\n\r\n          </span>\r\n					  \r\n			   <span class=\\\\\"mv_zt_time\\\\\"><em></em></span>\r\n<span class=\\\\\"mv_zt_bq\\\\\">\r\n<div class=\\\\\"bdsharebuttonbox\\\\\"><a href=\\\\\"#\\\\\" class=\\\\\"bds_more\\\\\" data-cmd=\\\\\"more\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_qzone\\\\\" data-cmd=\\\\\"qzone\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tqq\\\\\" data-cmd=\\\\\"tqq\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_renren\\\\\" data-cmd=\\\\\"renren\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_weixin\\\\\" data-cmd=\\\\\"weixin\\\\\"></a></div>\r\n<script>window._bd_share_config={\\\\\"common\\\\\":{\\\\\"bdSnsKey\\\\\":{},\\\\\"bdText\\\\\":\\\\\"\\\\\",\\\\\"bdMini\\\\\":\\\\\"2\\\\\",\\\\\"bdPic\\\\\":\\\\\"\\\\\",\\\\\"bdStyle\\\\\":\\\\\"0\\\\\",\\\\\"bdSize\\\\\":\\\\\"16\\\\\"},\\\\\"share\\\\\":{},\\\\\"image\\\\\":{\\\\\"viewList\\\\\":[\\\\\"qzone\\\\\",\\\\\"tsina\\\\\",\\\\\"tqq\\\\\",\\\\\"renren\\\\\",\\\\\"weixin\\\\\"],\\\\\"viewText\\\\\":\\\\\"分享到：\\\\\",\\\\\"viewSize\\\\\":\\\\\"16\\\\\"},\\\\\"selectShare\\\\\":{\\\\\"bdContainerClass\\\\\":null,\\\\\"bdSelectMiniList\\\\\":[\\\\\"qzone\\\\\",\\\\\"tsina\\\\\",\\\\\"tqq\\\\\",\\\\\"renren\\\\\",\\\\\"weixin\\\\\"]}};with(document)0[(getElementsByTagName(\\\\''head\\\\'')[0]||body).appendChild(createElement(\\\\''script\\\\'')).src=\\\\''http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=\\\\''+~(-new Date()/36e5)];</script>\r\n</span>\r\n\r\n				</li>','1','1','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>