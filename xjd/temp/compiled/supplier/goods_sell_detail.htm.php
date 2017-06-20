<!-- $Id: goods_sell_detail.htm 2015-10-22 14:45:21Z langlibin $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<div id="tabbar-div">
    <p>
        <span class="tab-back" onclick="javascript:location.href='goods_stats.php'"><?php echo $this->_var['lang']['sell_list']; ?></span>
        <span class="tab-front" onclick="javascript:location.href='goods_sell_detail.php'"><?php echo $this->_var['lang']['sell_detail']; ?></span>
        <span class="tab-back" onclick="javascript:location.href='goods_purchase_rate.php'"><?php echo $this->_var['lang']['purchase_rate']; ?></span>
    </p>
</div>
<div class="main-div">
    <p style="margin: 10px"><?php echo $this->_var['lang']['notice_goods_status']; ?></p>
</div>

<div class="form-div">
    <form action="javascript:searchSellDetail(1)" name="searchForm">
        <?php echo $this->_var['lang']['add_time']; ?>&nbsp;
        <input name="start_date" value="<?php echo $this->_var['start_date']; ?>" style="width:100px;height:20px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
        <?php echo $this->_var['lang']['to']; ?> &nbsp;
        <input name="end_date" value="<?php echo $this->_var['end_date']; ?>" style="width:100px;height:20px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
        <!-- 分类 -->
        <select name="cat_id"><option value="0">所有分类</option><?php echo $this->_var['cat_list']; ?></select>
        <!-- 品牌 -->
        <select name="brand_id"><option value="0">所有品牌</option><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="button" />
        <input type="button" name="export" value="<?php echo $this->_var['lang']['batch_export']; ?>" class="button" onclick="batch_export()" />
    </form>
</div>

<form method="post" action="" name="listForm" onsubmit="">
    <div class="list-div" id="listDiv">
        <?php endif; ?>
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th><?php echo $this->_var['lang']['goods_name']; ?></th>
                <th><?php echo $this->_var['lang']['order_sn']; ?></th>
                <th><a href="javascript:listTable.sort('sells_count'); "><?php echo $this->_var['lang']['sells_count']; ?></a><?php echo $this->_var['sort_sells_count']; ?></th>
                <th><a href="javascript:listTable.sort('goods_price'); "><?php echo $this->_var['lang']['sells_price']; ?></a><?php echo $this->_var['sort_goods_price']; ?></th>
                <th><a href="javascript:listTable.sort('add_time'); "><?php echo $this->_var['lang']['add_date']; ?></a><?php echo $this->_var['sort_add_time']; ?></th>
            </tr>

            <?php $_from = $this->_var['sell_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
            <tr>
                <td><?php echo $this->_var['item']['goods_name']; ?></td>
                <td><?php echo $this->_var['item']['order_sn']; ?></td>
                <td><?php echo $this->_var['item']['sells_count']; ?></td>
                <td><?php echo $this->_var['item']['goods_price']; ?></td>
                <td><?php echo $this->_var['item']['add_time']; ?></td>
            </tr>
            <?php endforeach; else: ?>
            <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
        <table cellpadding="4" cellspacing="0">
            <tr>
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

    

    $(document).ready(function(){
        $("#brand_id").chosen();
    });

    /* 搜索商品销售明细 */
    function searchSellDetail(date_type)
    {
    	if (typeof(date_type) == "undefined")
    	{
    		date_type = 0;
    	}
        listTable.filter.start_date = Utils.trim(document.forms['searchForm'].elements['start_date'].value);
        listTable.filter.end_date = Utils.trim(document.forms['searchForm'].elements['end_date'].value);
        listTable.filter.cat_id = Utils.trim(document.forms['searchForm'].elements['cat_id'].value);
        listTable.filter.brand_id = Utils.trim(document.forms['searchForm'].elements['brand_id'].value);
        listTable.filter.page = 1;
        listTable.filter.date_type = date_type;
        listTable.loadList();
    }

    function batch_export()
    {
        // 开始日期
        var start_date = Utils.trim(document.forms['searchForm'].elements['start_date'].value);
        // 终了日期
        var end_date = Utils.trim(document.forms['searchForm'].elements['end_date'].value);
        var cat_id = Utils.trim(document.forms['searchForm'].elements['cat_id'].value);
        var brand_id = Utils.trim(document.forms['searchForm'].elements['brand_id'].value);

        return location.href='goods_sell_detail.php?act=export&start_date='+
                start_date+'&end_date='+end_date+'&cat_id='+cat_id+'&brand_id='+brand_id;
    }

    
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>