
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">
  <form action="javascript:searchSnatch()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
   <!-- <select name = "searchType" disabled="true">
      <option value="card_sn"><?php echo $this->_var['lang']['lab_card_sn']; ?></option>
      <option value="order_sn" selected="selected"><?php echo $this->_var['lang']['lab_order_sn']; ?></option>
    </select>-->
   <?php echo $this->_var['lang']['lab_order_sn']; ?> <input type="text" name="order_sn" /> <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<form method="POST" action="virtual_goods_card.php?act=del_virtual_order&goods_id=<?php echo $this->_var['goods_id']; ?>" name="listForm" onsubmit="return del_virtual_order()">
<!-- start card list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
   <!--   <th>
        <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
        <a href="javascript:listTable.sort('card_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_card_id']; ?>
      </th>-->
   <td align="center"><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox"><a href="javascript:listTable.sort('order_sn'); ">订单号</a><?php echo $this->_var['sort_order_sn']; ?></td>
    <td align="center">用户</td>
      <td align="center"><?php echo $this->_var['lang']['order_price']; ?></td>
      <td align="center">订单状态</td>
      <td align="center" width="60%">
    <table>
        <tr>
      <td align="center" width="25%">验证码</td>
      <td align="center" width="15%">下单时间</td>
      <td align="center" width="15%">使用时间</td>
     <!-- <th><a href="javascript:listTable.sort('card_password'); "><?php echo $this->_var['lang']['lab_card_password']; ?></a><?php echo $this->_var['sort_card_password']; ?></th>-->
      <td align="center" width="15%">截止日期</td>
      <td align="center" width="9%">出售</td>
      <td align="center" width="9%">使用</td>
      <td align="center" width="15%"><?php echo $this->_var['lang']['handler']; ?></td>
        </tr>
    </table>
      </td>
      
    </tr>
    <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
    <tr>
      <td  rowspan="1" align="center"><input value="<?php echo $this->_var['order']['order_id']; ?>" name="checkboxes[]" type="checkbox">
        <a href="virtual_goods_card.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>"><?php echo $this->_var['order']['order_sn']; ?></a>
      </td>
   <td align="center"><span><?php echo $this->_var['order']['user_name']; ?></span></td>
   <td align="center"><span><?php echo $this->_var['order']['total_fee']; ?></span></td>
   <td align="center"><span>
           <?php if ($this->_var['order']['order_status'] == 0): ?>未确认<?php elseif ($this->_var['order']['order_status'] == 1): ?>已确认<?php elseif ($this->_var['order']['order_status'] == 2): ?>已取消<?php elseif ($this->_var['order']['order_status'] == 3): ?>无效<?php elseif ($this->_var['order']['order_status'] == 4): ?>退货<?php else: ?>已完成<?php endif; ?>,
           <?php if ($this->_var['order']['pay_status'] == 0): ?>未付款<?php else: ?>已付款<?php endif; ?>  
       </span></td>
   <td colspan="7" align="center">
       <?php if ($this->_var['order']['pay_status'] == 0): ?>
       <span>订单未付款</span>
       <?php elseif ($this->_var['order']['pay_status'] == 2): ?>
       <table>
        <?php $_from = $this->_var['order']['card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['card']):
?>
        <tr>
            <td align="center" width="25%"><span><?php echo $this->_var['card']['card_sn']; ?></span></td>
            <td align="center" width="15%"><span><?php echo $this->_var['card']['add_date']; ?></span></td>
            <td align="center" width="15%"><span><?php if ($this->_var['card']['buy_date']): ?><?php echo $this->_var['card']['buy_date']; ?><?php else: ?>未使用<?php endif; ?></span></td>
            <td align="center" width="15%"><span><?php echo $this->_var['card']['end_date']; ?></span></td>
            <td align="center" width="9%"><img src="images/<?php if ($this->_var['card']['is_saled']): ?>yes<?php else: ?>no<?php endif; ?>.gif" /></span></td>
            <td align="center" width="9%"><img src="images/<?php if ($this->_var['card']['is_verification']): ?>yes<?php else: ?>no<?php endif; ?>.gif" /></span></td>
            <td align="center" width="15%">
                <a href="virtual_goods_card.php?act=edit_replenish&amp;card_id=<?php echo $this->_var['card']['card_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
                <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['card']['card_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>', 'remove_card')" title="<?php echo $this->_var['lang']['drop']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
       <?php else: ?>
        异常错误未获取到验证码，请联系管理员
       <?php endif; ?>
   </td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td><input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" disabled="true" /></td>
      <td align="right"><?php echo $this->fetch('page.htm'); ?></td>
    </tr>
  </table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end card_list list -->
</form>

<script type="text/javascript" language="JavaScript">
<!--

  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
  listTable.query = "query_card";

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


  onload = function()
  {
    document.forms['searchForm'].elements['order_sn'].focus();
    startCheckOrder();
  }

/**
 * 搜索团购商品
 */
function searchSnatch()
{
   var order_sn = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);

  if (order_sn.length > 0)
  {
    listTable.filter['order_sn']     = order_sn;
    listTable.loadList();
  }
  else
  {
    document.forms['searchForm'].elements['order_sn'].focus();
  }
}
//-->
function del_virtual_order(){
       
    if(confirm("确定要进行此操作吗？"))
    {
            return true;
    }
    else
    {
            return false;
    }
}
</script>


<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>