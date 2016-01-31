<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL default '0',
  `is_paid` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','35.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','2198.10','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','638.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','3810.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','253.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','975.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','17054.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','20','290.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','21','1865.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','22','19.60','0','0');");
E_D("replace into `ecs_pay_log` values('22','23','19.60','0','0');");
E_D("replace into `ecs_pay_log` values('23','24','29.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','25','22.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','26','28.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','27','73.50','0','0');");
E_D("replace into `ecs_pay_log` values('27','28','130.00','0','0');");
E_D("replace into `ecs_pay_log` values('28','29','28.00','0','0');");
E_D("replace into `ecs_pay_log` values('29','29','57.46','0','0');");
E_D("replace into `ecs_pay_log` values('30','30','17.96','0','0');");
E_D("replace into `ecs_pay_log` values('31','31','62.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','32','62.00','0','0');");
E_D("replace into `ecs_pay_log` values('33','33','62.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','34','62.00','0','0');");
E_D("replace into `ecs_pay_log` values('35','35','90.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','36','28.00','0','0');");
E_D("replace into `ecs_pay_log` values('37','37','28.00','0','0');");
E_D("replace into `ecs_pay_log` values('38','38','28.00','0','0');");

require("../../inc/footer.php");
?>