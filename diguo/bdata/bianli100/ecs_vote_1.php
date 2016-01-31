<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_vote`;");
E_C("CREATE TABLE `ecs_vote` (
  `vote_id` smallint(5) unsigned NOT NULL auto_increment,
  `vote_name` varchar(250) NOT NULL default '',
  `start_time` int(11) unsigned NOT NULL default '0',
  `end_time` int(11) unsigned NOT NULL default '0',
  `can_multi` tinyint(1) unsigned NOT NULL default '0',
  `vote_count` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`vote_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_vote` values('2','如果一号店提供机票预订，您希望同时配套提供以下哪个服务？ ','1282406400','1757001600','0','0');");

require("../../inc/footer.php");
?>