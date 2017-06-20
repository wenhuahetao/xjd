<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','51','24','ECS000051g_p24','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','曼妮芬（ManniForm）','ECS000051','1','','0','1','颜色:银色 \n尺码:XL \n');");
E_D("replace into `ecs_delivery_goods` values('2','2','147','32','ECS000147g_p32','【套装版】荣耀 6 Plus (PE-TL20) 3GB内存标准版 白色 移动4G手机 双卡双待双通','华为','ECS000147','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('3','3','24','0','','悦胜 挪威超新鲜三文鱼 三文鱼中段刺身进口海鲜 广东2份包邮 三文鱼新鲜 500g','','ECS000024','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('4','4','86','0','','海尔HGS-2164手持蒸汽挂烫机家用挂式电熨斗熨烫机正品全国联保--[1]','','ECS000086','1','package_buy','8','1','');");
E_D("replace into `ecs_delivery_goods` values('5','4','91','0','','海尔ZB401G 家用小型床铺除螨仪 床上除螨机吸尘器 紫外线杀菌--[1]','','ECS000091','1','package_buy','8','1','');");
E_D("replace into `ecs_delivery_goods` values('6','4','122','0','','二级大2P智能云定频冷暖柜机空调--[1]','','ECS000122','1','package_buy','8','1','');");
E_D("replace into `ecs_delivery_goods` values('7','4','123','0','','SIEMENS/西门子 BCD-610W(KA92NV03TI)双开家用对开门电冰箱无霜--[1]','','ECS000123','1','package_buy','8','1','');");
E_D("replace into `ecs_delivery_goods` values('8','4','125','0','','Haier/海尔 XQG70-B12866电商/7公斤 全自动 变频滚筒 洗衣机--[1]','','ECS000125','1','package_buy','8','1','');");
E_D("replace into `ecs_delivery_goods` values('9','5','232','46','ECS000232g_p46','包邮 新款户外军迷阿帕奇T恤 纯棉男款短袖半袖特价宽松','','ECS000232','1','','0','1','颜色:黑色[-1] \n尺码:41[7.5] \n');");
E_D("replace into `ecs_delivery_goods` values('10','6','11','0','','七果果 越南白心火龙果1斤【3斤起拍，只多不少】 毁包赔 进口新鲜水果 堪比红心火龙果','','ECS000011','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('11','7','29','0','','意大利费列罗巧克力食品进口零食礼盒576粒整箱装结婚喜糖','口水娃','ECS000029','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','8','52','0','','昆仑玉红枣 和田香枣二级500g 新疆特产 免洗零食 和田大枣子','楼兰密语','ECS000052','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','9','14','0','','哥伦比亚金燕窝果 新鲜进口水果 麒麟果 黄色白心火龙果 4只','','ECS000014','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('14','11','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('15','12','147','47','ECS000147g_p47','【套装版】荣耀 6 Plus (PE-TL20) 3GB内存标准版 白色 移动4G手机 双卡双待双通','华为','ECS000147','1','','0','1','液晶屏尺寸:2.7英寸 \n颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('16','13','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('17','14','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('18','15','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('19','16','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('20','17','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('21','18','20','0','','佳沛新西兰阳光金奇异果12个/进口猕猴桃/新鲜水果','','ECS000020','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('22','19','100','26','ECS000100g_p26','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:银色[100] \n');");
E_D("replace into `ecs_delivery_goods` values('23','20','208','0','','雅培(Abbott) 亲体 金装喜康力幼儿配方奶粉 3段（1-3岁幼儿适用）','伊利','ECS000208','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('24','20','200','0','','爱度AY800蓝牙音箱手机电脑迷你音响无线便携插卡低音炮 带蓝牙自拍 土豪金','伊莱克斯','ECS000200','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('25','21','227','0','','雅诚德Arst餐具套装56头套装中式碗碟套装陶瓷碗碟套装釉上彩','','ECS000227','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('26','22','227','0','','雅诚德Arst餐具套装56头套装中式碗碟套装陶瓷碗碟套装釉上彩','','ECS000227','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('27','22','232','43','ECS000232g_p43','包邮 新款户外军迷阿帕奇T恤 纯棉男款短袖半袖特价宽松','','ECS000232','1','','0','1','颜色:黑色[-1] \n尺码:40[-274] \n');");
E_D("replace into `ecs_delivery_goods` values('28','22','236','0','','稳站日本市场第一的传奇卸妆油！小美海淘极速达，美粉福利低价任性来袭！蝶翠诗(DHC)殿堂级橄榄深层卸妆油200ml，卸妆、去黑头、去角','西门子','ECS000236','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('29','22','229','0','','Jaka蝴蝶夫人浮雕陶瓷分层水果盘 点心盘子 双层三层 多款可选','','ECS000229','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('30','23','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','努比亚','ECS000183','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('31','24','191','0','','雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5','中兴','ECS000191','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('32','25','34','5','ECS000034g_p5','夏装甜美爱心提花蕾丝连衣裙女 宽松欧根纱背心裙','曼妮芬（ManniForm）','ECS000034','1','','0','1','颜色:米色 \n尺码:S \n');");
E_D("replace into `ecs_delivery_goods` values('33','29','23','0','','进口 新鲜水果 车厘子1000g','','ECS000023','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('34','30','168','0','','朵唯 懂小姐美颜自拍女性机 (C9) 薄荷绿 移动4G手机','朵唯','ECS000168','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('35','31','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','努比亚','ECS000183','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('36','32','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','努比亚','ECS000183','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('37','32','191','0','','雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5','中兴','ECS000191','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('38','32','199','0','','爱度ay819无线蓝牙音箱便携迷你小音响插卡u盘低音炮电脑笔记本音箱 白色','','ECS000199','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('39','33','191','0','','雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5','中兴','ECS000191','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('40','34','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','努比亚','ECS000183','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('41','35','232','0','','包邮 新款户外军迷阿帕奇T恤 纯棉男款短袖半袖特价宽松','','ECS000232','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('42','35','122','0','','二级大2P智能云定频冷暖柜机空调','格兰仕','ECS000122','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('43','35','124','0','','Haier/海尔 BCD-252WDBD 252升 无霜风冷 冷藏冷冻家用三门冰箱','海尔','ECS000124','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('44','40','51','24','ECS000051g_p24','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','曼妮芬（ManniForm）','ECS000051','1','','0','1','颜色:银色 \n尺码:XL \n');");
E_D("replace into `ecs_delivery_goods` values('45','40','51','52','ECS000051g_p52','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','曼妮芬（ManniForm）','ECS000051','1','','0','1','尺码:XL \n颜色:棕色 \n');");
E_D("replace into `ecs_delivery_goods` values('46','40','88','0','','家用静音办公室空调加湿器 香薰迷你大容量净化特价','格兰仕','ECS000088','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('47','40','232','0','','包邮 新款户外军迷阿帕奇T恤 纯棉男款短袖半袖特价宽松','','ECS000232','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('48','40','231','0','','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','格兰仕','ECS000231','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('49','40','200','0','','爱度AY800蓝牙音箱手机电脑迷你音响无线便携插卡低音炮 带蓝牙自拍 土豪金','伊莱克斯','ECS000200','1','','0','4','');");
E_D("replace into `ecs_delivery_goods` values('50','40','122','0','','二级大2P智能云定频冷暖柜机空调','格兰仕','ECS000122','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('51','40','100','27','ECS000100g_p27','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','苹果','ECS000100','1','','0','1','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('52','41','51','24','ECS000051g_p24','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','曼妮芬（ManniForm）','ECS000051','1','','0','1','颜色:银色 \n尺码:XL \n');");
E_D("replace into `ecs_delivery_goods` values('53','42','231','0','','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','格兰仕','ECS000231','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('64','53','290','60','2659456954','妖精 韩版修身打底衫字母纯棉T恤','','9034','1','','0','1','颜色:红色 \n尺码:L \n');");
E_D("replace into `ecs_delivery_goods` values('60','49','278','0','','西门子开关插座面板 悦动白墙壁二位双控带荧光开关','','ECS000278','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('61','50','278','0','','西门子开关插座面板 悦动白墙壁二位双控带荧光开关','','ECS000278','1','','0','10','');");
E_D("replace into `ecs_delivery_goods` values('63','52','290','59','','妖精 韩版修身打底衫字母纯棉T恤','','9034','1','','0','1','颜色:黑色 \n尺码:L \n');");

require("../../inc/footer.php");
?>