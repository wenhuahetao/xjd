<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<link href="styles/zTree/zTreeStyle.css" rel="stylesheet" type="text/css" />
<link href="styles/chosen/chosen.css" rel="stylesheet" type="text/css">
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.6.2.min.js,chosen.jquery.min.js,jquery.ztree.all-3.5.min.js,category_selecter.js')); ?>
<div class="form-div">
  <form action="javascript:get_search_order()" id="searchForm" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <?php if ($_GET['act'] != "trash"): ?>
    <!-- 分类 -->
    <select class="chzn-select" name="cat_id"><option value="0"><?php echo $this->_var['lang']['goods_cat']; ?></option><?php echo $this->_var['cat_list']; ?></select>
    <!-- 品牌 -->
    <select class="chzn-select" name="brand_id"><option value="0"><?php echo $this->_var['lang']['goods_brand']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
    <!-- 推荐 -->
    <select class="chzn-select" name="intro_type"><option value="0"><?php echo $this->_var['lang']['intro_type']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['intro_list'],'selected'=>$_GET['intro_type'])); ?></select>
     
      <!-- 上架 -->
      <select class="chzn-select" name="is_on_sale"><option value=''><?php echo $this->_var['lang']['intro_type']; ?></option><option value="1"><?php echo $this->_var['lang']['on_sale']; ?></option><option value="0"><?php echo $this->_var['lang']['not_on_sale']; ?></option></select>
    <?php endif; ?>
    <!-- 关键字 -->
    <?php echo $this->_var['lang']['keyword']; ?> <input type="text" name="keyword" size="15" />
    <input type="button" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" onclick="get_search_order()" />
	<?php if ($this->_var['is_pre_sale'] != '1'): ?>
	<?php if ($this->_var['is_goods_trash'] != '1'): ?>
	<input type="button" value="批量导出" class="button" onclick="get_excel()" />
	<input type="hidden" name="supplier_status" value="<?php echo $this->_var['supplier_status']; ?>" />
	<?php endif; ?>
	<?php endif; ?>
  </form>
</div>


<script language="JavaScript">
$().ready(function(){
    $(".chzn-select").chosen();
	$('.chzn-container-single:last').css('width','60px');
 });
function get_search_order()
{
	document.getElementById("searchForm").action="javascript:searchGoods()";
	document.getElementById("searchForm").submit();
}

function get_excel()
{
	document.getElementById("searchForm").action="?act=export";
	document.getElementById("searchForm").method="post";
	document.getElementById("searchForm").submit();
}

    function searchGoods()
    {

        <?php if ($_GET['act'] != "trash"): ?>
        listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
        listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
        listTable.filter['intro_type'] = document.forms['searchForm'].elements['intro_type'].value;
        listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;
        <?php endif; ?>

        listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
        listTable.filter['page'] = 1;

        listTable.loadList();
    }
</script>
