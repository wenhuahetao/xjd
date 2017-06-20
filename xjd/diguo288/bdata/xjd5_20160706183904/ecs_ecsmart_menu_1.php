<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_menu`;");
E_C("CREATE TABLE `ecs_ecsmart_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_img` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_menu` values('1','商品分类','images/201603/1458379366066881920.png','catalog.php','1');");
E_D("replace into `ecs_ecsmart_menu` values('2','团购活动','images/201603/1458379393020351679.png','pro_search.php','2');");
E_D("replace into `ecs_ecsmart_menu` values('3','积分兑换','images/201603/1458379414416900416.png','exchange.php','3');");
E_D("replace into `ecs_ecsmart_menu` values('4','优惠活动','images/201603/1458379433548978373.png','activity.php','4');");
E_D("replace into `ecs_ecsmart_menu` values('5','品牌街','images/201603/1458379450725165370.png','brand.php','5');");
E_D("replace into `ecs_ecsmart_menu` values('7','购物车','images/201603/1458379473071020374.png','flow.php','6');");
E_D("replace into `ecs_ecsmart_menu` values('8','个人中心','images/201603/1458379492296814740.png','user.php','7');");
E_D("replace into `ecs_ecsmart_menu` values('10','附近店铺','images/201605/1463227637417376339.png','supplier_near.php','8');");
E_D("replace into `ecs_ecsmart_menu` values('11','预售活动','images/201605/1463231672647836010.png','pre_sale.php','11');");
E_D("replace into `ecs_ecsmart_menu` values('12','拍卖活动','images/201605/1463227653885965238.png','auction.php','12');");

require("../../inc/footer.php");
?>