<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_menu`;");
E_C("CREATE TABLE `wxch_menu` (
  `id` int(3) NOT NULL auto_increment,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_menu` values('1','click','1','团购/超市','','0');");
E_D("replace into `wxch_menu` values('2','view','1','吐槽反馈','http://m.wsq.qq.com/263490095','0');");
E_D("replace into `wxch_menu` values('3','click','1','会员中心','','0');");
E_D("replace into `wxch_menu` values('4','click','2','爱尚便利','sy','1');");
E_D("replace into `wxch_menu` values('5','view','2','爱尚团购','http://www.aisantuan.com','1');");
E_D("replace into `wxch_menu` values('6','click','2','','','1');");
E_D("replace into `wxch_menu` values('7','click','2','','','1');");
E_D("replace into `wxch_menu` values('8','click','2','','','1');");
E_D("replace into `wxch_menu` values('9','click','2','','','2');");
E_D("replace into `wxch_menu` values('10','click','2','','','2');");
E_D("replace into `wxch_menu` values('11','click','2','','','2');");
E_D("replace into `wxch_menu` values('12','click','2','','','2');");
E_D("replace into `wxch_menu` values('13','click','2','','','2');");
E_D("replace into `wxch_menu` values('14','click','2','会员绑定','bd','3');");
E_D("replace into `wxch_menu` values('15','click','2','订单查询','ddcx','3');");
E_D("replace into `wxch_menu` values('16','click','2','用户中心','member','3');");
E_D("replace into `wxch_menu` values('17','click','2','签到','qiandao','3');");
E_D("replace into `wxch_menu` values('18','click','2','','','3');");

require("../../inc/footer.php");
?>