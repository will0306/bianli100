<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_count`;");
E_C("CREATE TABLE `wxch_prize_count` (
  `cid` int(7) NOT NULL auto_increment,
  `pid` int(5) NOT NULL,
  `wxid` char(28) NOT NULL,
  `num` int(5) NOT NULL,
  `count` int(5) unsigned NOT NULL,
  `lasttime` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`cid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=186 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_count` values('163','1','odr9VuPycefQmguvWGImvCN6QCqc','8','8','1414565873','1414565799');");
E_D("replace into `wxch_prize_count` values('164','20','odr9VuKOu1YoBjd8EIj-Xyjfkgbo','5','5','1414598627','1414598613');");
E_D("replace into `wxch_prize_count` values('165','20','odr9VuJxtEW3mRB-f0nf618F57rA','8','8','1414644829','1414644785');");
E_D("replace into `wxch_prize_count` values('166','20','odr9VuHckp36N8DOqTIEivhVOUsY','38','38','1414667428','1414667176');");
E_D("replace into `wxch_prize_count` values('167','20','odr9VuFUx7mIg_dyVL95M_491djY','36','7','1415259382','1414669657');");
E_D("replace into `wxch_prize_count` values('168','20','odr9VuFPYd_2LqoLMo27O_w6Iq8U','4','1','1416025234','1414775033');");
E_D("replace into `wxch_prize_count` values('169','20','odr9VuJr12UzOxcqWrF5OC6G8YhY','9','9','1414853279','1414853238');");
E_D("replace into `wxch_prize_count` values('170','20','odr9VuIQL18k9wGhTKwhx7RjBxyA','17','17','1414863307','1414863211');");
E_D("replace into `wxch_prize_count` values('171','20','odr9VuJ5nAnvzhme6K2oZ-4u_rQg','22','22','1414923591','1414923453');");
E_D("replace into `wxch_prize_count` values('172','20','odr9VuH-lyLNzjodhADkQuBe8tRg','43','43','1415027039','1415026775');");
E_D("replace into `wxch_prize_count` values('173','20','odr9VuFl82xZbLwdDN6cG4sZMMyc','10','10','1415100532','1415100475');");
E_D("replace into `wxch_prize_count` values('174','20','odr9VuOqnHS5mO5ygrvNaiQh3ZdM','50','50','1415166123','1415165859');");
E_D("replace into `wxch_prize_count` values('175','20','odr9VuP6x9AawoqcIf5ZvgJSaSwM','4','4','1415204221','1415204214');");
E_D("replace into `wxch_prize_count` values('176','20','odr9VuL9ngcOGU3UaBbi-g2MuhxI','9','9','1415471463','1415471420');");
E_D("replace into `wxch_prize_count` values('177','20','odr9VuLwCrz1tdZI6KWFbM1T4t3w','5','5','1415537380','1415537360');");
E_D("replace into `wxch_prize_count` values('178','20','odr9VuNo9dxzlpLa8hz3ONXdQTWs','16','16','1415808022','1415807928');");
E_D("replace into `wxch_prize_count` values('179','20','odr9VuPycefQmguvWGImvCN6QCqc','1','1','1415887919','1415887919');");
E_D("replace into `wxch_prize_count` values('180','20','odr9VuMNUw5jeRGlYu9FjtChCGos','6','6','1415987540','1415987503');");
E_D("replace into `wxch_prize_count` values('181','20','odr9VuNn9Spgv7w43KQ7EOaOgAuM','14','14','1415987881','1415987837');");
E_D("replace into `wxch_prize_count` values('182','20','odr9VuDZnQlSi_GX1OAc_KYRe_zE','100','100','1415994657','1415994388');");
E_D("replace into `wxch_prize_count` values('183','20','odr9VuH9mzpHP1uZSRWBi-uC27O4','1','1','1416017888','1416017888');");
E_D("replace into `wxch_prize_count` values('184','20','odr9VuE4SroVHmGR59x7IFI42F3U','5','5','1416067660','1416067630');");
E_D("replace into `wxch_prize_count` values('185','20','odr9VuBvkwjhbACBczgPuEv2nZnQ','6','6','1416288599','1416288517');");

require("../../inc/footer.php");
?>