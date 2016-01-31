<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `log_time` int(10) unsigned NOT NULL default '0',
  `user_id` tinyint(3) unsigned NOT NULL default '0',
  `log_info` varchar(255) NOT NULL default '',
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('3','1410075734','1','删除操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1416852956','1','还原数据库备份: 备份时间2014-09-07 23:44:55','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('5','1416855497','1','添加广告位置: 本站公告','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('6','1416855610','1','添加广告: 首页公告','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('7','1416855910','1','编辑广告: 首页公告','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('8','1416858682','1','编辑商店设置: ','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('9','1416863887','1','添加配送区域: 白天配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('10','1416863988','1','删除地区: 北京','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('11','1416863990','1','删除地区: 安徽','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('12','1416863992','1','删除地区: 福建','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('13','1416863994','1','删除地区: 甘肃','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('14','1416863995','1','删除地区: 广东','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('15','1416863997','1','删除地区: 广西','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('16','1416863999','1','删除地区: 贵州','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('17','1416864001','1','删除地区: 海南','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('18','1416864003','1','删除地区: 河北','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('19','1416864005','1','删除地区: 河南','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('20','1416864008','1','删除地区: 黑龙江','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('21','1416864010','1','删除地区: 湖北','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('22','1416864012','1','删除地区: 湖南','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('23','1416864013','1','删除地区: 吉林','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('24','1416864015','1','删除地区: 江苏','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('25','1416864017','1','删除地区: 江西','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('26','1416864019','1','删除地区: 辽宁','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('27','1416864020','1','删除地区: 内蒙古','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('28','1416864022','1','删除地区: 宁夏','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('29','1416864024','1','删除地区: 青海','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('30','1416864026','1','删除地区: 山东','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('31','1416864028','1','删除地区: ','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('32','1416864037','1','删除地区: 山西','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('33','1416864130','1','删除地区: 陕西','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('34','1416864133','1','删除地区: 上海','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('35','1416864136','1','删除地区: 四川','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('36','1416864138','1','删除地区: 天津','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('37','1416864140','1','删除地区: 西藏','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('38','1416864141','1','删除地区: 新疆','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('39','1416864143','1','删除地区: 云南','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('40','1416864145','1','删除地区: 浙江','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('41','1416864146','1','删除地区: 重庆','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('42','1416864147','1','删除地区: 香港','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('43','1416864149','1','删除地区: 澳门','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('44','1416864151','1','删除地区: 台湾','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('45','1416864160','1','添加地区: 克拉玛依','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('46','1416867165','1','编辑商店设置: ','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('47','1416867461','1','卸载支付方式: balance','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('48','1416867518','1','卸载支付方式: bank','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('49','1416867586','1','编辑支付方式: 货到付款','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('50','1416867763','1','安装支付方式: 支付宝','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('51','1416867775','1','安装配送方式: 上门取货','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('52','1416867793','1','添加配送区域: 晚上配送','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('53','1416868127','1','卸载配送方式: 市内快递','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('54','1416868132','1','卸载配送方式: 运费到付','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('55','1416868142','1','卸载配送方式: 邮政快递包裹','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('56','1416868147','1','卸载配送方式: 邮局平邮','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('57','1416868192','1','卸载配送方式: 顺丰速运','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('58','1416868197','1','卸载配送方式: 申通快递','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('59','1416868211','1','卸载配送方式: 圆通速递','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('60','1416868261','1','删除配送区域: 1','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('61','1416868262','1','删除配送区域: 白天配送','101.254.146.69');");
E_D("replace into `ecs_admin_log` values('62','1416868335','1','删除配送区域: 晚上配送','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('63','1416868350','1','卸载配送方式: 晚上配送','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('64','1416868356','1','安装配送方式: 市内快递','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('65','1416868370','1','添加配送区域: 晚上配送','222.161.213.219');");
E_D("replace into `ecs_admin_log` values('66','1416884702','1','删除商品包装: 精品包装','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('67','1416884711','1','删除商品贺卡: 祝福贺卡','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('68','1416884907','1','安装配送方式: 运费到付','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('69','1416884925','1','添加配送区域: 白天配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('70','1416884966','1','卸载配送方式: 白天配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('71','1416885168','1','编辑支付方式: 在线支付','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('72','1416885218','1','编辑支付方式: 货到付款','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('73','1416885298','1','编辑支付方式: 货到付款','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('74','1416885354','1','编辑商店设置: ','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('75','1416885383','1','编辑商店设置: ','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('76','1416885472','1','编辑支付方式: 货到付款','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('77','1416885556','1','编辑配送区域: 晚上配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('78','1416885615','1','编辑配送区域: 晚上配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('79','1416886109','1','编辑配送区域: 晚上配送','218.84.116.237');");
E_D("replace into `ecs_admin_log` values('80','1416894306','1','编辑广告: flow_2_753','222.161.213.218');");
E_D("replace into `ecs_admin_log` values('81','1416896316','1','编辑广告: flow_2_753','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('82','1416896408','1','编辑广告: flow_2_753','222.161.213.218');");
E_D("replace into `ecs_admin_log` values('83','1416897011','1','编辑广告: flow_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('84','1416897245','1','编辑广告: flow_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('85','1416897290','1','编辑广告: flow_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('86','1416897917','1','编辑广告: flow_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('87','1416898089','1','编辑广告: flow_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('88','1416899940','1','编辑广告: cat_2_780','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('89','1416900248','1','编辑广告: cat_2_1','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('90','1416900462','1','编辑广告: flow_2_1','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('91','1416938801','1','编辑广告: flow_2_1','218.84.116.219');");
E_D("replace into `ecs_admin_log` values('92','1416943918','1','编辑广告: cat_2_2','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('93','1416943923','1','编辑广告: flow_1_2','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('94','1416943947','1','编辑广告: flow_1_8','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('95','1416943952','1','编辑广告: flow_1_8','221.13.61.111');");
E_D("replace into `ecs_admin_log` values('96','1416962900','1','编辑权限管理: admin','218.84.116.219');");
E_D("replace into `ecs_admin_log` values('97','1417114293','1','安装支付方式: 支付宝（手机版）','221.13.61.176');");
E_D("replace into `ecs_admin_log` values('98','1417114299','1','安装支付方式: 余额支付','221.13.61.176');");
E_D("replace into `ecs_admin_log` values('99','1417120608','1','编辑支付方式: 支付宝（手机版）','221.13.61.176');");
E_D("replace into `ecs_admin_log` values('100','1417120657','1','编辑支付方式: 支付宝（手机版）','221.13.61.176');");
E_D("replace into `ecs_admin_log` values('101','1417750465','1','编辑广告: 3','221.13.59.198');");
E_D("replace into `ecs_admin_log` values('102','1417750473','1','编辑广告: 2','221.13.59.198');");
E_D("replace into `ecs_admin_log` values('103','1417750498','1','编辑广告: 1','221.13.59.198');");
E_D("replace into `ecs_admin_log` values('104','1428226750','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('105','1428226803','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('106','1428227339','1','编辑广告: 首页轮播广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('107','1428227343','1','编辑广告: flow_2_1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('108','1428227350','1','编辑广告: 首页轮播右边广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('109','1428227357','1','编辑广告: flow_1_8','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('110','1428227366','1','编辑广告: cate_753','127.0.0.1');");

require("../../inc/footer.php");
?>