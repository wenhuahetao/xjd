<!-- $Id: shop_config.htm 16865 2009-12-10 06:05:32Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,../js/region.js')); ?>
<div class="tab-div">
  <!-- tab bar -->
  <div id="tabbar-div">
    <p>
      <?php $_from = $this->_var['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['bar_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bar_group']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['bar_group']['iteration']++;
?><span class="<?php if ($this->_foreach['bar_group']['iteration'] == 1): ?>tab-front<?php else: ?>tab-back<?php endif; ?>" id="<?php echo $this->_var['group']['code']; ?>-tab"><?php echo $this->_var['group']['name']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </p>
  </div>
  <!-- tab body -->
  <div id="tabbody-div">
    <form enctype="multipart/form-data" name="theForm" action="?act=post" method="post">
    <?php $_from = $this->_var['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['body_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['body_group']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['body_group']['iteration']++;
?>
    <table width="90%" id="<?php echo $this->_var['group']['code']; ?>-table" <?php if ($this->_foreach['body_group']['iteration'] != 1): ?>style="display:none"<?php endif; ?>>
      <?php $_from = $this->_var['group']['vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'var');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['var']):
?>
      <?php echo $this->fetch('shop_config_form.htm'); ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div class="button-div">
      <input name="submit" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input name="reset" type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </div>
    </form>
  </div>
</div>

</body>
<?php echo $this->smarty_insert_scripts(array('files'=>'tab.js,validator.js')); ?>

<script language="JavaScript">
region.isAdmin = true;
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
var ReWriteSelected = null;
var ReWriteRadiobox = document.getElementsByName("value[209]");

for (var i=0; i<ReWriteRadiobox.length; i++)
{
  if (ReWriteRadiobox[i].checked)
  {
    ReWriteSelected = ReWriteRadiobox[i];
  }
}

function ReWriterConfirm(sender)
{
  if (sender == ReWriteSelected) return true;
  var res = true;
  if (sender != ReWriteRadiobox[0]) {
    var res = confirm('<?php echo $this->_var['rewrite_confirm']; ?>');
  }

  if (res==false)
  {
      ReWriteSelected.checked = true;
  }
  else
  {
    ReWriteSelected = sender;
  }
  return res;
}
</script>



<script type="text/javascript">
    var map = new BMap.Map("container");
    map.centerAndZoom("秦皇岛", 12);
    map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
	map.addControl(new BMap.MapTypeControl()); //调用卫星地图

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
   //map.addControl(new BMap.OverviewMapControl({isOpen: true, anchor: BMAP_ANCHOR_TOP_RIGHT}));   //右上角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小
function searchByStationName() {
    map.clearOverlays();//清空原来的标注
    var keyword = document.getElementById("text_").value;
    localSearch.setSearchCompleteCallback(function (searchResult) {
        var poi = searchResult.getPoi(0);
        //document.getElementById("result_").value = poi.point.lng + "," + poi.point.lat;
        map.centerAndZoom(poi.point, 13);
        var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地址对应的经纬度
//map.addOverlay(marker); var content = document.getElementById("text_").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat; var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>"); marker.addEventListener("click", function () {this.openInfoWindow(infoWindow);});
//marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
 map.addOverlay(marker);    
 marker.enableDragging();    //可拖拽  
 marker.addEventListener("dragend", function(e){   
		//document.getElementById("r-result").innerHTML = e.point.lng + ", " + e.point.lat;//打印拖动结束坐标  
		//document.getElementById("r-result").innerHTML = "经度:" + e.point.lng;//打印拖动结束坐标  
		//document.getElementById("r-result2").innerHTML = "纬度:" + e.point.lat;//打印拖动结束坐标  
		//document.getElementById("jingdu").value=document.getElementById("r-result").innerHTML; 
		//document.getElementById("weidu").value=document.getElementById("r-result2").innerHTML;	
		document.getElementById("jingdu").value= e.point.lng;
		document.getElementById("weidu").value= e.point.lat;
 }); 
  }); 
 localSearch.search(keyword); 
}
 
       

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>

