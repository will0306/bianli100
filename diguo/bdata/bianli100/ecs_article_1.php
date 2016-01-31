<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL default '',
  `author_email` varchar(60) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `article_type` tinyint(1) unsigned NOT NULL default '2',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `open_type` tinyint(1) unsigned NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1380510899','','0','','');");
E_D("replace into `ecs_article` values('7','4','购物常见问题','','','','','0','1','1380937690','','0','http://','');");
E_D("replace into `ecs_article` values('8','4','订单状态','','','','','0','1','1380937699','','0','http://','');");
E_D("replace into `ecs_article` values('9','4','购物流程','','','','','0','1','1380937711','','0','http://','');");
E_D("replace into `ecs_article` values('10','5','货到付款','','','','','0','1','1380937720','','0','http://','');");
E_D("replace into `ecs_article` values('11','5','配送支付智能查询','','','','','0','1','1380937737','','0','http://','');");
E_D("replace into `ecs_article` values('12','5','在线支付','','','','','0','1','1380937745','','0','http://','');");
E_D("replace into `ecs_article` values('13','6','配送范围与费用','','','','','0','1','1380937753','','0','http://','');");
E_D("replace into `ecs_article` values('14','6','签收须知','','','','','0','1','1380937762','','0','http://','');");
E_D("replace into `ecs_article` values('15','6','快递送货','','','','','0','1','1380937775','','0','http://','');");
E_D("replace into `ecs_article` values('16','7','退换货流程','','','','','0','1','1380937782','','0','http://','');");
E_D("replace into `ecs_article` values('17','7','退换货政策','','','','','0','1','1380937797','','0','http://','');");
E_D("replace into `ecs_article` values('18','7','服务政策','','','','','0','1','1380937810','','0','http://','');");
E_D("replace into `ecs_article` values('19','8','热烈祝贺星期五团转型方便一百','<p>热烈祝贺星期五团转型方便一百</p><p>经过市场的考验和时间的磨练</p><p>星期五团成功转型为网上服务超市！</p><p><br/></p><p>感谢一路陪我们走过来的网友！</p><p><br/></p><p>真心的感谢！<br/></p>','','','','0','1','1381083295','','0','http://','');");
E_D("replace into `ecs_article` values('20','8','方便一百-网上超市招商中','<p>方便一百-网上超市招商中</p><p><br/></p><p>联系方式：18609905225 马经理<br/></p>','','','','0','1','1381083304','','0','http://','');");
E_D("replace into `ecs_article` values('21','8','方便一百-网上超市服务时间','<p>全天候48小时qq在线976700655 唯一客户qq</p><p>客服值班电话：18609905225</p><p>交易支付问题：18609901617<br/></p>','','','','0','1','1381083315','','0','http://','');");
E_D("replace into `ecs_article` values('22','2','随手拍百度，百万话费过大年','<p>&nbsp;<span style=\"color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">尊敬的联盟会员，您好：</span></p>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">&nbsp; &nbsp;&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">&nbsp; &nbsp;&nbsp;<a href=\"http://huati.weibo.com/k/%E9%9A%8F%E6%89%8B%E6%8B%8D%E7%99%BE%E5%BA%A6?from=501\" style=\"color: rgb(75, 129, 194); border: 0px; margin: 0px; padding: 0px; text-decoration: none;\"><span style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">#随手拍百度#</span></a>拿百万话费过大年！1月24日至2月10日期间，只需拍下你身边的百度广告（手机百度、百度地图、百度手机卫士）发布图文微博并<a href=\"http://weibo.com/n/%E7%99%BE%E5%BA%A6?from=feed&amp;loc=at\" style=\"color: rgb(75, 129, 194); border: 0px; margin: 0px; padding: 0px; text-decoration: none;\"><span style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">@百度</span></a>&nbsp;（记得加上<a href=\"http://huati.weibo.com/k/%E9%9A%8F%E6%89%8B%E6%8B%8D%E7%99%BE%E5%BA%A6?from=501\" style=\"color: rgb(75, 129, 194); border: 0px; margin: 0px; padding: 0px; text-decoration: none;\"><span style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(0, 0, 255);\">#随手拍百度#</span></a>哦），百度将每天随机揪出60名幸运儿送出600元话费大奖，获奖名单隔日公布。这等好消息还不快告诉你的亲朋好友？拿百万话费过大年啦！</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">&nbsp; &nbsp;&nbsp;<img src=\"http://union.baidu.com/upload/files/fck/image/c9f0ec22-c71a-4bcc-9862-551f7ded8836.JPG\" width=\"549\" height=\"2112\" border=\"1\" alt=\"\" style=\"border: 0px; margin: 0px; padding: 0px;\" />&nbsp; &nbsp;&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">百度联盟&mdash;&mdash;帮助合作伙伴在各自领域取得成功！ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">百度联盟敬上!&nbsp;</div>\r\n<div style=\"border: 0px; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: 宋体, Arial, Helvetica, sans-serif; line-height: 22px;\">2014年1月28日</div>','','','','0','1','1395101370','','0','http://','');");
E_D("replace into `ecs_article` values('23','2','供应商合作','<h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;\" label=\"标题居中\"><img src=\"http://www.i0990.com/includes/ueditor/php/../../../images/image/35601414596229.jpg\" title=\"article_surplier_1(1)副本.jpg\"/><br/></h1><p><br/></p><h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;\" label=\"标题居中\"><img src=\"http://www.i0990.com/includes/ueditor/php/../../../images/image/92611414596231.jpg\" alt=\"\" height=\"212\" width=\"925\"/></h1><h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;\" label=\"标题居中\"><img src=\"http://www.i0990.com/includes/ueditor/php/../../../images/image/80131414596232.jpg\" alt=\"\" height=\"278\" width=\"924\"/></h1><p><br/></p>','便利一百','','便利一百 供应商合作','0','1','1414567478','','0','http://','便利一百 供应商合作 www.i0990.com 招商电话：18609905225 / 1609901617');");
E_D("replace into `ecs_article` values('24','8','爱尚团购与星期五团达成共识','<p>爱尚团购与星期五团达成共识 合并为一家团购</p><p><br/></p><p>合并后划分2大主体，既团购频道、网上超市频道</p><p><br/></p><p>为更好服务油城感谢一路陪我们走来的网友！<br/></p>','','','','0','1','1414613356','','0','http://','');");
E_D("replace into `ecs_article` values('25','8','星期五团旗下方便一百试运行中','<p>星期五团旗下方便一百试运行中</p><p><br/></p><p>大家对我们的建议我们会及时收集</p><p><br/></p><p>唯一客服QQ：976700655<br/></p>','','','','0','1','1414613433','','0','http://','');");

require("../../inc/footer.php");
?>