<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_nav`;");
E_C("CREATE TABLE `ecs_supplier_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_nav` values('1','c','0','真皮公主鞋','1','2','0','supplier.php?go=category&amp;suppId=2&amp;id=10','middle','2');");
E_D("replace into `ecs_supplier_nav` values('2','c','0','车床玩具','1','4','0','supplier.php?go=category&amp;suppId=2&amp;id=11','middle','2');");
E_D("replace into `ecs_supplier_nav` values('3','c','0','孕婴用品','1','6','0','supplier.php?go=category&amp;suppId=2&amp;id=12','middle','2');");
E_D("replace into `ecs_supplier_nav` values('4','c','0','宝宝营养','1','8','0','supplier.php?go=category&amp;suppId=2&amp;id=13','middle','2');");
E_D("replace into `ecs_supplier_nav` values('5','c','0','车床玩具','1','10','0','supplier.php?go=category&amp;suppId=2&amp;id=17','middle','2');");
E_D("replace into `ecs_supplier_nav` values('8','c','2','国产时令','1','2','0','supplier.php?go=category&amp;suppId=1&amp;id=2','middle','1');");
E_D("replace into `ecs_supplier_nav` values('9','c','1','进口鲜果','1','4','0','supplier.php?go=category&amp;suppId=1&amp;id=1','middle','1');");
E_D("replace into `ecs_supplier_nav` values('10','c','3','海鲜肉类','1','6','0','supplier.php?go=category&amp;suppId=1&amp;id=3','middle','1');");
E_D("replace into `ecs_supplier_nav` values('11','c','22','配件','1','2','0','supplier.php?go=category&amp;suppId=5&amp;id=22','middle','5');");
E_D("replace into `ecs_supplier_nav` values('12','c','19','上装','1','4','0','supplier.php?go=category&amp;suppId=5&amp;id=19','middle','5');");
E_D("replace into `ecs_supplier_nav` values('13','c','20','下装','1','6','0','supplier.php?go=category&amp;suppId=5&amp;id=20','middle','5');");
E_D("replace into `ecs_supplier_nav` values('14','c','21','鞋子','1','8','0','supplier.php?go=category&amp;suppId=5&amp;id=21','middle','5');");
E_D("replace into `ecs_supplier_nav` values('15','c','18','裙装','0','10','0','supplier.php?go=category&amp;suppId=5&amp;id=18','middle','5');");
E_D("replace into `ecs_supplier_nav` values('16','c','26','连衣裙','1','12','0','supplier.php?go=category&amp;suppId=5&amp;id=26','middle','5');");
E_D("replace into `ecs_supplier_nav` values('17','c','27','公主裙','1','14','0','supplier.php?go=category&amp;suppId=5&amp;id=27','middle','5');");
E_D("replace into `ecs_supplier_nav` values('18','c','47','面部清洁','1','2','0','supplier.php?go=category&amp;suppId=6&amp;id=47','middle','6');");
E_D("replace into `ecs_supplier_nav` values('19','c','48','面部护肤','1','4','0','supplier.php?go=category&amp;suppId=6&amp;id=48','middle','6');");
E_D("replace into `ecs_supplier_nav` values('20','c','50','眼部护理','1','6','0','supplier.php?go=category&amp;suppId=6&amp;id=50','middle','6');");
E_D("replace into `ecs_supplier_nav` values('21','c','49','身体护肤','1','8','0','supplier.php?go=category&amp;suppId=6&amp;id=49','middle','6');");
E_D("replace into `ecs_supplier_nav` values('22','c','35','小西装','1','16','0','supplier.php?go=category&amp;suppId=5&amp;id=35','middle','5');");
E_D("replace into `ecs_supplier_nav` values('23','c','0','卧室家具','1','2','0','supplier.php?go=category&amp;suppId=7&amp;id=91','middle','7');");
E_D("replace into `ecs_supplier_nav` values('24','c','0','客厅家具','1','4','0','supplier.php?go=category&amp;suppId=7&amp;id=92','middle','7');");
E_D("replace into `ecs_supplier_nav` values('25','c','0','精品厨具','1','6','0','supplier.php?go=category&amp;suppId=7&amp;id=93','middle','7');");
E_D("replace into `ecs_supplier_nav` values('26','c','0','床品套件','1','8','0','supplier.php?go=category&amp;suppId=7&amp;id=94','middle','7');");
E_D("replace into `ecs_supplier_nav` values('27','c','0','窗帘布艺','1','10','0','supplier.php?go=category&amp;suppId=7&amp;id=95','middle','7');");
E_D("replace into `ecs_supplier_nav` values('28','c','0','日用清洁','1','12','0','supplier.php?go=category&amp;suppId=7&amp;id=96','middle','7');");
E_D("replace into `ecs_supplier_nav` values('29','c','65','护肤套装','1','10','0','supplier.php?go=category&amp;suppId=6&amp;id=65','middle','6');");
E_D("replace into `ecs_supplier_nav` values('30','c','81','洗发','1','12','0','supplier.php?go=category&amp;suppId=6&amp;id=81','middle','6');");
E_D("replace into `ecs_supplier_nav` values('31','c','140','铁观音','1','2','0','supplier.php?go=category&amp;suppId=18&amp;id=140','middle','18');");
E_D("replace into `ecs_supplier_nav` values('32','c','141','饮料','1','4','0','supplier.php?go=category&amp;suppId=18&amp;id=141','middle','18');");
E_D("replace into `ecs_supplier_nav` values('33','c','142','酒水','1','6','0','supplier.php?go=category&amp;suppId=18&amp;id=142','middle','18');");
E_D("replace into `ecs_supplier_nav` values('34','c','143','茗茶','1','8','0','supplier.php?go=category&amp;suppId=18&amp;id=143','middle','18');");

require("../../inc/footer.php");
?>