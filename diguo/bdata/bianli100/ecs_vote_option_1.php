<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_vote_option`;");
E_C("CREATE TABLE `ecs_vote_option` (
  `option_id` smallint(5) unsigned NOT NULL auto_increment,
  `vote_id` smallint(5) unsigned NOT NULL default '0',
  `option_name` varchar(250) NOT NULL default '',
  `option_count` int(8) unsigned NOT NULL default '0',
  `option_order` tinyint(3) unsigned NOT NULL default '100',
  PRIMARY KEY  (`option_id`),
  KEY `vote_id` (`vote_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_vote_option` values('4','2','打折预订租车服务。','0','100');");
E_D("replace into `ecs_vote_option` values('5','2','送意外险。','0','100');");
E_D("replace into `ecs_vote_option` values('6','2','送部分异地手机话费。','0','100');");
E_D("replace into `ecs_vote_option` values('7','2','送机上食品。','0','100');");
E_D("replace into `ecs_vote_option` values('8','2','送一号店抵用券。','0','100');");
E_D("replace into `ecs_vote_option` values('9','2','打折预订中档酒店','0','100');");

require("../../inc/footer.php");
?>