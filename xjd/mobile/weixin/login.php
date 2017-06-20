<?php
require(dirname(__FILE__) . '/api.class.php');
require(dirname(__FILE__) . '/wechat.class.php');
$t = time();

if($_GET['act'] == 'check'){
    $scene_id = $_SESSION['login_value'];
    echo $scene_id;
    if($scene_id){
        $uid = $GLOBALS['db']->getOne ( "SELECT uid FROM " . $GLOBALS['ecs']->table('weixin_login') . " WHERE `value` = '$scene_id' and createtime+600>{$t}" );
        echo $uid;
        
        if($uid){
			$username = $GLOBALS['db']->getOne("select user_name from ".$GLOBALS['ecs']->table('users')." where user_id='{$uid}'");
			$GLOBALS['user']->set_session($username);
        	$GLOBALS['user']->set_cookie($username);
			update_user_info();  //更新用户信息
        	recalculate_price(); // 重新计算购物车中的商品价格
			$str = "parent.location.href=\"../user.php\";";
			$state = 1;
		}else{
			$str = "window.location.reload();";
			$state = 0;
		}
		if($_GET['ajax'] == 1){
			echo json_encode(array('state'=>$state,'url'=>"../user.php"));
		}else{
			echo "<script>function myrefresh(){ $str }
		setTimeout('myrefresh()',1000);</script>";
		}
		exit;
	}
}else{
	//print_r($_SESSION);
	//生成登录二维码代码 开始
    
	if($_SESSION['login_value'] && $_SESSION['_outtime']>time()){
        echo 3;
        
		$token = $GLOBALS['db']->getOne ( "SELECT token FROM " . $GLOBALS['ecs']->table('weixin_login') . " WHERE `value` = '{$_SESSION['login_value']}'" );
	}else{
       
		$weixinconfig = $GLOBALS['db']->getRow ( "SELECT * FROM " . $GLOBALS['ecs']->table('weixin_config') . " WHERE `id` = 1" );
		print_r($weixinconfig);
        $weixin = new core_lib_wechat($weixinconfig);
        echo $weixin;
		$scene_id = $t.rand(1000, 9999);
		$scene_id = substr($scene_id, 5);
		$token = $weixin->getQRCode($scene_id,0,600);
		$token = $token['ticket'];
        echo $token;
		$ip = real_ip();
		$GLOBALS['db']->query("INSERT INTO " . $GLOBALS['ecs']->table('weixin_login') . " (`createtime`,`token`,`ip`,`value`) value
		 ('$t','{$token}','$ip','$scene_id')");
		$_SESSION['login_value'] = $scene_id;
		$_SESSION['_outtime'] = $t+600;
	}
    echo 4;
	//生成登录二维码代码 结束
echo"<style>a {
    outline: 0;
}

h1, h2, h3, h4, h5, h6, p {
    margin: 0;
    font-weight: 400;
}

a img, fieldset {
    border: 0;
}

body {
    background-color: #333333;
    min-width: 320px;
}

.impowerBox {
    line-height: 1.6;
    font-family: 'Microsoft Yahei';
    color: #ffffff;
    position: relative;
    display: inline-block;
    *display: inline;
    *zoom: 1;
    width: 100%;
    vertical-align: middle;
    z-index: 1;
    padding: 45px 0 56px 0;
    background-color: #333333;
    text-align: center;

}

.impowerBox .title {
    text-align: center;
    font-size: 20px;
}

.impowerBox .qrcode{
    width: 280px;
    margin-top: 15px;
}
.impowerBox .info {
    width: 280px;
    margin: 0 auto;
}

.impowerBox .status {
    margin-top: 15px;
    padding: 7px 12px;
    background-color: #232323;
    border-radius: 100px;
    -moz-border-radius: 100px;
    -webkit-border-radius: 100px;
    box-shadow: inset 0 5px 10px -5px #191919, 0 1px 0 0 #444444;
    -moz-box-shadow: inset 0 5px 10px -5px #191919, 0 1px 0 0 #444444;
    -webkit-box-shadow: inset 0 5px 10px -5px #191919, 0 1px 0 0 #444444;
    text-align: left;
}

.impowerBox .status.status_browser {
    text-align: center;
}

.impowerBox .status p{
    font-size: 13px;
}

.impowerBox .status_txt p{
    position: relative;
    top: -2px;
}

.impowerBox .status_icon {
    display: inline-block;
    vertical-align: middle;
    margin-right: 5px;
}

.impowerBox .status_txt {
    display: inline-block;
    *display: inline;
    *zoom: 1;
    vertical-align: middle;
}

.impowerBox .status_txt p {
    position: relative;
    margin: 0;
}
.waiting{margin-top:15px;}
</style>";
	echo"<div class='main impowerBox'>
  <div class='loginPanel normalPanel'>
    <div class='title'>微信登录</div>
    <div class='waiting panelContent'>
      <div class='wrp_code'><img src='https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$token}' height='300px'></p></div>
      <div class='info'>
        <div class='status status_browser js_status' id='wx_default_tip'>
          <p>请使用微信扫描以下二维码即可登录。</p>
          <p>“草根站长”</p>
        </div>
       </div>
    </div>
  </div>
</div>";
	echo "<iframe src='login.php?act=check' style='display:none'></iframe>";
}