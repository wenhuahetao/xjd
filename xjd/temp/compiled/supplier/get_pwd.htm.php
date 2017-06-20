<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />

<style type="text/css">
  body {
    color: white;
  }
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
//-->
</script>

</head>
<body style="background:url(images/login_bg.png) repeat-x;padding:0px;">
<div style="width:1210px;height:768px;margin:0 auto;background:url(images/login_dl.jpg) no-repeat; " >
<?php if ($this->_var['form_act'] == "forget_pwd"): ?>
<form action="get_password.php" method="post" name="submitAdmin" onsubmit="return validate()">
  <table cellspacing="0" cellpadding="0" style=" padding-top:285px; " align="center" class="login_dl">
  	  <tr>
		<td class="dl">
      		<table cellspacing="5" cellpadding="0" width="100%">
            	<tr>
        			<td colspan="2" class="dl_1 dl_te" width="100%" align="center"><?php echo $this->_var['lang']['get_newpassword']; ?></td>
      			</tr>
      			<tr>
        			<td class="dl_1" width="22%">用户名</td>
        			<td><input type="text" name="user_name" class="text_input1"/></td>
      			</tr>
      			<tr>
        			<td class="dl_2">Email</td>
        			<td><input type="text" name="email"  class="text_input1"/></td>
      			</tr>
                <tr>
      				<td colspan="2" align="center">
                    	<input type="hidden" name="action" value="get_pwd" />
           				<input type="hidden" name="act" value="forget_pwd" />
           				<input type="submit" value="确&nbsp;定" class="button3" />
           				<input type="reset" value="重&nbsp;置" class="button3" />
                    </td>
      			</tr>
            </table>
        </td>
      </tr>
  </table>
</form>
<?php endif; ?>
<?php if ($this->_var['form_act'] == "reset_pwd"): ?>
<form action="get_password.php" method="post" name="submitPwd" onsubmit="return validate2()">
  <table cellspacing="0" cellpadding="0" style=" padding-top:285px; " align="center" class="login_dl">
  		<tr>
		<td class="dl">
      		<table cellspacing="5" cellpadding="0" width="100%">
            	<tr>
        			<td colspan="2" class="dl_1 dl_te" width="100%" align="center"><?php echo $this->_var['lang']['get_newpassword']; ?></td>
      			</tr>
      			<tr>
        			<td class="dl_1" width="22%">新密码</td>
        			<td><input type="password" name="password" class="text_input1"/></td>
      			</tr>
      			<tr>
        			<td class="dl_2" style=" letter-spacing:normal;">确认密码</td>
        			<td><input type="password" name="confirm_pwd" class="text_input1"/></td>
      			</tr>
                <tr>
      				<td colspan="2" align="center">
                    	 <input type="hidden" name="action" value="reset_pwd" />
           				 <input type="hidden" name="act" value="forget_pwd" />
           				 <input type="hidden" name="adminid" value="<?php echo $this->_var['adminid']; ?>" />
           				 <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
           				 <input type="submit" value="确&nbsp;定" class="button3" />
           				 <input type="reset" value="重&nbsp;置" class="button3" />
                    </td>
      			</tr>
            </table>
        </td>
      </tr>
  </table>
</form>
<?php endif; ?>

<script type="text/javascript">
<!--
/**
* 检查表单输入的数据
*/
function validate()
{
  validator = new Validator("submitAdmin");
  validator.required("user_name", user_name_empty);
  validator.required("email", email_empty, 1);
  validator.isEmail("email", email_error);

  return validator.passed();
}

function validate2()
{
  validator = new Validator("submitPwd");
  validator.required("password",            admin_pwd_empty);
  validator.required("confirm_pwd",         confirm_pwd_empty);
  if (document.forms['submitPwd'].elements['confirm_pwd'].value.length > 0)
  {
    validator.eqaul("password","confirm_pwd", both_pwd_error);
  }

  return validator.passed();
}
//-->
</script>

</div>
</body>
</html>