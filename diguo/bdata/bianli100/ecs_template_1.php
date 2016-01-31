<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL default '',
  `region` varchar(40) NOT NULL default '',
  `library` varchar(40) NOT NULL default '',
  `sort_order` tinyint(1) unsigned NOT NULL default '0',
  `id` smallint(5) unsigned NOT NULL default '0',
  `number` tinyint(1) unsigned NOT NULL default '5',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `theme` varchar(60) NOT NULL default '',
  `remarks` varchar(30) NOT NULL default '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('category','右边区域','/library/pages.lbi','1','0','0','0','bianli100','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','3','0','bianli100','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/goods_list.lbi','0','0','0','0','bianli100','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_hot.lbi','0','0','3','0','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告6','/library/ad_position.lbi','0','41','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告5','/library/ad_position.lbi','0','40','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告4','/library/ad_position.lbi','0','39','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告3','/library/ad_position.lbi','0','38','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','方便100动态','/library/cat_articles.lbi','0','8','5','3','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播右边广告','/library/ad_position.lbi','0','35','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告1','/library/ad_position.lbi','0','36','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','首页轮播下广告2','/library/ad_position.lbi','0','37','0','4','bianli100','');");
E_D("replace into `ecs_template` values('index','生活用品','/library/cat_goods.lbi','0','8','10','1','bianli100','');");
E_D("replace into `ecs_template` values('index','食品饮料','/library/cat_goods.lbi','0','1','10','1','bianli100','');");
E_D("replace into `ecs_template` values('index','进口特色食品','/library/cat_goods.lbi','0','2','10','1','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','5','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','5','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','5','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','10','0','bianli100','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','7','0','bianli100','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/category_tree.lbi','0','0','0','0','bianli100','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','10','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','10','0','bianli100','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','10','0','bianli100','');");

require("../../inc/footer.php");
?>