<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_jflog`;");
E_C("CREATE TABLE `ecs_weixin_jflog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fake_id` varchar(32) NOT NULL,
  `jf_type` int(11) NOT NULL COMMENT '1 一次性赠送 2按日计算',
  `key_id` int(11) NOT NULL COMMENT '命令ID',
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `num` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fake_id` (`fake_id`),
  KEY `createymd` (`createymd`),
  KEY `key_id` (`key_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_jflog` values('1','oWeRDuCrUkgH3FkwhTO45twRnBNQ','1','3','1458286119','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('2','oWeRDuCrUkgH3FkwhTO45twRnBNQ','0','0','1458288806','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('3','oWeRDuJdvF3hl_lRD2Gf0EsQ35KU','2','2','1458306534','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('4','ojeCwvxmevoXgwWje7bnSewbmudI','0','0','1458384947','2016-03-19','10');");
E_D("replace into `ecs_weixin_jflog` values('5','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1463442754','2016-05-16','10');");
E_D("replace into `ecs_weixin_jflog` values('6','oYTrKt3AXVaEXcHhrGriq9n2TykA','0','0','1463541376','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('7','oYTrKt3AXVaEXcHhrGriq9n2TykA','2','1','1463541391','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('8','oYTrKt3pTIjY8IZDjje17lyKgq-4','2','1','1463553348','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('9','oYTrKt11zG3U5AaKU4j2-XsCvbio','0','0','1463589749','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('10','oYTrKt11zG3U5AaKU4j2-XsCvbio','2','2','1463589754','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('11','oYTrKt68LMA8g9B9F-uTZFMRfLeY','0','0','1463615867','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('12','oYTrKt68LMA8g9B9F-uTZFMRfLeY','2','2','1463615914','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('13','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1463634882','2016-05-19','10');");
E_D("replace into `ecs_weixin_jflog` values('14','oYTrKtwX_mVL4r5Qo1hycf75h1LM','2','2','1463635208','2016-05-19','10');");
E_D("replace into `ecs_weixin_jflog` values('15','oYTrKt9yQQQApKntCjOMdKsqANJw','2','2','1463644127','2016-05-19','10');");
E_D("replace into `ecs_weixin_jflog` values('16','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1467201920','2016-06-29','10');");
E_D("replace into `ecs_weixin_jflog` values('17','oYTrKt2BbnDHcWq2sA_0dYktrsKw','2','2','1467221565','2016-06-29','10');");
E_D("replace into `ecs_weixin_jflog` values('18','oYTrKt4gL_ATv4HSDI48Y5PJXwRA','2','2','1467254819','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('19','oYTrKt4gL_ATv4HSDI48Y5PJXwRA','1','3','1467254825','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('20','oYTrKt4gL_ATv4HSDI48Y5PJXwRA','2','1','1467254830','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('21','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','2','2','1467259395','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('22','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','2','2','1467259403','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('23','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','2','1','1467259406','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('24','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','2','2','1467259652','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('25','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','1','3','1467259854','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('26','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1467260131','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('27','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1467260276','2016-06-30','10');");
E_D("replace into `ecs_weixin_jflog` values('28','oYTrKt7iUult6wN-G7czlJnkCgHY','2','2','1467561807','2016-07-03','10');");
E_D("replace into `ecs_weixin_jflog` values('29','oYTrKt2yW6i7bMwtV9w0-qykvy1U','0','0','1467596574','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('30','oYTrKt2yW6i7bMwtV9w0-qykvy1U','2','2','1467596832','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('31','oYTrKt6pYlgSuvBSWZEOPZJTMrHg','2','2','1467610661','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('32','oYTrKt0YEYinYQo_gJvIPnIBK-ic','0','0','1467635859','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('33','oYTrKt0YEYinYQo_gJvIPnIBK-ic','1','3','1467635878','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('34','oYTrKt0YEYinYQo_gJvIPnIBK-ic','2','2','1467635889','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('35','oYTrKt6pYlgSuvBSWZEOPZJTMrHg','2','2','1467640589','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('36','oYTrKt6pYlgSuvBSWZEOPZJTMrHg','2','1','1467640597','2016-07-04','10');");
E_D("replace into `ecs_weixin_jflog` values('37','oYTrKt55BmMYjAaq0Isgq-e1hCk0','2','1','1467704503','2016-07-05','10');");
E_D("replace into `ecs_weixin_jflog` values('38','oYTrKt_nfKW3u26lUMEH7nevZzvM','1','3','1467730702','2016-07-05','10');");

require("../../inc/footer.php");
?>