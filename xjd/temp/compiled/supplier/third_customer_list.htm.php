<!-- $Id: third_customer_list.htm 2015-08-25 14:45:21Z langlibin $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div class="form-div">
  <form action="javascript:searchCustomer()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <?php echo $this->_var['lang']['cus_name']; ?> <input type="text" name="keyword" size="30" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>
<form method="POST" action="third_customer.php?act=batch_drop" name="listForm" onsubmit="return confirm('<?php echo $this->_var['lang']['batch_drop_confirm']; ?>')">
<!-- start cus list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('cus_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_cus_id']; ?></th>
      <th><a href="javascript:listTable.sort('cus_name'); "><?php echo $this->_var['lang']['cus_name']; ?></a><?php echo $this->_var['sort_cus_name']; ?></th>
      <th><a href="javascript:listTable.sort('cus_no'); "><?php echo $this->_var['lang']['cus_no']; ?></a><?php echo $this->_var['sort_cus_no']; ?></th>
      <th><a href="javascript:listTable.sort('cus_type'); "><?php echo $this->_var['lang']['cus_type']; ?></a><?php echo $this->_var['sort_cus_type']; ?></th>
      <th><a href="javascript:listTable.sort('is_master'); "><?php echo $this->_var['lang']['is_master']; ?></a><?php echo $this->_var['sort_is_master']; ?></th>
      <th><a href="javascript:listTable.sort('add_time'); "><?php echo $this->_var['lang']['add_time']; ?></a><?php echo $this->_var['sort_add_time']; ?></th>
      <th><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>

    <?php $_from = $this->_var['third_customer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cus');if (count($_from)):
    foreach ($_from AS $this->_var['cus']):
?>
    <tr>
      <td><input value="<?php echo $this->_var['cus']['cus_id']; ?>" name="checkboxes[]" type="checkbox"><?php echo $this->_var['cus']['cus_id']; ?></td>
      <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_cus_name', <?php echo $this->_var['cus']['cus_id']; ?>)"><?php echo $this->_var['cus']['cus_name']; ?></span></td>
      <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_cus_no', <?php echo $this->_var['cus']['cus_id']; ?>)"><?php echo $this->_var['cus']['cus_no']; ?></span></td>
      <?php if ($this->_var['cus']['cus_type'] == 0): ?>
      <td align="center"><?php echo $this->_var['lang']['qq']; ?></td>
      <?php else: ?>
      <td align="center"><?php echo $this->_var['lang']['ww']; ?></td>
      <?php endif; ?>
      <td align="center"><img src="images/<?php if ($this->_var['cus']['is_master']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_master', <?php echo $this->_var['cus']['cus_id']; ?>)" /></td>
      <td align="center"><?php echo $this->_var['cus']['formated_add_time']; ?></td>
      <td align="center">
        <a href="third_customer.php?act=edit&cus_id=<?php echo $this->_var['cus']['cus_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cus']['cus_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
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
</form>

<script type="text/javascript" language="JavaScript">
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


/* 搜索三方客服 */
function searchCustomer()
{
   listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
   listTable.filter.page = 1;
   listTable.loadList();
}


</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>