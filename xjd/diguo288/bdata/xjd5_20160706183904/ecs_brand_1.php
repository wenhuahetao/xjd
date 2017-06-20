<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_img` varchar(80) NOT NULL,
  `brand_desc` text NOT NULL,
  `wap_brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','资生堂','1437428736611050860.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('2','CK','1437428796001158264.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('3','Disney','1437428837807736154.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('4','雅诗兰黛','1437428885582505638.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('5','相宜本草','1437428934219489398.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('6','Dior','1437428980225446797.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('7','爱丽','1437429042714176893.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('8','雅顿','1437429105344033623.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('9','狮王','1437429180391175313.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('10','高丝洁','1437429343218953352.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('11','MISS FACE','1437429301820829673.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('12','姬芮','1437429559203552370.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('13','SK-ll','1437429603999601355.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('14','高丝','1437429658639571492.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('15','韩束','1437429723052152963.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('16','卡姿兰','1437429783595048316.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('17','珀莱雅','1437429832547767116.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('18','兰芝','1437429934755120717.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('19','碧欧泉','1437430106997787476.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('20','小米','1437430279260423099.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('21','摩托罗拉','1437430289405669696.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('22','中兴','1437430298555384602.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('23','朵唯','1437430309280593896.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('24','htc','1437430325761583576.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('25','华为','1437430344637755359.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('26','oppo','1437430353888085653.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('27','金立','1437430366575268584.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('28','LG','1437430374768843113.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('29','苹果','1437430433744102612.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('30','三星','1437430441802693617.png','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('31','乐檬','1437430460743432443.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('32','努比亚','1437430574094435270.png','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('41','伊利','1437431337248235690.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('34','肯德基','1437431062768997274.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('35','麦当劳','1437431071613084817.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('36','小肥羊','1437431080762737350.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('37','小尾羊','1437431089182085355.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('38','必胜客','1437431098320240967.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('39','海底捞','1437431107736558062.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('40','蒙牛','1437431322523724265.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('42','君乐宝','1437431351886281450.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('43','光明','1437431362172425989.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('44','三元','1437431370729213687.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('45','百草味','1437431586427003983.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('46','三只松鼠','1437431595688289538.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('47','口水娃','1437431609681889286.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('48','楼兰密语','1437431622196514430.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('49','西域美农','1437431645949723761.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('50','糖糖屋','1437431655511622908.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('51','享爱.','1437432512022024124.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('52','猫人','1437432522356081645.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('53','茵曼（INMAN）','1437432530915190983.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('54','缪诗','1437432540121764652.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('55','卓诗尼','1437436548477690017.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('56','七匹狼','1437432559402862574.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('57','佐丹奴','1437432569401929463.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('58','达芙妮','1437436184083765295.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('59','她他/tata','1437432594328434499.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('60','曼妮芬（ManniForm）','1437432607921594733.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('61','伊芙丽','1437432618356392882.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('62','稻草人','1437432889680565833.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('63','斯提亚','1437432901296336878.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('64','袋鼠','1437432911986487085.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('65','爱华仕','1437432919534972670.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('66','海尔','1437433767280039957.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('67','美的','1437433779804083933.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('68','格力','1437433795060834486.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('69','老板','1437433807457258990.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('70','西门子','1437433823734794032.gif','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('71','格兰仕','1437433840630073088.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('72','海信','1437433854063455383.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('73','伊莱克斯','1437434172223731860.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('74','艾力斯特','1437434180841305731.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('75','博洋家纺','1437434606384665980.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('76','富安娜','1437434617597906820.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('77','爱仕达','1437434625076488004.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('78','罗莱','1437434636974815215.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('79','安睡宝','1437434647992450174.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('80','溢彩年华','1437434684850488373.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('81','慧乐家','1437434929995564906.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('82','天堂伞','1437434942034649403.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('83','水星家纺','1437436852699771679.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('84','全有家居','1437436872931901715.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('85','五粮液','1437437214813515708.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('86','泸州老窖','1437437224749997115.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('87','洋河','1437437231422398881.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('88','郎酒','1437437244879092879.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('89','锐澳','1437437261557386149.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('90','雪花','1437437271667562577.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('91','哈尔滨','1437437282844642612.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('92','加多宝','1437437842479155660.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('93','统一','1437437849200407070.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('94','王老吉','1437437859367956549.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('95','可口可乐','1437437873367150550.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('96','贝古贝古','1437438440162456222.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('97','皇家宝贝','1437438450967200189.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('98','呵宝童车','1437438478070289990.png','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('99','合生元','1437438487779734440.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('100','美赞臣','1437438523104074504.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('101','帮宝适','1437438533665581365.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('102','抱抱熊','1437438543060387610.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('103','巴拉巴拉','1437438555681581254.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('104','青蛙王子','1437438571107733086.jpg','','','','http://','50','1');");
E_D("replace into `ecs_brand` values('105','雀氏','1437438581895901815.jpg','','','','http://','50','1');");

require("../../inc/footer.php");
?>