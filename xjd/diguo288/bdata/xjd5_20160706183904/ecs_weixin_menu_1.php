<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_menu`;");
E_C("CREATE TABLE `ecs_weixin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_menu` values('1','0','微商城','1','','100');");
E_D("replace into `ecs_weixin_menu` values('15','3','解除绑定','1','jcbd','1');");
E_D("replace into `ecs_weixin_menu` values('3','0','会员','1','','99');");
E_D("replace into `ecs_weixin_menu` values('4','0','更多','1','','0');");
E_D("replace into `ecs_weixin_menu` values('5','1','精品推荐','1','best','0');");
E_D("replace into `ecs_weixin_menu` values('7','1','最新商品','1','new','1');");
E_D("replace into `ecs_weixin_menu` values('8','1','热门商品','1','hot','3');");
E_D("replace into `ecs_weixin_menu` values('13','3','绑定会员','1','bdhy','2');");
E_D("replace into `ecs_weixin_menu` values('14','3','订单查询','1','ddcx','3');");
E_D("replace into `ecs_weixin_menu` values('16','3','个人信息','1','info','4');");
E_D("replace into `ecs_weixin_menu` values('18','4','今日签到','1','qd','1');");
E_D("replace into `ecs_weixin_menu` values('19','4','微客服','1','kf','2');");
E_D("replace into `ecs_weixin_menu` values('27','3','快递查询','1','qdcx','3');");
E_D("replace into `ecs_weixin_menu` values('28','1','在线商城','2','http://www.0838g.com/mobile/weixin/oauth.php?id={id}&oid=2','16');");

require("../../inc/footer.php");
?>