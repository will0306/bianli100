<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_cfg`;");
E_C("CREATE TABLE `wxch_cfg` (
  `cfg_id` int(3) unsigned NOT NULL auto_increment,
  `cfg_name` varchar(64) NOT NULL default '',
  `cfg_value` varchar(100) NOT NULL,
  `autoload` varchar(20) NOT NULL default 'yes',
  PRIMARY KEY  (`cfg_id`),
  UNIQUE KEY `cfg_name` (`cfg_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_cfg` values('1','murl','mobile/','yes');");
E_D("replace into `wxch_cfg` values('2','baseurl','http://www.i0990.com/','yes');");
E_D("replace into `wxch_cfg` values('3','imgpath','local','yes');");
E_D("replace into `wxch_cfg` values('4','plustj','true','yes');");
E_D("replace into `wxch_cfg` values('5','userpwd','wx','yes');");
E_D("replace into `wxch_cfg` values('6','cxbd','true','yes');");
E_D("replace into `wxch_cfg` values('8','oauth','false','yes');");
E_D("replace into `wxch_cfg` values('7','bd','web','yes');");
E_D("replace into `wxch_cfg` values('9','goods','false','yes');");
E_D("replace into `wxch_cfg` values('10','article','article.php?id=','yes');");
E_D("replace into `wxch_cfg` values('11','tuijian','true','yes');");

require("../../inc/footer.php");
?>