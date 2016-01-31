<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize`;");
E_C("CREATE TABLE `wxch_prize` (
  `pid` int(4) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `fun` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `num` int(2) unsigned NOT NULL,
  `count` int(8) NOT NULL,
  `loop` int(3) NOT NULL,
  `starttime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  `mp_follow` tinyint(1) unsigned NOT NULL,
  `mp_msg` varchar(255) NOT NULL,
  `mp_url` varchar(255) NOT NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize` values('7','测试抽奖3','egg','0','100','1','0','1394899200','1397491200','1395410954','0','','');");
E_D("replace into `wxch_prize` values('1','砸金蛋-测试','egg','1','100','733','0','1407772800','1420992000','1407832716','1','您还没有关注我们的公众号,中奖得不到奖品哟^_^','http://mp.weixin.qq.com/s?__biz=MzA3MDEyMjkxNQ==&mid=200930364&idx=1&sn=8c3cd555339f371dcc68feed67d81e99#rd');");
E_D("replace into `wxch_prize` values('20','大转盘','dzp','1','100','464','1','1398614400','1432742400','1406178332','0','','');");

require("../../inc/footer.php");
?>