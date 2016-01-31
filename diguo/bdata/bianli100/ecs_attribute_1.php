<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `attr_name` varchar(60) NOT NULL default '',
  `attr_input_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL default '0',
  `sort_order` tinyint(3) unsigned NOT NULL default '0',
  `is_linked` tinyint(1) unsigned NOT NULL default '0',
  `attr_group` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>