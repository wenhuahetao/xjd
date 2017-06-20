<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods`;");
E_C("CREATE TABLE `ecs_takegoods` (
  `tg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tg_sn` varchar(20) NOT NULL,
  `tg_pwd` varchar(20) NOT NULL,
  `tg_order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `used_time` varchar(255) NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tg_id`),
  KEY `vc_sn` (`tg_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_takegoods` values('1','1','2z3b9x6k10001','j1a2h0u1w9n2h9p0','0','0','1438034074');");
E_D("replace into `ecs_takegoods` values('2','1','1s4b7v1n10002','r9z2m0t6s9c5r3h4','0','0','1438034074');");
E_D("replace into `ecs_takegoods` values('3','1','7l7m9g0t10003','m1q1e0w1z4x6z9m1','0','0','1438034074');");
E_D("replace into `ecs_takegoods` values('4','1','9f9e0c2o10004','f9s9p8l1v9y1b6d2','0','0','1438034074');");
E_D("replace into `ecs_takegoods` values('5','1','5e1t0d0s10005','m3k2v6m3y0q3h0l3','1','1438034147','1438034074');");
E_D("replace into `ecs_takegoods` values('6','2','5r1y0n4j20001','d1s4b2t4c6p5r0k3','0','0','1438047050');");
E_D("replace into `ecs_takegoods` values('7','2','2z1a3g9q20002','d0i8g1i6t7v3g3i7','0','0','1438047050');");
E_D("replace into `ecs_takegoods` values('8','2','4b1c5t1k20003','q9y5d4y8f9d0u2y5','0','0','1438047050');");
E_D("replace into `ecs_takegoods` values('9','2','9i8y8i5i20004','t7r8b6v9w8u3v4w4','4','1438048846','1438047050');");
E_D("replace into `ecs_takegoods` values('10','2','6y7t0n6k20005','r2t5d2c9j7y9i1l5','2','1438047489@1438048372','1438047050');");
E_D("replace into `ecs_takegoods` values('11','3','6y2w9d8p30001','j2a9e5r7r9x6x5s5','0','0','1438048535');");
E_D("replace into `ecs_takegoods` values('12','3','0k5z5h6a30002','f5b1h8f6b0y0g6x1','0','0','1438048535');");
E_D("replace into `ecs_takegoods` values('13','3','8r5y7g1o30003','y1f4c4q2w6o1n9v2','0','0','1438048535');");
E_D("replace into `ecs_takegoods` values('14','3','0s9m2j9u30004','o0z0m0p8h1q3d5w9','0','0','1438048535');");
E_D("replace into `ecs_takegoods` values('15','3','5b0l1m2v30005','f8m8n0e0f1v8v5j4','0','0','1438048535');");
E_D("replace into `ecs_takegoods` values('16','3','28364185','514748','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('17','3','79479336','564251','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('18','3','73744517','462913','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('19','3','31338033','990114','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('20','3','73682899','002780','8','1456290362@1456290364','1456277902');");
E_D("replace into `ecs_takegoods` values('21','3','11135357','206723','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('22','3','04113205','216304','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('23','3','86633241','141908','0','0','1456277902');");
E_D("replace into `ecs_takegoods` values('24','3','21965656','308052','7','1456284368','1456277902');");
E_D("replace into `ecs_takegoods` values('25','3','55377474','821914','6','1456284339','1456277902');");
E_D("replace into `ecs_takegoods` values('26','3','10253308','373077','5','1456281632','1456277902');");

require("../../inc/footer.php");
?>