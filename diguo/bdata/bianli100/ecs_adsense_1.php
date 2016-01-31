<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `clicks` int(10) unsigned NOT NULL default '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('9','本站','1');");
E_D("replace into `ecs_adsense` values('67','本站','17');");
E_D("replace into `ecs_adsense` values('74','本站','17');");
E_D("replace into `ecs_adsense` values('61','本站','19');");
E_D("replace into `ecs_adsense` values('73','本站','10');");
E_D("replace into `ecs_adsense` values('63','本站','10');");
E_D("replace into `ecs_adsense` values('70','本站','18');");
E_D("replace into `ecs_adsense` values('69','本站','10');");
E_D("replace into `ecs_adsense` values('65','本站','15');");
E_D("replace into `ecs_adsense` values('68','本站','11');");
E_D("replace into `ecs_adsense` values('1','本站','14');");
E_D("replace into `ecs_adsense` values('62','本站','8');");
E_D("replace into `ecs_adsense` values('2','本站','16');");
E_D("replace into `ecs_adsense` values('71','本站','9');");
E_D("replace into `ecs_adsense` values('3','本站','11');");
E_D("replace into `ecs_adsense` values('66','本站','2');");
E_D("replace into `ecs_adsense` values('64','本站','8');");
E_D("replace into `ecs_adsense` values('72','本站','11');");
E_D("replace into `ecs_adsense` values('32767','本站','1');");
E_D("replace into `ecs_adsense` values('13','本站','1');");
E_D("replace into `ecs_adsense` values('9921','本站','1');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('603','本站','1');");
E_D("replace into `ecs_adsense` values('845','本站','1');");
E_D("replace into `ecs_adsense` values('662','本站','1');");
E_D("replace into `ecs_adsense` values('158','本站','1');");

require("../../inc/footer.php");
?>