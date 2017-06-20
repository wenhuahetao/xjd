<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_user`;");
E_C("CREATE TABLE `ecs_weixin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `ecuid` int(11) NOT NULL COMMENT '绑定用户ID',
  `fake_id` varchar(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `isfollow` tinyint(1) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `sign_num` int(11) NOT NULL COMMENT '连续签到次数',
  `access_token` varchar(40) NOT NULL COMMENT 'token',
  `expire_in` int(11) NOT NULL COMMENT 'token到期时间',
  `from_id` int(11) NOT NULL,
  `Latitude` varchar(32) NOT NULL,
  `Longitude` varchar(32) NOT NULL,
  `Precision` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `fake_id` (`fake_id`),
  KEY `ecuid` (`ecuid`),
  KEY `from_id` (`from_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_user` values('1','60','oYTrKtxndrT2WnUUutzoJlYb3QsU','1463442283','2016-05-16','1','OutMan','1','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJgibR72A1QTIyWXNXVAPAhalT4qUq57gaxQOOpkuhSJ7AA4gsKksOZ0He7Gg3EEEOR9fpBZFHSAJw/0','中国','四川','德阳','0','Dgw7emfuhEjm08aBRJ8rAhbBsK8errW_rrH0ThI-','1467434231','1','31.134970','104.164330','40.000000');");
E_D("replace into `ecs_weixin_user` values('2','61','oYTrKt3AXVaEXcHhrGriq9n2TykA','1463541137','2016-05-18','1','Boo✨','1','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnoibxzOL7KWibhYMNBD1xWUHlUj1R3SVmX5H7JBkKgqFYnPKyxibP9KAw2ZqMCODoJ0HOcfeeyoXgNdRy3SCB2VQYS/0','中国','陕西','咸阳','0','CJnhCRujxP7BAu3xPYIpLSR-UdM0jb0NxENoIYwl','1463713937','1','','','');");
E_D("replace into `ecs_weixin_user` values('3','0','oYTrKt2KvDqecPYC8htMhufjgPk0','1463548444','2016-05-18','1','大闸蟹','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicq12h3q0nnLPUgrAeV6AO35mxJIBY8sokDrhLgQYrYRPT6r0eYlr23tS8AgFoia0TVFQfuy41ibKNv8/0','中国','福建','福州','0','cxd2UHg7i_WpmTl8VXF-gUSLpnozpASd49pzUBwI','1463721244','1','25.988848','119.450867','70.000000');");
E_D("replace into `ecs_weixin_user` values('4','63','oYTrKt3pTIjY8IZDjje17lyKgq-4','1463551501','2016-05-18','1','vanfer','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktwic8aE7Mn1zE2mSNBCmPgKsQQol8yu58zrgicRbPOlTUXEaNIZTeeG89OGpJJmRgcZZrQPqAIagSfr/0','中国','河北','石家庄','0','Ih2z0pBV9YgfP3SAhr3bUldRHLlu48R9UhVt0f0O','1463726147','1','','','');");
E_D("replace into `ecs_weixin_user` values('5','64','oYTrKt9vOSBhLhaUiize06KU1jnU','1463555297','2016-05-18','1','长空','1','http://wx.qlogo.cn/mmopen/ajNVdqHZLLCnXTS74No1fMSo9IazCclM60ppqMueCWWLtOdkE2ibLfCnrYgfTxfvwm81JTowhYOhNEibeBljicWbQ/0','中非共和国','','','0','XYUisjFv_EPbReIiNKHNjSENaffiWgjsK4bfo8Ya','1463814481','1','','','');");
E_D("replace into `ecs_weixin_user` values('6','0','oYTrKt61_f0-sMjUabsenUdik01M','1463580124','2016-05-18','1','优鲜配','1','http://wx.qlogo.cn/mmopen/2Y7nk5cfQno8RnAFug1NfPJ5lR0oJeJUoTUibhAGPH8e11Nmj5JNIUWg2mwH5ROG2gofd78WpCOPQribG2CME8SzfBoDUYNgUic/0','中国','四川','绵阳','0','nYQX7P8aM2s4sk-nUxfE5l83TRsLTeKogRvssf1a','1463752924','1','','','');");
E_D("replace into `ecs_weixin_user` values('7','65','oYTrKt11zG3U5AaKU4j2-XsCvbio','1463589696','2016-05-18','1','心似苍井空如水','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGpzWKlAic8YrtsicCC3tWwg37GxwgGfgfSKjOn6CMCobJGy8HtkX6R57Ncus1yZs6YtYSGMlBpriciarE4rjcIcwu9j/0','中国','云南','红河','0','mJGKyNn_SWg4qzoCILunR1x_XWu8XfD1KKFRoncG','1463762496','1','','','');");
E_D("replace into `ecs_weixin_user` values('8','67','oYTrKt68LMA8g9B9F-uTZFMRfLeY','1463615799','2016-05-18','1','丁长老','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicqxVZ4uboflqbmNDeV5pns2BvVuMAItRUzprCPWhpdSF9OyYcDzZXYld4dfg2oxkJk97nVj1pvgvB/0','中国','山西','运城','0','DmaZGLvMt4cuEe2uO7jIXMwlOS22jj-rQa_JbhSu','1463788599','1','35.048939','110.989143','60.000000');");
E_D("replace into `ecs_weixin_user` values('9','0','oYTrKtwX_mVL4r5Qo1hycf75h1LM','1463633084','2016-05-19','1','丁仕前','1','http://wx.qlogo.cn/mmopen/j8cooK2zCqrpjclzkHEW9zib0lqvoIYxZJr12kKcd39iaO4jQmkNzqicZe9qiaKcGBGHDeNVX93RBoxbUibxgRwNrsg/0','中国','浙江','杭州','0','1F_nstbUbLe9BbnKqa1LNg3l7aPTDXLZC7i5Ip4T','1463805884','1','','','');");
E_D("replace into `ecs_weixin_user` values('11','69','oYTrKt9yQQQApKntCjOMdKsqANJw','1463644113','2016-05-19','1',' U.Z °','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzoKwJnBrdeh6ecxzBvuEpwkhMU8TrzHWIrBibB0AVWBm0licZHMQvq2XCRkN1RJoYYgyrlS3farNghIBxE5rIibQwb/0','中国','安徽','池州','0','0OdTd_o86UIiKcJ1x2aAx-QfLVhpAFFvvwcbwD_P','1463816913','1','','','');");
E_D("replace into `ecs_weixin_user` values('10','0','oYTrKt7RaEymm5cnPaFSiwFZneI8','1463634150','2016-05-19','0','匠作坊','2','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnrstfQzXZSEKRML1DIetxIbXFuRE5OU2z4UTnwBQOz6LqlI1CojeyQ34oKMCbicMr5MwQlP1iaQeWVBkIiatPDxyBic/0','中国','甘肃','定西','0','xTM8oaENBlK6f9nuHMePT0S3biViREMEbpr6qDBg','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('12','70','oYTrKt3tzO53ERBzbojXnDM6J7pI','1463646472','2016-05-19','1','高邮巾帼居家养老','1','http://wx.qlogo.cn/mmopen/rsCbqnWoia3CP1sjEDP1Q9jS3evm09zngSKCOv01IWahVGgcknK4MpfnOwsQRWzPr2iaT394vfOg4ORSibkByeU5OibRuRk4xxicv/0','中国','江苏','扬州','0','NNhvZOM4ET_eBiUzCiT4GTeJqBDIlnSnj1aep8Ti','1463819272','1','32.792164','119.427567','60.000000');");
E_D("replace into `ecs_weixin_user` values('13','72','oYTrKt5Ickoaga4VU_FRRufCE7BY','1467205457','2016-06-29','0','VirGil™','1','','','','','0','','0','0','','','');");
E_D("replace into `ecs_weixin_user` values('14','0','oYTrKt6DJmouhgRUB6lc58_mJhrA','1467209594','2016-06-29','1','海灯笼Yccc杨','1','http://wx.qlogo.cn/mmopen/Q3auHgzwzM4wHWXooAXUajvmxlNwibCyrZA9RahQR5mnSADk18fHZGnZAbbOsvbTTteFWmYVN3vUuhdx3BZGhEA/0','中国','广西','防城港','0','1F_nstbUbLe9BbnKqa1LNgWbB1lXDDcTCQxNS7pO','1467382394','1','21.546860','107.963196','65.000000');");
E_D("replace into `ecs_weixin_user` values('15','74','oYTrKt2BbnDHcWq2sA_0dYktrsKw','1467221266','2016-06-29','1','哆唻嗳萌','2','http://wx.qlogo.cn/mmopen/PiajxSqBRaEKkHzO7UmFY4vw2YgsN790WadGbgnN1YthphIOm5g2r0MWGhn61QK02vF8FCYVS7JqgyaInOKGNiag/0','中国','江苏','常州','0','wIH1UMTuuxFzYFENa5cJV0PcZb3k8Z9xLkAIJKhl','1467394361','1','31.809885','119.932266','65.000000');");
E_D("replace into `ecs_weixin_user` values('16','0','oYTrKt2sHUcg7xprdGAbNDJDpyjg','1467239316','2016-06-29','1','我心飞翔','2','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnqQIVYMZliaNtmKdgfSAG1lYDXhSdmOEfPHnpxic4losoWu9HrWegjwWaIamK4LbSTUR7EYOfHc2yMiaZEq7vkCQdz/0','中国','广东','梅州','0','sfVhLSXMlfowf7ize9wrjU3MU8LYdDqmUWnU6A2-','1467412116','1','','','');");
E_D("replace into `ecs_weixin_user` values('17','0','oYTrKt1B4LQt0wMweOq0jgdmvSqY','1467246664','2016-06-30','1','豆豆龙_互联网+营销','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw8GiavagcV736bUlgticsduNRREdSr7Fq25YexsnINWIWK6zlJsS0Aj0QhWt8ZiaCxxpDj8NlDMlkmA/0','中国','上海','浦东新区','0','URo0--vqyMRAQl9IS7DM0S5GRGNBKt10tn7utrRW','1467419464','1','','','');");
E_D("replace into `ecs_weixin_user` values('18','75','oYTrKt4gL_ATv4HSDI48Y5PJXwRA','1467254792','2016-06-30','1','Ricky Yan','1','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDrRvUwBJxeEaycmRn8ibIfdlm3pTMcVzslUrkr712wh5YTavUrKwAyoORClMpqJJacXSv5jHjXXqw/0','中国','北京','昌平','0','zT2toSO_AMUvKN92NVCDiYx5YoM6N-dp1GVp2Xqj','1467427592','1','','','');");
E_D("replace into `ecs_weixin_user` values('19','77','oYTrKt8vDLH0dp-jOlz8mlxIyYbM','1467259351','2016-06-30','1','tinkey','1','http://wx.qlogo.cn/mmopen/6eevtuZPBUM2H1sic9GNlCo63dcDic73jH3PpxBOL4u0AebP85iciaJ1k62vGDThXcQ49Spib1NyFrL8bibc1tnWNyFZf7xrgjicHhh/0','中国','广东','广州','0','Dt8k512mNRYfwa2PoXxcD-E8mhswsuRV-Y7fuFUj','1467432151','1','23.171049','113.349838','40.000000');");
E_D("replace into `ecs_weixin_user` values('20','78','oYTrKt7iUult6wN-G7czlJnkCgHY','1467561758','2016-07-03','0','初相识♂终相守♀','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw0jloVeSCJdGEr5225XYAvic1Txbfl079aBoDw5sfqcqcvV8uhQNZ1I5esiaPlFtqibpjo3rqewuDUa/0','中国','安徽','阜阳','0','xTM8oaENBlK6f9nuHMePTx38oleDrQm8Kfc2VTWb','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('21','79','oYTrKtwXq7W1VBeF_FTETDtE-hKg','1467561953','2016-07-03','0','小茗同学','1','','','','','0','','0','0','','','');");
E_D("replace into `ecs_weixin_user` values('22','0','oYTrKtyHXy4TUoLZ6N7T3xMNo4iw','1467571256','2016-07-03','1','鸿囍','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw1OSS01rj5XFdBs7J8ic5Ze4IlZnIskywtE7k0ic3k6ZhwszIpXlSC1sfsKiab9iasj8GPrmpibMVuZYia/0','中国','北京','海淀','0','DmaZGLvMt4cuEe2uO7jIXL7gTcpMBH8KV08r-auR','1467744056','1','','','');");
E_D("replace into `ecs_weixin_user` values('23','82','oYTrKtxTfy4rgjWdysiXBGpRqGSI','1467596514','2016-07-04','1',' stupid','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzraNn67HiaKr3XjnD4zJrjjZA3fJCTH3Dl9nKfOD7Qg9WsxjwqSzfBAW6eP7NQu3DicicpBzRmqfrAkhVI3ViaLYyu2/0','中国','澳门','大堂区','0','2HWWOfq_rQ0ZemAG778GnqxtGrb_Y50BZYNjh4gi','1467769314','1','19.263783','110.466896','65.000000');");
E_D("replace into `ecs_weixin_user` values('24','83','oYTrKt2yW6i7bMwtV9w0-qykvy1U','1467596532','2016-07-04','1','许','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicqwqgXBWDGUzIl3bC486ibVCrU9c2pofkx5uyW7cZrFCMDaT9pg3gMRB6e2zqyTcyxRAdo6A6iciceibc/0','中国','山东','烟台','0','zzh8inb1cuGSWPaE0cpUG1Hoh2g-hIlSZlRSgCU0','1467952500','1','37.428059','121.521187','40.000000');");
E_D("replace into `ecs_weixin_user` values('25','85','oYTrKt6pYlgSuvBSWZEOPZJTMrHg','1467610454','2016-07-04','1','刀锋漫步','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzqDKicJZ93CBgMz9Ro3gL3v0FDOy5f5751K2taemEgUTjicbfuqjAFkW815hnOry06GQMa2kSGsv7XT4yZuXHKdDy/0','瑞士','苏黎世','','0','SQ942btJTLhrwSeoFQBkfW-dF-BddwfGrA1jzzAv','1467910058','1','','','');");
E_D("replace into `ecs_weixin_user` values('26','86','oYTrKtzBylnNN9Nut_kfDIzt1Sys','1467616463','2016-07-04','0','- 谜，','1','','','','','0','','0','0','','','');");
E_D("replace into `ecs_weixin_user` values('27','88','oYTrKt4iCryrmacczHAbmcbkLcW4','1467618346','2016-07-04','1','cavan','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGpJZxvOia1evU3G17vAGe75vON5QFvc7D71JGCibdqrfYWRmfFKSPickFGzUF3ICzO1W6EibFo29rT42Bic3kpWWlayA/0','中国','云南','昆明','0','ABL1Ue9caePgs7P1p2azIwxcSbrPIGOYjXErhzMP','1467791146','1','25.023117','102.707809','65.000000');");
E_D("replace into `ecs_weixin_user` values('28','0','oYTrKt4cuuZXFffYi7Y2vUDOjZFM','1467620486','2016-07-04','0','','0','','','','','0','UgHkkDMdj3KVTf7KZ30wIOV-yNAISD5a9uHRPzAr','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('29','89','oYTrKt1dhehwKT5uZR3k7QW1lTCA','1467623635','2016-07-04','1','牛牛','1','http://wx.qlogo.cn/mmopen/Q3auHgzwzM5AATHXupFXtREiaTzicXRVopznrJbqNxq99exLXRoju05aTypEEsFVl4OgUqMTAoAd8pr1DMOicM87g/0','中国','浙江','舟山','0','uYWPhBpI2QC56LQCWI-64syuKArb-9z7PpU04XmW','1467796435','1','','','');");
E_D("replace into `ecs_weixin_user` values('30','90','oYTrKt0YEYinYQo_gJvIPnIBK-ic','1467635827','2016-07-04','1','三人水舟','1','http://wx.qlogo.cn/mmopen/Q3auHgzwzM4Sa9Z4HYbv5Wx9EmFoP1uYkg46mWoKoiadOPeWSdaicgolCQInf9vGT7syUMJ3EVZzBiadVmpvEgrNw/0','中国','江苏','泰州','0','ut5bXTe0sPRfb1IHpli_vH5qCND1vgd2xtSAuViS','1467808627','1','32.019497','120.264053','65.000000');");
E_D("replace into `ecs_weixin_user` values('31','91','oYTrKt9zgjQB_qHyTGYdM1L7vb2M','1467636421','2016-07-04','1','王海峰','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicq4BgiaPYeurib1CI6C7Q51DLg7KJhh7koa0s55Y0DKJUSKsY6aibvFKzeLYmneYs8YqObw6fbPyvYEN/0','中国','浙江','宁波','0','gj4AAy58Av1WKvu5jIY320KgyVoD7Pd24l9veFgF','1467809307','1','29.872801','121.582001','65.000000');");
E_D("replace into `ecs_weixin_user` values('32','92','oYTrKt55BmMYjAaq0Isgq-e1hCk0','1467638167','2016-07-04','1','励玲美','2','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw0ianmMCoP01icibsaHjmaeOohVYHu4n1Vsg0LK8nsGzmDkUWE2xH6rfkfh5jUNTAlCy8gibQ1YJNTOy/0','中国','浙江','宁波','0','1F_nstbUbLe9BbnKqa1LNos_w6dqTq8taduOHmuV','1467810967','1','','','');");
E_D("replace into `ecs_weixin_user` values('33','93','oYTrKt6ckWmTVlb_ImTgQOKT7U2o','1467643209','2016-07-04','1','Amon','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktwicobfibrLvMLvvvRfLcb28avNGuyDW97RyGyq6nZ0iadlMzm1TlGByPwT4Q8e22kAdpRD33J3UibZlr/0','中国','上海','','0','3yCjqqhQ7fO1TG2_OOCJpRcu_m_BUSd58uFsPVNO','1467816092','1','31.232538','121.456367','65.000000');");
E_D("replace into `ecs_weixin_user` values('34','0','oYTrKt-nSC6OnQ27KCfCIWQhcV80','1467644323','2016-07-04','1','Jacky ｜ 巨头IT  jutouIT.com','1','http://wx.qlogo.cn/mmopen/j8cooK2zCqoKcIribh5D1tsp7mJib8eiaPWHZCic0jHFvgyaoMEQykj0uTlVLQGNkCXDg9HibFy8S2FV477ooGhIYzLHv1AGnAYzU/0','中国','广东','广州','0','-tkLv66fDE7kl4xV0Es19H_UGXKjPkYuTyzCWRWL','1467817123','1','','','');");
E_D("replace into `ecs_weixin_user` values('35','0','oYTrKtw_yijfi1jGCfl0wrmtFTo8','1467655187','2016-07-04','1','奚建平','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw2KYIRCmpCPcVRzslpVs406IHMlDS18DTjRcIsugmscQTHo4eR0peibibDoVpDUdMg393HCpicdFbAh/0','中国','重庆','永川','0','-tkLv66fDE7kl4xV0Es19BP2aeBaryFVroNg2DIV','1467827988','1','29.345240','105.904129','110.000000');");
E_D("replace into `ecs_weixin_user` values('36','95','oYTrKt0hA4GvBzJBb9nbpzp3e-yQ','1467684717','2016-07-05','0','掌心优品','1','','','','','0','','0','0','','','');");
E_D("replace into `ecs_weixin_user` values('37','0','oYTrKt1GzjPJK24gZkpcViPesziE','1467688382','2016-07-05','0','','0','','','','','0','kwym9eqPrPsEPWtmTyOMAsM70fNuphpdzLZwDRFc','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('38','0','oYTrKt2JmWmvmSZGcCpISdLK2Dx4','1467701449','2016-07-05','1','天道','1','http://wx.qlogo.cn/mmopen/icyqPNiaibccibK6AlkSwA1vcRK0EKcgkrVg8KibfibDkMeNeUbgCxJDGMCibLYe01NIsZ6ic5NOe7fqGb3oS9jlcvSQh6hibzKwZsxDl/0','中国','山东','滨州','0','y7MMsa6DpfAyWrk2WdCa4DDh6_TPKpZ5PBAbd1HN','1467874250','1','36.893665','117.734375','40.000000');");
E_D("replace into `ecs_weixin_user` values('39','96','oYTrKt9unVtomP0IJPgOIfYu5w4g','1467702232','2016-07-05','1','邱建','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGpY8l5s2Ah48qhXhlLoorMn6zibgXmIIuPC14gFXoYMicDm1oBzsIlLVtHOlzuiav9NuVchZpu75U5uw/0','中国','重庆','','0','9yWNlQkpoQp8F6cHO4DkobK8F7m-Xvn-YktoZsAo','1467875032','1','','','');");
E_D("replace into `ecs_weixin_user` values('40','97','oYTrKtxlwKflrvozQ0MCpUNVgnE0','1467702324','2016-07-05','1','A0000网站公众号开发','1','http://wx.qlogo.cn/mmopen/ajNVdqHZLLCLGzzibE0qltrahzhmEku9QHx1MFGo8FyPeBKDGmT9sS4VN4jkBAd6Y7YEv4agJyXstB7PfCcWKSg/0','中国','江苏','徐州','0','5k59K6GtE8LUGuRqnT22O1sqzCUp2YvURUEpE2cm','1467973071','1','34.279076','117.151688','30.000000');");
E_D("replace into `ecs_weixin_user` values('41','99','oYTrKtwDC2QVJ2qfstdNgC6I2zKE','1467708310','2016-07-05','0','باھادىر↘Я','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicqyfibBdAeyFnSQnvGGkQGZpeQfG9DbWy4A50UbQ0ymNKlIsbibxFjHbINVUTSaSV80tlDnHAdLIBCq/0','中国','新疆','阿克苏','0','kFo3ygGb_eb7YRsbAEFBYgXUcwmJk3GD-2D0Z3yq','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('42','100','oYTrKt_nfKW3u26lUMEH7nevZzvM','1467730613','2016-07-05','1','瓶子','1','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnrBDzib94VKDHfP2b6pGw02eANUILXG0St4HDjqwbLwd7H7ECDlW4VmLfkvN9KYJjP2uYpXQia8nibx9icgNFzDWOOm/0','中国','广东','广州','0','bt3ww-PkBVq_qPoi98K6GkwH3XkIoFbcauVBbfIr','1467903413','1','','','');");
E_D("replace into `ecs_weixin_user` values('43','102','oYTrKt0fWxt-TRGisSqCHHC3sEq8','1467769608','2016-07-06','1','赵 + 逗','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktw93eIHfZkA5QSzF4Hua3qdJr0KiaJgrfvlwnnGc1Zxz1pyFHiadcAUOmstSgU2eD87rOzS4w7pjhlh/0','中国','山西','临汾','0','kq9EL_jnN_udmo4i9ZFjXAYKgyKa8SvuGBUTQJgz','1467942408','1','36.080894','111.531479','820.000000');");
E_D("replace into `ecs_weixin_user` values('44','0','oYTrKtwoebcxh5BFEqXnyGjTulIM','1467771601','2016-07-06','1','周正国·时代汇创','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzribWggOnRUkBSFJqkjueaM5pXUlIdA5ao9sORuda6qu4ibByDywOMgpAia7yiaZulJYonRwtNDQN5CB7FfqhuRKzGB/0','中国','四川','成都','0','wIH1UMTuuxFzYFENa5cJV2d85KazGbG9b7inOENW','1467944401','1','','','');");
E_D("replace into `ecs_weixin_user` values('45','103','oYTrKt3yhB1ObcJJ1lPsUC7EFJBU','1467793686','2016-07-06','1','远方的诗（老三）','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzpcFrFACYFjsQGK7WHaOicfEuKmMkW1b8icjFc45LTicPKxRASduaBeUxJiawxddMvnGMibqAsvoNs2NnctLich8OzrC7/0','中国','广东','深圳','0','zT2toSO_AMUvKN92NVCDiagRAN2RjNG8RgirISJB','1467966486','1','22.567949','113.902420','65.000000');");

require("../../inc/footer.php");
?>