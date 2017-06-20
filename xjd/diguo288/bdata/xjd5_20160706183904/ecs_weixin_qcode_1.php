<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qcode`;");
E_C("CREATE TABLE `ecs_weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_qcode` values('1','4','60','gQG37zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0dVeFVSVFBsa0UzcDVJVkFSV0NsAAIEX1s6VwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('2','4','0','gQGu7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FFeWFxbWJsSkUxZDd6VFZpMkNsAAIEzns6VwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('3','4','81','gQG47zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzcwendSTGJsTlUxTWxuTkE0V0NsAAIEQHw6VwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('4','4','82','gQFz8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL09VeW0xdnJsWVUwWW5xWFF0MkNsAAIE2ZA4VgMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('5','4','86','gQHG7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1lVeDdGYW5sdWszRFZ2MFZhbUNsAAIEfNUbVwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('6','4','87','gQEQ8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0cwejFnMVhsTmsxUFJvZUI1R0NsAAIEDrAdVwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('7','4','91','gQEj8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3lVek13RXZsZDAwT3lWVzYzV0NsAAIEhJMhVwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('8','4','99','gQG58DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2NVd0tMcUhsdFUzTWRlMVFHMkNsAAIEaNqVVgMEAAAAAA==');");

require("../../inc/footer.php");
?>