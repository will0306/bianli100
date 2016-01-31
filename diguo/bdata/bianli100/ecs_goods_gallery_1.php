<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `img_url` varchar(255) NOT NULL default '',
  `img_desc` varchar(255) NOT NULL default '',
  `thumb_url` varchar(255) NOT NULL default '',
  `img_original` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('66','55','images/201008/goods_img/55_P_1282567553313.jpg','','images/201008/thumb_img/55_thumb_P_1282567553706.jpg','images/201008/source_img/55_P_1282567553378.jpg');");
E_D("replace into `ecs_goods_gallery` values('67','56','images/201008/goods_img/56_P_1282568012524.jpg','','images/201008/thumb_img/56_thumb_P_1282568012994.jpg','images/201008/source_img/56_P_1282568012072.jpg');");
E_D("replace into `ecs_goods_gallery` values('68','57','images/201008/goods_img/57_P_1282568548014.jpg','','images/201008/thumb_img/57_thumb_P_1282568548103.jpg','images/201008/source_img/57_P_1282568548239.jpg');");
E_D("replace into `ecs_goods_gallery` values('69','58','images/201008/goods_img/58_P_1282568618813.jpg','','images/201008/thumb_img/58_thumb_P_1282568618314.jpg','images/201008/source_img/58_P_1282568618809.jpg');");
E_D("replace into `ecs_goods_gallery` values('70','59','images/201008/goods_img/59_P_1282568762338.jpg','','images/201008/thumb_img/59_thumb_P_1282568762376.jpg','images/201008/source_img/59_P_1282568762692.jpg');");
E_D("replace into `ecs_goods_gallery` values('71','60','images/201008/goods_img/60_P_1282568811785.jpg','','images/201008/thumb_img/60_thumb_P_1282568811777.jpg','images/201008/source_img/60_P_1282568811032.jpg');");
E_D("replace into `ecs_goods_gallery` values('72','61','images/201008/goods_img/61_P_1282568953314.jpg','','images/201008/thumb_img/61_thumb_P_1282568953117.jpg','images/201008/source_img/61_P_1282568953520.jpg');");
E_D("replace into `ecs_goods_gallery` values('73','62','images/201008/goods_img/62_P_1282569044649.jpg','','images/201008/thumb_img/62_thumb_P_1282569044218.jpg','images/201008/source_img/62_P_1282569044687.jpg');");
E_D("replace into `ecs_goods_gallery` values('74','63','images/201008/goods_img/63_P_1282569277400.jpg','','images/201008/thumb_img/63_thumb_P_1282569277317.jpg','images/201008/source_img/63_P_1282569277773.jpg');");
E_D("replace into `ecs_goods_gallery` values('128','113','images/201311/goods_img/113_P_1385357033158.jpg','','images/201311/thumb_img/113_thumb_P_1385357033329.jpg','images/201311/source_img/113_P_1385357033652.jpg');");
E_D("replace into `ecs_goods_gallery` values('129','114','images/201311/goods_img/114_P_1385358114465.jpg','','images/201311/thumb_img/114_thumb_P_1385358114574.jpg','images/201311/source_img/114_P_1385358114053.jpg');");
E_D("replace into `ecs_goods_gallery` values('130','115','images/201311/goods_img/115_P_1385358231266.jpg','','images/201311/thumb_img/115_thumb_P_1385358231529.jpg','images/201311/source_img/115_P_1385358231508.jpg');");
E_D("replace into `ecs_goods_gallery` values('131','116','images/201311/goods_img/116_P_1385358294524.jpg','','images/201311/thumb_img/116_thumb_P_1385358294694.jpg','images/201311/source_img/116_P_1385358294963.jpg');");
E_D("replace into `ecs_goods_gallery` values('132','117','images/201311/goods_img/117_P_1385358334541.jpg','','images/201311/thumb_img/117_thumb_P_1385358334311.jpg','images/201311/source_img/117_P_1385358334656.jpg');");
E_D("replace into `ecs_goods_gallery` values('133','118','images/201311/goods_img/118_P_1385358425132.jpg','','images/201311/thumb_img/118_thumb_P_1385358425244.jpg','images/201311/source_img/118_P_1385358425615.jpg');");
E_D("replace into `ecs_goods_gallery` values('134','119','images/201311/goods_img/119_P_1385358535556.jpg','','images/201311/thumb_img/119_thumb_P_1385358535931.jpg','images/201311/source_img/119_P_1385358535850.jpg');");
E_D("replace into `ecs_goods_gallery` values('135','120','images/201311/goods_img/120_P_1385358590687.jpg','','images/201311/thumb_img/120_thumb_P_1385358590942.jpg','images/201311/source_img/120_P_1385358590183.jpg');");
E_D("replace into `ecs_goods_gallery` values('136','121','images/201311/goods_img/121_P_1385358646260.jpg','','images/201311/thumb_img/121_thumb_P_1385358646259.jpg','images/201311/source_img/121_P_1385358646211.jpg');");
E_D("replace into `ecs_goods_gallery` values('137','122','images/201311/goods_img/122_P_1385358845711.jpg','','images/201311/thumb_img/122_thumb_P_1385358845342.jpg','images/201311/source_img/122_P_1385358845587.jpg');");
E_D("replace into `ecs_goods_gallery` values('138','123','images/201311/goods_img/123_P_1385359010781.jpg','','images/201311/thumb_img/123_thumb_P_1385359010467.jpg','images/201311/source_img/123_P_1385359010581.jpg');");
E_D("replace into `ecs_goods_gallery` values('139','124','images/201311/goods_img/124_P_1385359423501.jpg','','images/201311/thumb_img/124_thumb_P_1385359423863.jpg','images/201311/source_img/124_P_1385359423638.jpg');");
E_D("replace into `ecs_goods_gallery` values('140','125','images/201311/goods_img/125_P_1385359563517.jpg','','images/201311/thumb_img/125_thumb_P_1385359563343.jpg','images/201311/source_img/125_P_1385359563503.jpg');");
E_D("replace into `ecs_goods_gallery` values('141','126','images/201311/goods_img/126_P_1385359738078.jpg','','images/201311/thumb_img/126_thumb_P_1385359738151.jpg','images/201311/source_img/126_P_1385359738074.jpg');");
E_D("replace into `ecs_goods_gallery` values('142','127','images/201311/goods_img/127_P_1385359869512.jpg','','images/201311/thumb_img/127_thumb_P_1385359869791.jpg','images/201311/source_img/127_P_1385359869952.jpg');");
E_D("replace into `ecs_goods_gallery` values('143','128','images/201311/goods_img/128_P_1385360147110.jpg','','images/201311/thumb_img/128_thumb_P_1385360147201.jpg','images/201311/source_img/128_P_1385360147135.jpg');");
E_D("replace into `ecs_goods_gallery` values('144','129','images/201311/goods_img/129_P_1385360182061.jpg','','images/201311/thumb_img/129_thumb_P_1385360182427.jpg','images/201311/source_img/129_P_1385360182645.jpg');");
E_D("replace into `ecs_goods_gallery` values('145','130','images/201311/goods_img/130_P_1385360213281.jpg','','images/201311/thumb_img/130_thumb_P_1385360213858.jpg','images/201311/source_img/130_P_1385360213804.jpg');");
E_D("replace into `ecs_goods_gallery` values('146','131','images/201311/goods_img/131_P_1385360248743.jpg','','images/201311/thumb_img/131_thumb_P_1385360248512.jpg','images/201311/source_img/131_P_1385360248096.jpg');");
E_D("replace into `ecs_goods_gallery` values('147','132','images/201311/goods_img/132_P_1385360290500.jpg','','images/201311/thumb_img/132_thumb_P_1385360290784.jpg','images/201311/source_img/132_P_1385360290441.jpg');");
E_D("replace into `ecs_goods_gallery` values('148','133','images/201311/goods_img/133_P_1385360323442.jpg','','images/201311/thumb_img/133_thumb_P_1385360323751.jpg','images/201311/source_img/133_P_1385360323398.jpg');");

require("../../inc/footer.php");
?>