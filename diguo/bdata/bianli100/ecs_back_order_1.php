<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_order`;");
E_C("CREATE TABLE `ecs_back_order` (
  `back_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `return_time` int(10) unsigned default '0',
  `agency_id` smallint(5) unsigned default '0',
  PRIMARY KEY  (`back_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_order` values('1','20090615054961769','2009061585887','15','2009061585884','1245044533','3','','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245044964','2','0','1245045515','0');");
E_D("replace into `ecs_back_order` values('2','20090615055104671','2009061585887','15','20090615','1245044533','3','','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045061','1','0','1245045515','0');");
E_D("replace into `ecs_back_order` values('3','20090615055780744','2009061585887','15','123232','1245044533','3','','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045443','0','0','1245045515','0');");
E_D("replace into `ecs_back_order` values('4','20090615064331475','2009061503335','17','00906150333512','1245047978','3','','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245048189','0','0','1245048212','0');");

require("../../inc/footer.php");
?>