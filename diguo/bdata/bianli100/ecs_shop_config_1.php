<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_config`;");
E_C("CREATE TABLE `ecs_shop_config` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `code` varchar(30) NOT NULL default '',
  `type` varchar(10) NOT NULL default '',
  `store_range` varchar(255) NOT NULL default '',
  `store_dir` varchar(255) NOT NULL default '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=908 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_config` values('1','0','shop_info','group','','','','1');");
E_D("replace into `ecs_shop_config` values('2','0','basic','group','','','','1');");
E_D("replace into `ecs_shop_config` values('3','0','display','group','','','','1');");
E_D("replace into `ecs_shop_config` values('4','0','shopping_flow','group','','','','1');");
E_D("replace into `ecs_shop_config` values('5','0','smtp','group','','','','1');");
E_D("replace into `ecs_shop_config` values('6','0','hidden','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('7','0','goods','group','','','','1');");
E_D("replace into `ecs_shop_config` values('8','0','sms','group','','','','1');");
E_D("replace into `ecs_shop_config` values('9','0','wap','group','','','','1');");
E_D("replace into `ecs_shop_config` values('101','1','shop_name','text','','','最模板zuimoban.com-方便100网上超市','1');");
E_D("replace into `ecs_shop_config` values('102','1','shop_title','text','','','最模板zuimoban.com-方便100网上超市，鼠标购物，购物即时送，克拉玛依外卖实体店、网购、微信购，克拉玛依鼠标超市便利店','1');");
E_D("replace into `ecs_shop_config` values('103','1','shop_desc','text','','','最模板zuimoban.com-方便100网上超市，网购便当快餐、食品饮料、生活用品，半小时送达','1');");
E_D("replace into `ecs_shop_config` values('104','1','shop_keywords','text','','','最模板zuimoban.com,方便100,克拉玛依鼠标超市,鼠标购物超市,克拉玛依鼠标购物,星期五商城,星期五团,克拉玛依网上超市,爱尚商城,克拉玛依方便100加盟,克拉玛依网上便利店,克拉玛依网络便利店,克拉玛依云商便利店,克拉玛依实体便利店,克拉玛依O2O便利店,克拉玛依线上线下便利店','1');");
E_D("replace into `ecs_shop_config` values('105','1','shop_country','manual','','','1','1');");
E_D("replace into `ecs_shop_config` values('106','1','shop_province','manual','','','3526','1');");
E_D("replace into `ecs_shop_config` values('107','1','shop_city','manual','','','','1');");
E_D("replace into `ecs_shop_config` values('108','1','shop_address','text','','','最模板zuimoban.com','1');");
E_D("replace into `ecs_shop_config` values('109','1','qq','text','','','97671200','1');");
E_D("replace into `ecs_shop_config` values('110','1','ww','text','','','','1');");
E_D("replace into `ecs_shop_config` values('111','1','skype','text','','','','1');");
E_D("replace into `ecs_shop_config` values('112','1','ym','text','','','','1');");
E_D("replace into `ecs_shop_config` values('113','1','msn','text','','','','1');");
E_D("replace into `ecs_shop_config` values('114','1','service_email','text','','','','1');");
E_D("replace into `ecs_shop_config` values('115','1','service_phone','text','','','','1');");
E_D("replace into `ecs_shop_config` values('116','1','shop_closed','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('117','1','close_comment','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('118','1','shop_logo','file','','../themes/{\$template}/images/','','1');");
E_D("replace into `ecs_shop_config` values('119','1','licensed','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('120','1','user_notice','textarea','','','最模板zuimoban.com','1');");
E_D("replace into `ecs_shop_config` values('121','1','shop_notice','textarea','','','<li style=\"color:#666; font-size:12px;\">由于方便100中央厨房改造升级，我们将于12月30日停止生产速食类产品，由于兼职配送员陆续放假，我们在校内配送可能无法送上寝室，敬请谅解！祝各位同学寒假愉快！</li>\r\n<li style=\"color:#f1601a; font-size:12px;\">克拉玛依的消费者有福了，方便一百克拉玛依站12月25日正式上线。</li>\r\n<li style=\"color:#749802; font-size:12px;\">方便一百微信服务号的手机购物功能，于12月1日正式上线</li>','1');");
E_D("replace into `ecs_shop_config` values('122','1','shop_reg_closed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('201','2','lang','manual','','','zh_cn','1');");
E_D("replace into `ecs_shop_config` values('202','2','icp_number','text','','','新ICP备6500990','1');");
E_D("replace into `ecs_shop_config` values('203','2','icp_file','file','','../cert/','','1');");
E_D("replace into `ecs_shop_config` values('204','2','watermark','file','','../images/','../images/watermark.gif','1');");
E_D("replace into `ecs_shop_config` values('205','2','watermark_place','select','0,1,2,3,4,5','','5','1');");
E_D("replace into `ecs_shop_config` values('206','2','watermark_alpha','text','','','85','1');");
E_D("replace into `ecs_shop_config` values('207','2','use_storage','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('208','2','market_price_rate','text','','','1.1','1');");
E_D("replace into `ecs_shop_config` values('209','2','rewrite','select','0,1,2','','0','1');");
E_D("replace into `ecs_shop_config` values('210','2','integral_name','text','','','积分','1');");
E_D("replace into `ecs_shop_config` values('211','2','integral_scale','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('212','2','integral_percent','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('213','2','sn_prefix','text','','','KLMY','1');");
E_D("replace into `ecs_shop_config` values('214','2','comment_check','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('215','2','no_picture','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('218','2','stats_code','textarea','','','<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id=''cnzz_stat_icon_5823495''%3E%3C/span%3E%3Cscript src=''\" + cnzz_protocol + \"s23.cnzz.com/stat.php%3Fid%3D5823495%26show%3Dpic'' type=''text/javascript''%3E%3C/script%3E\"));</script>','1');");
E_D("replace into `ecs_shop_config` values('219','2','cache_time','text','','','3600','1');");
E_D("replace into `ecs_shop_config` values('220','2','register_points','text','','','888','1');");
E_D("replace into `ecs_shop_config` values('221','2','enable_gzip','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('222','2','top10_time','select','0,1,2,3,4','','0','1');");
E_D("replace into `ecs_shop_config` values('223','2','timezone','options','-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12','','8','1');");
E_D("replace into `ecs_shop_config` values('224','2','upload_size_limit','options','-1,0,64,128,256,512,1024,2048,4096','','1024','1');");
E_D("replace into `ecs_shop_config` values('226','2','cron_method','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('227','2','comment_factor','select','0,1,2,3','','0','1');");
E_D("replace into `ecs_shop_config` values('228','2','enable_order_check','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('229','2','default_storage','text','','','1000','1');");
E_D("replace into `ecs_shop_config` values('230','2','bgcolor','text','','','#FFFFFF','1');");
E_D("replace into `ecs_shop_config` values('231','2','visit_stats','select','on,off','','on','1');");
E_D("replace into `ecs_shop_config` values('232','2','send_mail_on','select','on,off','','on','1');");
E_D("replace into `ecs_shop_config` values('233','2','auto_generate_gallery','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('234','2','retain_original_img','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('235','2','member_email_validate','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('236','2','message_board','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('239','2','certificate_id','hidden','','','1300952936','1');");
E_D("replace into `ecs_shop_config` values('240','2','token','hidden','','','6b0bef3bc6a1f52e7bcbd6e7ac639b5ac3e95d393d915ca69a7137964841ee6a','1');");
E_D("replace into `ecs_shop_config` values('241','2','certi','hidden','','','http://service.shopex.cn/openapi/api.php','1');");
E_D("replace into `ecs_shop_config` values('242','2','send_verify_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('243','2','ent_id','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('244','2','ent_ac','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('245','2','ent_sign','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('246','2','ent_email','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('301','3','date_format','hidden','','','Y-m-d','1');");
E_D("replace into `ecs_shop_config` values('302','3','time_format','text','','','Y-m-d H:i:s','1');");
E_D("replace into `ecs_shop_config` values('303','3','currency_format','text','','','￥%s元','1');");
E_D("replace into `ecs_shop_config` values('304','3','thumb_width','text','','','180','1');");
E_D("replace into `ecs_shop_config` values('305','3','thumb_height','text','','','180','1');");
E_D("replace into `ecs_shop_config` values('306','3','image_width','text','','','600','1');");
E_D("replace into `ecs_shop_config` values('307','3','image_height','text','','','600','1');");
E_D("replace into `ecs_shop_config` values('312','3','top_number','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('313','3','history_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('314','3','comments_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('315','3','bought_goods','text','','','3','1');");
E_D("replace into `ecs_shop_config` values('316','3','article_number','text','','','8','1');");
E_D("replace into `ecs_shop_config` values('317','3','goods_name_length','text','','','15','1');");
E_D("replace into `ecs_shop_config` values('318','3','price_format','select','0,1,2,3,4,5','','0','1');");
E_D("replace into `ecs_shop_config` values('319','3','page_size','text','','','50','1');");
E_D("replace into `ecs_shop_config` values('320','3','sort_order_type','select','0,1,2','','0','1');");
E_D("replace into `ecs_shop_config` values('321','3','sort_order_method','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('322','3','show_order_type','select','0,1,2','','1','1');");
E_D("replace into `ecs_shop_config` values('323','3','attr_related_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('324','3','goods_gallery_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('325','3','article_title_length','text','','','16','1');");
E_D("replace into `ecs_shop_config` values('326','3','name_of_region_1','text','','','国家','1');");
E_D("replace into `ecs_shop_config` values('327','3','name_of_region_2','text','','','市','1');");
E_D("replace into `ecs_shop_config` values('328','3','name_of_region_3','text','','','小区','1');");
E_D("replace into `ecs_shop_config` values('329','3','name_of_region_4','text','','','房栋号','1');");
E_D("replace into `ecs_shop_config` values('330','3','search_keywords','text','','','克拉玛依鼠标超市,鼠标购物超市,克拉玛依鼠标购物,星期五商城,星期五团,克拉玛依网上超市,爱尚商城,克拉玛依方便100加盟,克拉玛依网上便利店,克拉玛依网络便利店,克拉玛依云商便利店,克拉玛依实体便利店,克拉玛依O2O便利店,克拉玛依线上线下便利店','0');");
E_D("replace into `ecs_shop_config` values('332','3','related_goods_number','text','','','4','1');");
E_D("replace into `ecs_shop_config` values('333','3','help_open','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('334','3','article_page_size','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('335','3','page_style','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('336','3','recommend_order','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('337','3','index_ad','hidden','','','sys','1');");
E_D("replace into `ecs_shop_config` values('401','4','can_invoice','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('402','4','use_integral','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('403','4','use_bonus','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('404','4','use_surplus','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('405','4','use_how_oos','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('406','4','send_confirm_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('407','4','send_ship_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('408','4','send_cancel_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('409','4','send_invalid_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('410','4','order_pay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('411','4','order_unpay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('412','4','order_ship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('413','4','order_receive_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('414','4','order_unship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('415','4','order_return_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('416','4','order_invalid_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('417','4','order_cancel_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('418','4','invoice_content','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('419','4','anonymous_buy','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('420','4','min_goods_amount','text','','','0','1');");
E_D("replace into `ecs_shop_config` values('421','4','one_step_buy','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('422','4','invoice_type','manual','','','a:2:{s:4:\"type\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:0:\"\";}s:4:\"rate\";a:3:{i:0;d:1;i:1;d:1.5;i:2;d:0;}}','1');");
E_D("replace into `ecs_shop_config` values('423','4','stock_dec_time','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('424','4','cart_confirm','options','1,2,3,4','','4','0');");
E_D("replace into `ecs_shop_config` values('425','4','send_service_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('426','4','show_goods_in_cart','select','1,2,3','','3','1');");
E_D("replace into `ecs_shop_config` values('427','4','show_attr_in_cart','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('501','5','smtp_host','text','','','smtp.sina.com','1');");
E_D("replace into `ecs_shop_config` values('502','5','smtp_port','text','','','25','1');");
E_D("replace into `ecs_shop_config` values('503','5','smtp_user','text','','','wurituan@sina.com','1');");
E_D("replace into `ecs_shop_config` values('504','5','smtp_pass','password','','','tpfwoaini520','1');");
E_D("replace into `ecs_shop_config` values('505','5','smtp_mail','text','','','wurituan@sina.com','1');");
E_D("replace into `ecs_shop_config` values('506','5','mail_charset','select','UTF8,GB2312,BIG5','','UTF8','1');");
E_D("replace into `ecs_shop_config` values('507','5','mail_service','select','0,1','','1','0');");
E_D("replace into `ecs_shop_config` values('508','5','smtp_ssl','select','0,1','','0','0');");
E_D("replace into `ecs_shop_config` values('601','6','integrate_code','hidden','','','ecshop','1');");
E_D("replace into `ecs_shop_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('603','6','hash_code','hidden','','','d44426bd5b64dd2ce05e88473bb59429','1');");
E_D("replace into `ecs_shop_config` values('604','6','template','hidden','','','bianli100','1');");
E_D("replace into `ecs_shop_config` values('605','6','install_date','hidden','','','1380510900','1');");
E_D("replace into `ecs_shop_config` values('606','6','ecs_version','hidden','','','v2.7.3','1');");
E_D("replace into `ecs_shop_config` values('607','6','sms_user_name','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('608','6','sms_password','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('609','6','sms_auth_str','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('610','6','sms_domain','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('611','6','sms_count','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('612','6','sms_total_money','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('613','6','sms_balance','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('614','6','sms_last_request','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}','1');");
E_D("replace into `ecs_shop_config` values('617','6','captcha','hidden','','','36','1');");
E_D("replace into `ecs_shop_config` values('618','6','captcha_width','hidden','','','100','1');");
E_D("replace into `ecs_shop_config` values('619','6','captcha_height','hidden','','','20','1');");
E_D("replace into `ecs_shop_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `ecs_shop_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `ecs_shop_config` values('622','6','flash_theme','hidden','','','redfocus','1');");
E_D("replace into `ecs_shop_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('701','7','show_goodssn','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('702','7','show_brand','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('703','7','show_goodsweight','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('704','7','show_goodsnumber','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('705','7','show_addtime','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('706','7','goodsattr_style','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('707','7','show_marketprice','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('801','8','sms_shop_mobile','text','','','18609901617','1');");
E_D("replace into `ecs_shop_config` values('802','8','sms_order_placed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('803','8','sms_order_payed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('804','8','sms_order_shipped','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('901','9','wap_config','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('902','9','wap_logo','file','','../images/','../images/wap_logo.jpg','1');");
E_D("replace into `ecs_shop_config` values('903','2','message_check','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('904','8','sms_ecmoban_user','text','','','','0');");
E_D("replace into `ecs_shop_config` values('905','8','sms_ecmoban_password','password','','','','0');");
E_D("replace into `ecs_shop_config` values('906','8','sms_signin','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('907','1','shop_yysj','text','','','09:00-23:00','0');");

require("../../inc/footer.php");
?>