<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL auto_increment,
  `brand_name` varchar(60) NOT NULL default '',
  `brand_logo` varchar(80) NOT NULL default '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  `brand_banner` varchar(80) NOT NULL COMMENT '商品品牌banner',
  PRIMARY KEY  (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('15','诺基亚','1300274622036700601.jpg','诺基亚-中国发展历程','http://','50','1','');");
E_D("replace into `ecs_brand` values('14','惠普','1300274628415383712.jpg','中国惠普有限公司成立于1985年，是中国第一家中美合资的高科技企业。在二十多年的发展历程中，中国惠普始终保持业务的高速增长，是惠普（HP）全球业','http://','50','1','');");
E_D("replace into `ecs_brand` values('13','清风','1300274637189219384.jpg','金红叶纸业成立于1996年3月，注册于苏州工业园区，占地114平方公顷，总投资达10.6亿美元，第一期投资额为3.6亿美元。\r\n\r\n','http://','50','1','');");
E_D("replace into `ecs_brand` values('12','昂立','1300274645216458967.jpg','上海交大昂立股份有限公司是集现代生物和医药制品研制\r\n','http://','50','1','');");
E_D("replace into `ecs_brand` values('16','三星','1300281217502359992.jpg','引领数字时代（2000年～现在）','http://','50','1','');");
E_D("replace into `ecs_brand` values('17','乐扣乐扣','1300281228570655076.jpg','HanaCobi公司已将独自开发的采用四面锁定方式的乐扣乐扣保鲜盒推向市场。到目前为止，该产品已占据了韩国同类产品的大部分市场，并在国际市场备受世人关注。韩国调查公司于2003年7月发表的统','http://','50','1','');");
E_D("replace into `ecs_brand` values('18','威露士','1300281239671784773.jpg','  2000年6月，莱曼赫斯健康产品（广州）有限公司成立，并在外企林立的广州经济技术开发区投资设厂，生产“威露士”消毒及卫生护理系列以及&ldquo','http://','50','1','');");
E_D("replace into `ecs_brand` values('19','洁云','1300281255212363626.jpg','洁云，面向广大的家庭消费群，代表着温馨和谐快乐的生活氛围，产品线覆盖各种品类的生活用纸，能够充分满足日常使用需求，多年稳居上海同类市场畅销品牌之首，受到顾客的普遍欢迎。','http://','50','1','');");
E_D("replace into `ecs_brand` values('20','蓝月亮','1300281266857877074.jpg','深谙于洗涤之道的广州蓝月亮实业有限公司，秉承“一心一意做洗涤”的理念，将国际尖端技术融入中国人的生活，成为洗涤行业的','http://','50','1','');");
E_D("replace into `ecs_brand` values('21','红富士','1300281346544140990.jpg','海红富士家纺有限公司是国内专业从事家用纺织品和纺织印染的生产经营企业，中国家用纺\r\n\r\n织品协会常务理事单位，上海家用纺织品协会副会长单位。\r\n','http://','50','1','');");
E_D("replace into `ecs_brand` values('22','喜瑞','1300281356131727517.jpg','美国喜瑞草本研究室\r\nCheerer herb laboratory 座落于风景优美的美国','http://','50','1','');");
E_D("replace into `ecs_brand` values('23','好事达','1300281365503396774.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('24','十一坊','1300281376973126415.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('25','lumi','1300281389359351609.jpg','Lumi是进口专业的高端健康营养口牌，我们从世界各地选取优质有机原料，按照国际标准遴选GMP企业生产，致力于','http://#','50','1','');");
E_D("replace into `ecs_brand` values('26','LOVO','1300281401400498945.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('27','纽瑞滋','1300281415119758181.jpg','','http://#','50','1','');");
E_D("replace into `ecs_brand` values('28','佐丹奴','1300281510046381236.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('29',' 李宁','1300281520651237062.jpg','','http://','50','1','');");

require("../../inc/footer.php");
?>