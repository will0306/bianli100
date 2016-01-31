<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_keywords`;");
E_C("CREATE TABLE `wxch_keywords` (
  `id` int(4) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_keywords` values('1','文本','文字','2','','81','1');");
E_D("replace into `wxch_keywords` values('30','注册','注册 regedit 会员注册','1','微信粉丝关注此公众账号的时候会自动创建一个会员，不需要再次注册','8','1');");
E_D("replace into `wxch_keywords` values('31','对话','你好 nihao 您好','1','您好，这是系统自助回复，您可以使用功能或输入help了解我们的相关功能','26','1');");
E_D("replace into `wxch_keywords` values('29','首页','首页','1','微信粉丝可以直接在微信中查看产品进入商城直接购买,点击菜单【更多】-》【首页】可以免登录进入首页','19','1');");
E_D("replace into `wxch_keywords` values('32','菜单回复','cdhf','1','通过菜单添加值得来调用 关键词回复功能，并且可以通过此功能来调用想指定的产品','503','1');");
E_D("replace into `wxch_keywords` values('33','图文','图文','2','','421','1');");
E_D("replace into `wxch_keywords` values('35','二维码关注','ewm','1','您是通过扫描二维码关注我们的，感谢使用','21','1');");
E_D("replace into `wxch_keywords` values('36','图文关注回复','subscribe','2','','78','1');");
E_D("replace into `wxch_keywords` values('38','带超链接','超链接','1','文字回复可以添加超链接<a href=\"http://test.souho.net/mobile\">文字超链接</a>','3','1');");
E_D("replace into `wxch_keywords` values('39','小猪引荐','xiaozhutj','1','您是由小猪推荐的会员，欢迎关注微信彩虹','6','1');");
E_D("replace into `wxch_keywords` values('40','外链测试','wailian','2','','6','1');");
E_D("replace into `wxch_keywords` values('41','微信小店','xiaodian 微信小店','2','','10','1');");
E_D("replace into `wxch_keywords` values('42','客服转接','menukf','1','请输入&ldquo;客服&rdquo;、&ldquo;人工客服&rdquo;\r\n','0','1');");
E_D("replace into `wxch_keywords` values('43','test-扫码引荐','testqr','1','您使用了扫码引荐功能，您成功购物之后推荐人可以享受订单返利（分成）','2','1');");
E_D("replace into `wxch_keywords` values('44','临时二维码扫描','临时二维码扫描','1','您是通过会员临时二维码扫描关注','3','1');");

require("../../inc/footer.php");
?>