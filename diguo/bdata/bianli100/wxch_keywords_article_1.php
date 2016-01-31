<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_keywords_article`;");
E_C("CREATE TABLE `wxch_keywords_article` (
  `kws_id` mediumint(8) unsigned NOT NULL default '0',
  `article_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`kws_id`,`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_keywords_article` values('33','31');");
E_D("replace into `wxch_keywords_article` values('33','34');");
E_D("replace into `wxch_keywords_article` values('33','36');");
E_D("replace into `wxch_keywords_article` values('36','36');");
E_D("replace into `wxch_keywords_article` values('36','37');");
E_D("replace into `wxch_keywords_article` values('37','34');");
E_D("replace into `wxch_keywords_article` values('37','36');");
E_D("replace into `wxch_keywords_article` values('37','37');");
E_D("replace into `wxch_keywords_article` values('40','38');");
E_D("replace into `wxch_keywords_article` values('41','39');");

require("../../inc/footer.php");
?>