<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_qr`;");
E_C("CREATE TABLE `wxch_qr` (
  `qid` int(7) NOT NULL auto_increment,
  `type` char(2) NOT NULL default 'qr',
  `expire_seconds` int(4) NOT NULL,
  `action_name` varchar(30) NOT NULL,
  `scene_id` int(7) NOT NULL,
  `ticket` varchar(120) NOT NULL,
  `scene` varchar(200) NOT NULL,
  `qr_path` varchar(200) NOT NULL,
  `subscribe` int(8) unsigned NOT NULL,
  `scan` int(8) unsigned NOT NULL,
  `function` varchar(100) NOT NULL,
  `affiliate` int(8) unsigned NOT NULL,
  `endtime` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY  (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_qr` values('1','qr','0','QR_LIMIT_SCENE','1','gQEd8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FVMEsxdUhsdDNuT2dzTUllbUZuAAIEi9zCUgMEAAAAAA==','网站顶部','/images/upload/1396891721.jpg','10','36','ewm','0','0','0');");
E_D("replace into `wxch_qr` values('4','qr','0','QR_LIMIT_SCENE','3','gQH98DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0RVMnByRGpsS1hsUWhXZFAyV0ZuAAIEpbMOUwMEAAAAAA==','关注优惠卷','/images/upload/1396837811.jpg','0','6','gzyhj','0','0','0');");
E_D("replace into `wxch_qr` values('6','qr','0','QR_LIMIT_SCENE','5','gQGh8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0dVM2daMUhsWW5rYk0zT0drR0ZuAAIENYlWUwMEAAAAAA==','444','/images/upload/1398179932.jpg','0','5','test','0','0','0');");
E_D("replace into `wxch_qr` values('7','tj','0','QR_LIMIT_SCENE','6','gQGz7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FFMkxnVWpsQ1hsd2ZjSmdfMkZuAAIEpnJsUwMEAAAAAA==','小猪推荐','/images/upload/1400075809.jpg','0','6','xiaozhutj','195','0','0');");
E_D("replace into `wxch_qr` values('9','tj','0','QR_LIMIT_SCENE','8','gQFN8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3RVM0Y2NFhsU25reng5OEh0V0ZuAAIEIZVxUwMEAAAAAA==','test','/images/upload/1405342259.jpg','1','7','testqr','8','0','1405342259');");

require("../../inc/footer.php");
?>