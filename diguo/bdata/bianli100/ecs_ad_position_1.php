<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL auto_increment,
  `position_name` varchar(60) NOT NULL default '',
  `ad_width` smallint(5) unsigned NOT NULL default '0',
  `ad_height` smallint(5) unsigned NOT NULL default '0',
  `position_desc` varchar(255) NOT NULL default '',
  `position_style` text NOT NULL,
  PRIMARY KEY  (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('29','分类页广告','720','130','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('30','首页轮播广告1','560','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('31','首页轮播广告2','560','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('32','首页轮播广告3','560','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('33','首页轮播广告4','560','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('34','首页轮播广告5','560','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('35','首页轮播右边广告','185','210','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('36','首页轮播下广告1','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('37','首页轮播下广告2','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('38','首页轮播下广告3','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('39','首页轮播下广告4','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('40','首页轮播下广告5','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('41','首页轮播下广告6','248','103','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('42','便当鲜食右边广告1','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('43','便当鲜食右边广告2','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('44','特色食品广告1','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('45','特色食品广告2','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('46','饮料食品广告1','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('47','饮料食品广告2','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('48','生活用品广告1','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('49','生活用品广告2','215','315','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");

require("../../inc/footer.php");
?>