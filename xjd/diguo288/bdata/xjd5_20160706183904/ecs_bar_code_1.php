<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bar_code`;");
E_C("CREATE TABLE `ecs_bar_code` (
  `id` int(13) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(13) NOT NULL COMMENT '商品id',
  `img_url` varchar(255) NOT NULL,
  `thumb_url` varchar(255) NOT NULL,
  `img_original` varchar(255) NOT NULL,
  `taypes` text NOT NULL COMMENT '条形码属性值',
  `bar_code` varchar(14) NOT NULL COMMENT '条形码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>