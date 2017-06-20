<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_attr_gallery` tinyint(1) unsigned NOT NULL,
  `attr_txm` tinyint(1) NOT NULL DEFAULT '0' COMMENT '判断条形码是否显示',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('1','1','颜色','1','1','白色\r\n黑色\r\n银色\r\n金色\r\n宝石蓝\r\n灰色\r\n橙黄\r\n红色\r\n绿色\r\n粉色\r\n紫色','0','0','0','0','1','0');");
E_D("replace into `ecs_attribute` values('2','1','版本','1','0','非合约机\r\n购机入网送话费\r\n联通4G版\r\n移动4G版\r\n电信4G版\r\n公开版\r\n\r\n','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('23','2','袖长','1','0','短袖\r\n无袖\r\n长袖\r\n五分袖\r\n七分袖\r\n九分袖','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('3','1','商品产地','1','0','中国大陆\r\n上海\r\n广东\r\n深圳\r\n北京\r\n福建\r\n云南\r\n湖南\r\n新疆','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('4','1','用途','1','0','人物摄影\r\n风光摄影\r\n静物摄影','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('5','1','分类','1','0','中高级\r\n入门级\r\n大师级','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('6','1','液晶屏尺寸','1','1','2.7英寸\r\n3.0英寸\r\n3.0英寸及以上','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('7','1','有效像素','1','0','1600万以上\r\n2000万-5000万','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('8','1','系统','1','0','安卓（Android）\r\n苹果（IOS）','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('9','1','屏幕尺寸','1','0','3.5英寸\r\n4.5英寸\r\n4.7英寸\r\n5.0英寸\r\n5.2英寸\r\n5.5英寸\r\n6.0英寸','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('10','1','后置摄像头','1','0','不支持\r\n500万像素\r\n800万像素\r\n1300万像素','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('11','1','前置摄像头','1','0','不支持\r\n30万像素\r\n200万像素\r\n500万像素\r\n800万像素','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('12','1','核数','1','0','双核\r\n四核\r\n八核','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('13','1','频率','1','0','800MHz\r\n1G-1.2GHz\r\n1.2GHz\r\n1.5GHz\r\n1.7GHz\r\n1.6GHz\r\n','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('14','1','分辨率','1','0','480×854\r\n540×960\r\n640×960\r\n1280×720\r\n1334×750\r\n1920×1080\r\n1920×1152','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('15','2','颜色','1','1','白色\r\n黑色\r\n粉色\r\n红色\r\n灰色\r\n棕色\r\n蓝色\r\n米色\r\n黄色\r\n玫红\r\n金色\r\n银色\r\n紫色','0','0','0','0','1','0');");
E_D("replace into `ecs_attribute` values('16','2','尺码','1','1','S\r\nM\r\nL\r\nXL\r\nXXL\r\n35.5\r\n36\r\n36.5\r\n37\r\n37.5\r\n38\r\n38.5\r\n39\r\n39.5\r\n40\r\n40.5\r\n41\r\n41.5\r\n42\r\n42.5\r\n43\r\n43.5\r\n44\r\n45','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('17','2','帮面材质','1','0','头层牛皮\r\n塑胶\r\nPU\r\n网布\r\n混合材质','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('18','2','风格','1','0','淑女\r\n优雅\r\n性感\r\n休闲\r\n甜美\r\n欧美\r\nOL\r\n复古\r\n文艺\r\n学院\r\n韩范\r\n名媛\r\n简约','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('20','2','闭合方式','1','0','一字式扣带\r\n套脚\r\n系带\r\n侧拉链\r\n套筒\r\n后拉链\r\n前拉链','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('22','2','鞋底材质','1','0','橡胶\r\n橡胶发泡\r\n聚氨酯','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('24','2','制作工艺','1','0','缝制鞋\r\n硫化鞋\r\n胶粘鞋\r\n注压鞋','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('25','2','腰型','1','0','中腰\r\n高腰\r\n宽松腰\r\n松紧腰\r\n低腰\r\n超低腰','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('26','2','内里材质','1','0','头层牛皮\r\n头层猪皮\r\n人造长毛绒\r\n兔毛\r\nPU\r\n超细纤维\r\n网纱','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('27','2','跟高','1','0','中跟\r\n高跟\r\n低跟\r\n平跟\r\n超高跟','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('28','2','鞋跟形状','1','0','平跟\r\n粗跟\r\n方跟\r\n坡跟\r\n内增高\r\n细跟\r\n马蹄跟\r\n松糕底\r\n酒杯跟','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('29','2','图案','1','0','纯色\r\n条纹\r\n植物花卉\r\n圆点\r\n碎花\r\n抽象图案\r\n其他','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('30','2','鞋头','1','0','圆头\r\n尖头\r\n方头\r\n鱼嘴','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('31','2','裙型','1','0','A字裙\r\n大摆型\r\n不规则裙\r\n公主裙\r\n一步裙\r\n百褶裙\r\n铅笔裙\r\n荷叶边裙\r\n灯笼裙\r\n蛋糕裙','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('32','2','功能','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('33','2','材质','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('34','2','裙长','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('35','2','领型','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('36','2','袖型','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('37','2','版型','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('38','3','适用人群','1','0','油性皮肤\r\n看性皮肤\r\n混合型皮肤','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('39','3','产地','1','2','韩国\r\n美国\r\n德国\r\n意大利\r\n拉斯维加斯\r\n中国\r\n哈尔滨\r\n沈阳','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>