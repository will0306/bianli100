<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_cnum`;");
E_C("CREATE TABLE `wxch_prize_cnum` (
  `pcid` int(5) NOT NULL auto_increment,
  `paid` int(5) NOT NULL,
  `pid` int(4) NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  `user_count` int(8) unsigned NOT NULL,
  PRIMARY KEY  (`pcid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_cnum` values('1','5','1','未中奖5','5','877');");
E_D("replace into `wxch_prize_cnum` values('2','4','1','话费100元4','0','5');");
E_D("replace into `wxch_prize_cnum` values('3','2','1','Macbook2','1','2');");
E_D("replace into `wxch_prize_cnum` values('4','3','1','Ipad3','1','3');");
E_D("replace into `wxch_prize_cnum` values('5','1','1','10万汽车1','1','1');");
E_D("replace into `wxch_prize_cnum` values('6','16','20','未中奖','9989','506');");
E_D("replace into `wxch_prize_cnum` values('7','14','20','Macbook2','1','2');");
E_D("replace into `wxch_prize_cnum` values('8','15','20','Ipad3','1','3');");
E_D("replace into `wxch_prize_cnum` values('9','13','20','10万汽车1','1','1');");

require("../../inc/footer.php");
?>