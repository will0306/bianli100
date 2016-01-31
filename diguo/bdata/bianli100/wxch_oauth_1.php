<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_oauth`;");
E_C("CREATE TABLE `wxch_oauth` (
  `oid` int(4) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_oauth` values('1','网站首页','http://www.i0990.com/mobile/','1104','1');");
E_D("replace into `wxch_oauth` values('10','会员中心','http://www.i0990.com/mobile/user.php','626','1');");

require("../../inc/footer.php");
?>