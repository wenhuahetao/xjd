<!-- $Id: auction_info.htm 16992 2010-01-19 08:45:49Z wangleisvn $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<div class="main-div">
<!-- #代码增加2014-12-23 by www.68ecshop.com  _star -->
<form method="post" action="virtual_goods_card.php?act=verification_info" name="theForm"  enctype="multipart/form-data" onsubmit="return validate()">
<!-- #代码增加2014-12-23 by www.68ecshop.com  _end -->
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
  <td align="right"><?php echo $this->_var['lang']['input_virtual_verification']; ?></td><td><input type="text" id='verification' name="verification" value="<?php echo $this->_var['result']['card_sn']; ?>"><input type="submit"  value="提交" class="button"></td>
  </tr>
</table>
</div>
</form>
<?php if ($this->_var['result']['card_id']): ?>
<form method="post" action="virtual_goods_card.php?act=verification" name="theForm"  enctype="multipart/form-data">
<div class="main-div">
<input type="hidden" name="verification" value="<?php echo $this->_var['result']['card_sn']; ?>">
<table cellspacing='1' cellpadding='3'>
    <tbody>
    <tr>
        <td>订单号</td>
        <td>缩略图</td>
        <td>商品名称</td>
        <td>商品价格</td>
        <td>过期时间</td>
        <td>使用时间</td>
        <td>验证码</td>
        <td>验证状态</td>
        <td>操作</td>
    </tr>
        <tr>
        <td><?php echo $this->_var['result']['order_sn']; ?></td>
        <td><a href="../goods.php?id=<?php echo $this->_var['result']['goods_id']; ?>" target="_blank"><img src="../<?php echo $this->_var['result']['goods_thumb']; ?>" width="50px"></a></td>
        <td><a href="../goods.php?id=<?php echo $this->_var['result']['goods_id']; ?>" target="_blank"><?php echo $this->_var['result']['goods_name']; ?></a></td>
        <td>￥<?php echo $this->_var['result']['shop_price']; ?></td>
        <td><?php echo $this->_var['result']['end_date']; ?></td>
        <td><?php echo $this->_var['result']['buy_date']; ?></td>
        <td><?php echo $this->_var['result']['card_sn']; ?></td>
        <td><?php echo $this->_var['result']['is_verification']; ?></td>
        <td><input type="submit"  value="验证" class="button"></td>
    </tr>
</tbody>
</table>
    </form>
</div>
<?php endif; ?>

<?php if ($this->_var['result']['msg'] == '0'): ?><script type="Text/Javascript" language="JavaScript">alert("<?php echo $this->_var['lang']['message']['not_found_verification']; ?>");</script><?php endif; ?>
<?php if ($this->_var['result']['msg'] == '1'): ?><script type="Text/Javascript" language="JavaScript">alert("<?php echo $this->_var['lang']['message']['verification_success']; ?>");</script><?php endif; ?>
<?php if ($this->_var['result']['msg'] == '2'): ?><script type="Text/Javascript" language="JavaScript">alert("<?php echo $this->_var['lang']['message']['verification_used']; ?>");</script><?php endif; ?>
<?php if ($this->_var['result']['msg'] == '3'): ?><script type="Text/Javascript" language="JavaScript">alert("<?php echo $this->_var['lang']['message']['verification_overdue']; ?>");</script><?php endif; ?>
<script type="Text/Javascript" language="JavaScript">
    function validate(){
        var verification = document.getElementById('verification').value;
        if(verification.length == 0){
            alert("请输入验证码！");
             document.forms['theForm'].elements['verification'].focus();
             return false;
        }
    }
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
