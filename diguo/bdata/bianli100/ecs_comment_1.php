<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL auto_increment,
  `comment_type` tinyint(3) unsigned NOT NULL default '0',
  `id_value` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `user_name` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `status` tinyint(3) unsigned NOT NULL default '0',
  `parent_id` int(10) unsigned NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('10','0','57','11@126.com','','怎么木有上次那么多了啊(>_<)~~~不过味道还是很正哦~','5','1337258560','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('11','0','62','11111@125.com','','很好喝，也不贵。比王老吉好！','5','1337258590','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('12','0','60','11111@125.com','','没有加咸蛋！！！','5','1337258612','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('13','0','59','11111@125.com','','分量好少哦！','5','1337258630','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('14','0','58','11111@125.com','','再多点别的彩色咯~就这几个菜吃腻了啊！！','5','1337258653','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('15','0','63','11111@125.com','','第一次看到美女来送饭 。下大雨的 辛苦啦~~ 这个鸡超好吃，老公也喜欢','5','1337258678','127.0.0.1','1','0','0');");

require("../../inc/footer.php");
?>