<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords`;");
E_C("CREATE TABLE `ecs_weixin_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `keys` varchar(100) NOT NULL,
  `jf_type` int(11) NOT NULL,
  `jf_num` int(11) NOT NULL,
  `jf_maxnum` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL,
  `clicks` int(11) NOT NULL,
  `diy_type` int(11) NOT NULL,
  `diy_value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_keywords` values('1','best','best 推荐 极品','2','10','100','推荐商品','11','0','');");
E_D("replace into `ecs_weixin_keywords` values('2','hot','hot 热门 热门商品 最热','2','10','100','热门商品','35','0','');");
E_D("replace into `ecs_weixin_keywords` values('3','new','new 最新 新品','1','10','0','最新商品','10','0','');");
E_D("replace into `ecs_weixin_keywords` values('4','ddcx','ddcx 订单 订单查询','0','0','0','订单查询','7','0','');");
E_D("replace into `ecs_weixin_keywords` values('5','info','info 个人信息 资料','0','0','0','个人信息','42','0','');");

require("../../inc/footer.php");
?>