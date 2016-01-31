<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_admin`;");
E_C("CREATE TABLE `wxch_admin` (
  `aid` int(3) NOT NULL auto_increment,
  `type` varchar(8) NOT NULL,
  `wxid` char(28) NOT NULL,
  `name` varchar(100) NOT NULL,
  `autoload` tinyint(1) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_admin` values('1','reorder','oo1v-tir7oHXTL42WpwAlNsLTZlc','蒋','1');");
E_D("replace into `wxch_admin` values('2','pay','oo1v-tir7oHXTL42WpwAlNsLTZlc','test','1');");
E_D("replace into `wxch_admin` values('3','reorder','oo1v-tir7oHXTL42WpwAlNsLTZlc','方便一百','1');");
E_D("replace into `wxch_admin` values('4','reorder','oo1v-tir7oHXTL42WpwAlNsLTZlc','admin','1');");

require("../../inc/footer.php");
?>