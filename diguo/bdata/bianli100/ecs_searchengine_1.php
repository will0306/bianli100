<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL default '0000-00-00',
  `searchengine` varchar(20) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-11-25','GOOGLE','81');");
E_D("replace into `ecs_searchengine` values('2014-11-25','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2014-11-25','SOGOU','100');");
E_D("replace into `ecs_searchengine` values('2014-11-26','SOGOU','300');");
E_D("replace into `ecs_searchengine` values('2014-11-26','GOOGLE','115');");
E_D("replace into `ecs_searchengine` values('2014-11-26','YAHOO','5');");
E_D("replace into `ecs_searchengine` values('2014-11-27','SOGOU','279');");
E_D("replace into `ecs_searchengine` values('2014-11-27','YAHOO','4');");
E_D("replace into `ecs_searchengine` values('2014-11-27','GOOGLE','38');");
E_D("replace into `ecs_searchengine` values('2014-11-28','GOOGLE','222');");
E_D("replace into `ecs_searchengine` values('2014-11-28','SOGOU','215');");
E_D("replace into `ecs_searchengine` values('2014-11-28','YAHOO','20');");
E_D("replace into `ecs_searchengine` values('2014-11-29','GOOGLE','95');");
E_D("replace into `ecs_searchengine` values('2014-11-29','SOGOU','101');");
E_D("replace into `ecs_searchengine` values('2014-11-29','YAHOO','42');");
E_D("replace into `ecs_searchengine` values('2014-11-30','GOOGLE','70');");
E_D("replace into `ecs_searchengine` values('2014-11-30','YAHOO','8');");
E_D("replace into `ecs_searchengine` values('2014-11-30','SOGOU','180');");
E_D("replace into `ecs_searchengine` values('2014-12-01','GOOGLE','44');");
E_D("replace into `ecs_searchengine` values('2014-12-01','SOGOU','103');");
E_D("replace into `ecs_searchengine` values('2014-12-01','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2014-12-02','GOOGLE','69');");
E_D("replace into `ecs_searchengine` values('2014-12-02','SOGOU','198');");
E_D("replace into `ecs_searchengine` values('2014-12-02','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2014-12-03','GOOGLE','33');");
E_D("replace into `ecs_searchengine` values('2014-12-03','SOGOU','90');");
E_D("replace into `ecs_searchengine` values('2014-12-03','YAHOO','47');");
E_D("replace into `ecs_searchengine` values('2014-12-04','GOOGLE','25');");
E_D("replace into `ecs_searchengine` values('2014-12-04','SOGOU','201');");
E_D("replace into `ecs_searchengine` values('2014-12-04','YAHOO','6');");
E_D("replace into `ecs_searchengine` values('2014-12-05','GOOGLE','65');");
E_D("replace into `ecs_searchengine` values('2014-12-05','YAHOO','9');");
E_D("replace into `ecs_searchengine` values('2014-12-05','SOGOU','91');");

require("../../inc/footer.php");
?>