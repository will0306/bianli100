<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_suppliers`;");
E_C("CREATE TABLE `ecs_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL auto_increment,
  `suppliers_name` varchar(255) default NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(1) unsigned default '1',
  PRIMARY KEY  (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_suppliers` values('1','北京供货商','北京供货商','1');");
E_D("replace into `ecs_suppliers` values('2','上海供货商','上海供货商','1');");

require("../../inc/footer.php");
?>