<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','14','0.00','0.00','888','888','1416866410','注册送积分','99');");
E_D("replace into `ecs_account_log` values('2','15','0.00','0.00','0','10','1416866828','qiandao','99');");
E_D("replace into `ecs_account_log` values('3','24','0.00','0.00','0','10','1416895947','qiandao','99');");
E_D("replace into `ecs_account_log` values('4','24','0.00','0.00','0','10','1416895949','qiandao','99');");
E_D("replace into `ecs_account_log` values('5','24','0.00','0.00','0','10','1416895954','qiandao','99');");
E_D("replace into `ecs_account_log` values('6','24','0.00','0.00','0','10','1416897710','qiandao','99');");
E_D("replace into `ecs_account_log` values('7','24','0.00','0.00','0','10','1416897715','qiandao','99');");
E_D("replace into `ecs_account_log` values('8','32','0.00','0.00','0','10','1416952513','qiandao','99');");
E_D("replace into `ecs_account_log` values('9','32','0.00','0.00','0','10','1416952518','qiandao','99');");
E_D("replace into `ecs_account_log` values('10','32','0.00','0.00','0','10','1416952521','qiandao','99');");
E_D("replace into `ecs_account_log` values('11','32','0.00','0.00','0','10','1416952522','qiandao','99');");
E_D("replace into `ecs_account_log` values('12','32','0.00','0.00','0','10','1416952527','qiandao','99');");
E_D("replace into `ecs_account_log` values('13','35','0.00','0.00','888','888','1416956816','注册送积分','99');");
E_D("replace into `ecs_account_log` values('14','36','0.00','0.00','888','888','1416960554','注册送积分','99');");
E_D("replace into `ecs_account_log` values('15','45','0.00','0.00','888','888','1416984620','注册送积分','99');");
E_D("replace into `ecs_account_log` values('16','55','0.00','0.00','888','888','1417037451','注册送积分','99');");
E_D("replace into `ecs_account_log` values('17','56','0.00','0.00','0','10','1417042058','qiandao','99');");
E_D("replace into `ecs_account_log` values('18','64','0.00','0.00','0','10','1417133607','qiandao','99');");
E_D("replace into `ecs_account_log` values('19','68','0.00','0.00','0','10','1417162791','qiandao','99');");
E_D("replace into `ecs_account_log` values('20','20','0.00','0.00','0','10','1417167395','qiandao','99');");
E_D("replace into `ecs_account_log` values('21','112','0.00','0.00','0','30','1417200191','bd','99');");
E_D("replace into `ecs_account_log` values('22','124','0.00','0.00','0','30','1417223306','bd','99');");
E_D("replace into `ecs_account_log` values('23','124','0.00','0.00','0','30','1417223306','bd','99');");
E_D("replace into `ecs_account_log` values('24','139','0.00','0.00','0','10','1417305056','qiandao','99');");
E_D("replace into `ecs_account_log` values('25','139','0.00','0.00','0','10','1417305065','qiandao','99');");
E_D("replace into `ecs_account_log` values('26','139','0.00','0.00','0','10','1417305070','qiandao','99');");
E_D("replace into `ecs_account_log` values('27','168','0.00','0.00','888','888','1417323334','注册送积分','99');");
E_D("replace into `ecs_account_log` values('28','63','0.00','0.00','0','5','1417335811','ddcx','99');");
E_D("replace into `ecs_account_log` values('29','63','0.00','0.00','0','10','1417335823','qiandao','99');");
E_D("replace into `ecs_account_log` values('30','186','0.00','0.00','888','888','1417355017','注册送积分','99');");
E_D("replace into `ecs_account_log` values('31','193','0.00','0.00','0','30','1417377300','bd','99');");
E_D("replace into `ecs_account_log` values('32','197','0.00','0.00','0','10','1417409122','qiandao','99');");
E_D("replace into `ecs_account_log` values('33','198','0.00','0.00','0','10','1417410992','qiandao','99');");
E_D("replace into `ecs_account_log` values('34','198','0.00','0.00','0','30','1417411230','bd','99');");
E_D("replace into `ecs_account_log` values('35','198','0.00','0.00','0','30','1417411234','bd','99');");
E_D("replace into `ecs_account_log` values('36','205','0.00','0.00','888','888','1417435221','注册送积分','99');");
E_D("replace into `ecs_account_log` values('37','221','0.00','0.00','888','888','1417609114','注册送积分','99');");
E_D("replace into `ecs_account_log` values('38','197','0.00','0.00','0','10','1417643155','qiandao','99');");
E_D("replace into `ecs_account_log` values('39','224','0.00','0.00','0','30','1417651181','bd','99');");
E_D("replace into `ecs_account_log` values('40','224','0.00','0.00','0','30','1417651183','bd','99');");
E_D("replace into `ecs_account_log` values('41','244','0.00','0.00','0','30','1417680233','bd','99');");
E_D("replace into `ecs_account_log` values('42','244','0.00','0.00','0','30','1417680239','bd','99');");
E_D("replace into `ecs_account_log` values('43','244','0.00','0.00','0','10','1417680250','qiandao','99');");
E_D("replace into `ecs_account_log` values('44','82','0.00','0.00','0','30','1417681419','bd','99');");
E_D("replace into `ecs_account_log` values('45','82','0.00','0.00','0','10','1417681427','qiandao','99');");
E_D("replace into `ecs_account_log` values('46','257','0.00','0.00','0','30','1417681428','bd','99');");
E_D("replace into `ecs_account_log` values('47','257','0.00','0.00','0','10','1417681440','qiandao','99');");
E_D("replace into `ecs_account_log` values('48','257','0.00','0.00','0','10','1417681440','qiandao','99');");
E_D("replace into `ecs_account_log` values('49','257','0.00','0.00','0','10','1417681445','qiandao','99');");
E_D("replace into `ecs_account_log` values('50','257','0.00','0.00','0','10','1417681450','qiandao','99');");
E_D("replace into `ecs_account_log` values('51','257','0.00','0.00','0','10','1417681452','qiandao','99');");
E_D("replace into `ecs_account_log` values('52','98','0.00','0.00','0','10','1417712048','qiandao','99');");
E_D("replace into `ecs_account_log` values('53','273','0.00','0.00','0','30','1417719949','bd','99');");
E_D("replace into `ecs_account_log` values('54','56','0.00','0.00','0','10','1417739242','qiandao','99');");
E_D("replace into `ecs_account_log` values('55','289','0.00','0.00','888','888','1417751580','注册送积分','99');");
E_D("replace into `ecs_account_log` values('56','126','0.00','0.00','0','10','1417752671','qiandao','99');");

require("../../inc/footer.php");
?>