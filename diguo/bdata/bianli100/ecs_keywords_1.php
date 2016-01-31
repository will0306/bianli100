<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL default '0000-00-00',
  `searchengine` varchar(20) NOT NULL default '',
  `keyword` varchar(90) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2009-09-10','ecshop','ECS000019','19');");
E_D("replace into `ecs_keywords` values('2012-05-14','ecshop','11','1');");
E_D("replace into `ecs_keywords` values('2012-05-14','ecshop','李宁','3');");
E_D("replace into `ecs_keywords` values('2013-11-15','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2013-11-25','ecshop','1111','4');");
E_D("replace into `ecs_keywords` values('2013-11-25','ecshop','2','15');");
E_D("replace into `ecs_keywords` values('2014-04-18','ecshop','薯片','1');");
E_D("replace into `ecs_keywords` values('2014-04-18','ecshop','鱼','1');");
E_D("replace into `ecs_keywords` values('2014-04-20','ecshop','x','1');");
E_D("replace into `ecs_keywords` values('2014-04-20','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-04-22','ecshop','太子','1');");
E_D("replace into `ecs_keywords` values('2014-11-25','SOGOU','克拉玛依油城信息港','4');");
E_D("replace into `ecs_keywords` values('2014-11-25','SOGOU','鼠标超市','2');");
E_D("replace into `ecs_keywords` values('2014-11-25','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','4');");
E_D("replace into `ecs_keywords` values('2014-11-25','ecshop','百雀林','1');");
E_D("replace into `ecs_keywords` values('2014-11-25','ecshop','???','1');");
E_D("replace into `ecs_keywords` values('2014-11-25','SOGOU','鍏嬫媺鐜涗緷缃戜笂璁㈤','1');");
E_D("replace into `ecs_keywords` values('2014-11-25','BAIDU','鐖卞皻璐','2');");
E_D("replace into `ecs_keywords` values('2014-11-25','BAIDU','【方便100】-网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-25','SOGOU','克拉玛依油城信息网','1');");
E_D("replace into `ecs_keywords` values('2014-11-26','SOGOU','克拉玛依油城信息港','3');");
E_D("replace into `ecs_keywords` values('2014-11-26','SOGOU','site:i0990.com','1');");
E_D("replace into `ecs_keywords` values('2014-11-26','SOGOU','爱尚网 克拉玛依','1');");
E_D("replace into `ecs_keywords` values('2014-11-26','ecshop','爱尚星期五超市','1');");
E_D("replace into `ecs_keywords` values('2014-11-26','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','2');");
E_D("replace into `ecs_keywords` values('2014-11-26','BAIDU','鍏嬫媺鐜涗緷缃戞补鍩庝俊鎭','4');");
E_D("replace into `ecs_keywords` values('2014-11-27','BAIDU','【方便100】-网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','2');");
E_D("replace into `ecs_keywords` values('2014-11-27','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-27','BAIDU','鍏嬫媺鐜涗緷','3');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','site:i0990.com','1');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','3');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','克拉玛依油城信息港','7');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','缃戜笂瓒呭競','1');");
E_D("replace into `ecs_keywords` values('2014-11-27','BAIDU','DtR/w5ewilKajyv2M7CcbYg/2tGkfHS6Sbjo/XRXjmnhtdGObsyMwFncMszxgfUq1ykjOZ1ftpGGIgZiy+beqQ==','4');");
E_D("replace into `ecs_keywords` values('2014-11-27','ecshop','核桃','2');");
E_D("replace into `ecs_keywords` values('2014-11-27','ecshop','山核桃','5');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','姹熼槾寰疯姍宸у厠鍔涘','2');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','site:http://www.鍏嬫媺鐜涗緷榧犳爣璐','2');");
E_D("replace into `ecs_keywords` values('2014-11-27','BAIDU','鍏嬫媺鐜涗緷缃戜笂瓒呭競','4');");
E_D("replace into `ecs_keywords` values('2014-11-27','SOGOU','鐖卞皻鍥㈣喘鍏嬫媺鐜涗緷','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','鍏嬫媺鐜涗緷榧犳爣缃','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','ecshop','百雀羚水能量焕采洁容膏80g','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','ecshop','百雀羚水能量焕采洁容膏','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','kAuMRV2hp6bDdz0GWXhEWmKlkY1paiNewAhQMe/TVflxzG7Utl53UddrPxlE49fW8HgomDjDHzP7AhfSdDxITQ==','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','ecshop','山核桃','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','克拉玛依油城信息港','7');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','便利尚品和便利100','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','榧犳爣璐','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','瓒呰兘妞嶇繝鏌旈『娲楄。娑','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','缃戜笂瓒呭競','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','克拉玛依爱尚网','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','鍏嬫媺鐜涗緷鐖卞皻','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','爱尚方便d4','2');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','克拉玛依市油城信息港','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','BAIDU','【方便100】-网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','网上超市','3');");
E_D("replace into `ecs_keywords` values('2014-11-28','SOGOU','\"鍏嬫媺鐜涗緷\"','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','SOGOU','克拉玛依油城信息港','3');");
E_D("replace into `ecs_keywords` values('2014-11-29','SOGOU','网上超市','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','BAIDU','鍏嬫媺鐜涗緷鏄熸湡浜斿洟璐','2');");
E_D("replace into `ecs_keywords` values('2014-11-29','BAIDU','鍏嬫媺鐜涗緷榧犳爣搴','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','SOGOU','鼠标超市','2');");
E_D("replace into `ecs_keywords` values('2014-11-29','SOGOU','鍏嬫媺鐜涗緷  閫侀','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','BAIDU','【方便100】-网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-11-29','SOGOU','鍏嬫媺鐜涗緷缃戞补鍩庝俊鎭','1');");
E_D("replace into `ecs_keywords` values('2014-11-30','BAIDU','鍏嬫媺鐜涗緷鏄熸湡浜斿洟璐','5');");
E_D("replace into `ecs_keywords` values('2014-11-30','SOGOU','姹熼槾寰疯姍宸у厠鍔涘','1');");
E_D("replace into `ecs_keywords` values('2014-11-30','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','2');");
E_D("replace into `ecs_keywords` values('2014-11-30','BAIDU','鍏嬫媺鐜涗緷缃','1');");
E_D("replace into `ecs_keywords` values('2014-11-30','SOGOU','克拉玛依油城信息港','4');");
E_D("replace into `ecs_keywords` values('2014-11-30','SOGOU','鐖卞皻','1');");
E_D("replace into `ecs_keywords` values('2014-11-30','ecshop','菜','1');");
E_D("replace into `ecs_keywords` values('2014-11-30','BAIDU','寰','2');");
E_D("replace into `ecs_keywords` values('2014-11-30','BAIDU','鼠标购物超市','1');");
E_D("replace into `ecs_keywords` values('2014-12-01','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_keywords` values('2014-12-01','SOGOU','克拉玛依油城信息港','8');");
E_D("replace into `ecs_keywords` values('2014-12-01','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','3');");
E_D("replace into `ecs_keywords` values('2014-12-01','SOGOU','克拉玛依爱尚网','1');");
E_D("replace into `ecs_keywords` values('2014-12-01','BAIDU','www','1');");
E_D("replace into `ecs_keywords` values('2014-12-01','BAIDU','cUPqZEWKCo4UnxuKrLw+SrLg21eXVrcPGFEPEEHQlh5WY04C6DuUryyhRM9lromyRbK90gsSxFNSiTdn/fm3lQ==','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','BAIDU','鍏嬫媺鐜涗緷榧犳爣璐','3');");
E_D("replace into `ecs_keywords` values('2014-12-02','BAIDU','克拉玛依鼠标店','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','18609905225','2');");
E_D("replace into `ecs_keywords` values('2014-12-02','BAIDU','zFuA4sdoepYQzcDqdVyUJ1l6sFXKoAEjmaVTw/QTa3f3S04Bw88NPKk/ox8Dbq0Hz63DGVl329vCDloANwdSzA==','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','鼠标超市','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','鍏嬫媺鐜涗緷鍜岀敓娲荤綉','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','克拉玛依网油城信息港','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','克拉玛依爱尚网','2');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOSO','鍏嬫媺鐜涗緷','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','ecshop','求购一台打印机','2');");
E_D("replace into `ecs_keywords` values('2014-12-02','ecshop','求购一台二手打印机','3');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','克拉玛依 外卖','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','鼠标购物网','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','SOGOU','site:i0990.com','1');");
E_D("replace into `ecs_keywords` values('2014-12-02','BAIDU','XsrVXRdUNe34y72774KvdVoeHNCQRWZa7ga0I8RwCqxgoa5F+oGdYCgNBTBqN6OgrPcJK22BdlzPWM8WEh31ZQ==','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','鍏嬫媺鐜涗緷鐖卞皻鍥㈣喘缃','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','克拉玛依油城信息港','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','瑗垮煙鏄ラ吀濂跺摢鏈夊崠','2');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','克拉玛依网油城信息港','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','BAIDU','用户中心_爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店-PoweredbyECShop','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店-PoweredbyECShop','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','榧犳爣璐','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','奶粉','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','BAIDU','鍏嬫媺鐜涗緷榧犳爣璐','2');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','克拉玛依油田信息网','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','klmyycxxg','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','暖宝宝','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','?????????','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','地毯','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','??','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','克拉玛依网上订餐','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','鍏嬫媺鐜涗緷缃戞补鍩庝俊鎭','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','site:i0990.com','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','3');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','克拉玛依油城信息港','5');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','www','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','渚垮埄淇濇箍闇','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','克拉玛依油诚信息港','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','SOGOU','鐖变究鍒╃綉涓婅秴甯','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','鍏嬫媺鐜涗緷缃戜笂瓒呭競','2');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','ayshd2G9HfN9KzRs4a+ED8DGPckNfDtu5gYQM0JvZEYY7RZmQY+DgvJiiL6m1O3JSU5UJ7lCI9OtexqGPoNTfQ==','2');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','鍏嬫媺鐜涗緷娌瑰煄缃','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','ecshop','郎酒','1');");
E_D("replace into `ecs_keywords` values('2014-12-04','BAIDU','鍏嬫媺鐜涗緷榧犳爣璐','2');");
E_D("replace into `ecs_keywords` values('2014-12-05','BAIDU','鍏嬫媺鐜涗緷鏄熸湡浜斿洟','2');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','鍏嬫媺鐜涗緷娌瑰煄淇℃伅娓','4');");
E_D("replace into `ecs_keywords` values('2014-12-05','BAIDU','www','1');");
E_D("replace into `ecs_keywords` values('2014-12-05','BAIDU','爱尚便利-方便100网上超市,鼠标购物,购物即时送,克拉玛依外卖实体店、网购、微信购,克拉玛依鼠标超市便利店-PoweredbyECShop','1');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','鐖变究鍒╃綉涓婅秴甯','1');");
E_D("replace into `ecs_keywords` values('2014-12-05','ecshop','网上购物','1');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','克拉玛依油城信息港','2');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','爱尚','1');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','榧犳爣璐','2');");
E_D("replace into `ecs_keywords` values('2014-12-05','SOGOU','鍏嬫媺鐜涗緷娌瑰煄','2');");

require("../../inc/footer.php");
?>