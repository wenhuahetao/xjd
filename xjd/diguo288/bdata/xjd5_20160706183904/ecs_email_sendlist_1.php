<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_sendlist`;");
E_C("CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_sendlist` values('1','anan@68ecshop.com','6','亲爱的anan您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('2','285188787@qq.com','6','亲爱的68ecshopyy您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('3','3490134@qq.com','6','亲爱的yiren您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-23','0','1','1437615423','0');");
E_D("replace into `ecs_email_sendlist` values('4','358095@qq.com','6','亲爱的admin123您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-28','0','1','1438088687','0');");
E_D("replace into `ecs_email_sendlist` values('5','358095@qq.com','6','亲爱的admin123您好！\n\n恭喜您获得了1个红包，金额为10.00\n68ecshop2015-07-28','0','1','1438089267','0');");
E_D("replace into `ecs_email_sendlist` values('6','11@qq.qq','6','亲爱的111您好！\n\n恭喜您获得了1个红包，金额为777.00\n68ecshop2015-08-22','0','1','1440225660','0');");
E_D("replace into `ecs_email_sendlist` values('7','anan@68ecshop.com','6','亲爱的anan您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('8','admin9@qq.com','6','亲爱的admin9您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('9','admin8@qq.com','6','亲爱的admin8您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('10','33342@qq.com','6','亲爱的liuyu您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('11','222222@qq.com','6','亲爱的liza您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('12','936666944@qq.com','6','亲爱的test您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('13','cuibo@68ecshop.com','6','亲爱的u834HZFP8084您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('14','2697138630@qq.com','6','亲爱的lianglei_您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('15','1234@qq.com','6','亲爱的liang您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('16','1@qq.com','6','亲爱的liangl您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283767','0');");
E_D("replace into `ecs_email_sendlist` values('17','anan@68ecshop.com','6','亲爱的anan您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('18','admin9@qq.com','6','亲爱的admin9您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('19','admin8@qq.com','6','亲爱的admin8您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('20','33342@qq.com','6','亲爱的liuyu您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('21','222222@qq.com','6','亲爱的liza您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('22','936666944@qq.com','6','亲爱的test您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('23','cuibo@68ecshop.com','6','亲爱的u834HZFP8084您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('24','2697138630@qq.com','6','亲爱的lianglei_您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('25','1234@qq.com','6','亲爱的liang您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('26','1@qq.com','6','亲爱的liangl您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283985','0');");
E_D("replace into `ecs_email_sendlist` values('27','979963733@qq.com','6','亲爱的qweqwe您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('28','1471085298@qq.com','6','亲爱的liangtest您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('29','435345@qq.com','6','亲爱的yy您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('30','qwe@qwe.qwe','6','亲爱的ewqewq您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('31','qwqe@qwe.qwe','6','亲爱的wer您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('32','3575177995@qq.com','6','亲爱的fds您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('33','admin@admin.com','6','亲爱的admin002您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('34','admin@qq.com','6','亲爱的admin2008您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('35','admin999@qq.com','6','亲爱的admin999您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('36','12121@qqq.qq','6','亲爱的222您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458283988','0');");
E_D("replace into `ecs_email_sendlist` values('37','','6','亲爱的u180WFAV9828您好！\n\n恭喜您获得了1个红包，金额为¥100.00\n小鲸懂经典版2016-03-18','0','1','1458284155','0');");
E_D("replace into `ecs_email_sendlist` values('38','anan@68ecshop.com','6','亲爱的anan您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('39','admin9@qq.com','6','亲爱的admin9您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('40','admin8@qq.com','6','亲爱的admin8您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('41','33342@qq.com','6','亲爱的liuyu您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('42','222222@qq.com','6','亲爱的liza您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('43','936666944@qq.com','6','亲爱的test您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('44','cuibo@68ecshop.com','6','亲爱的u834HZFP8084您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('45','2697138630@qq.com','6','亲爱的lianglei_您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('46','1234@qq.com','6','亲爱的liang您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('47','1@qq.com','6','亲爱的liangl您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324195','21');");
E_D("replace into `ecs_email_sendlist` values('48','979963733@qq.com','6','亲爱的qweqwe您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('49','1471085298@qq.com','6','亲爱的liangtest您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('50','435345@qq.com','6','亲爱的yy您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('51','qwe@qwe.qwe','6','亲爱的ewqewq您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('52','qwqe@qwe.qwe','6','亲爱的wer您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('53','3575177995@qq.com','6','亲爱的fds您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('54','admin@admin.com','6','亲爱的admin002您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('55','admin@qq.com','6','亲爱的admin2008您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('56','admin999@qq.com','6','亲爱的admin999您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('57','12121@qqq.qq','6','亲爱的222您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324197','21');");
E_D("replace into `ecs_email_sendlist` values('58','3490134@qq.com','6','亲爱的yiren您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324306','21');");
E_D("replace into `ecs_email_sendlist` values('59','358095@qq.com','6','亲爱的admin123您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324306','21');");
E_D("replace into `ecs_email_sendlist` values('60','','6','亲爱的u180MZMA982您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n商家店铺名称2016-03-19','0','1','1458324306','21');");

require("../../inc/footer.php");
?>