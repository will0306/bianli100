<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_config`;");
E_C("CREATE TABLE `wxch_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` char(150) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_config` values('1','klmy0990','wx3497049a6e5d33c3','0a06dfc9417368362b10fba63951f0a5','tbB-BoaU4d01BLH3UIDgTxZE1m87sYnbh5zRsSvtTpicsd9L2MEg9NClaO83s-j0ofAdaYoK67THCQgc_SiQeCedvM4RiNK3mk7jk5CrsQ8','1417780839');");

require("../../inc/footer.php");
?>