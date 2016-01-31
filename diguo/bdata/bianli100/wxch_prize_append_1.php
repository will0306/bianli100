<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_append`;");
E_C("CREATE TABLE `wxch_prize_append` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `prize_id` int(4) unsigned NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_append` values('1','1','10万汽车1','1');");
E_D("replace into `wxch_prize_append` values('2','1','Macbook2','2');");
E_D("replace into `wxch_prize_append` values('3','1','Ipad3','3');");
E_D("replace into `wxch_prize_append` values('4','1','话费100元4','9999999');");
E_D("replace into `wxch_prize_append` values('5','1','未中奖5','5');");
E_D("replace into `wxch_prize_append` values('6','1','','0');");
E_D("replace into `wxch_prize_append` values('7','7','10万汽车','1');");
E_D("replace into `wxch_prize_append` values('8','7','Macbook','3');");
E_D("replace into `wxch_prize_append` values('9','7','Ipad','5');");
E_D("replace into `wxch_prize_append` values('10','7','未中奖','1000');");
E_D("replace into `wxch_prize_append` values('11','7','','0');");
E_D("replace into `wxch_prize_append` values('12','7','','0');");
E_D("replace into `wxch_prize_append` values('13','20','10万汽车1','1');");
E_D("replace into `wxch_prize_append` values('14','20','Macbook2','2');");
E_D("replace into `wxch_prize_append` values('15','20','Ipad3','3');");
E_D("replace into `wxch_prize_append` values('16','20','未中奖','10');");
E_D("replace into `wxch_prize_append` values('17','20','','0');");
E_D("replace into `wxch_prize_append` values('18','20','','0');");

require("../../inc/footer.php");
?>