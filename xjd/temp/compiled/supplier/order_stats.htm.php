<!-- $Id: order_stats.htm 16420 2015-10-21 14:32:57Z langlibin $ -->
<?php echo $this->fetch('pageheader_bd.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<div class="main-div">
    <p style="margin: 10px"><?php echo $this->_var['lang']['notice_order_stats']; ?></p>
</div>

<div class="form-div">
    <form action="" method="post" id="selectForm" name="selectForm">
        <?php echo $this->_var['lang']['add_time']; ?>&nbsp;
        <input name="start_date" value="<?php echo $this->_var['start_date']; ?>" style="width:100px;height:20px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
        <?php echo $this->_var['lang']['to']; ?> &nbsp;
        <input name="end_date" value="<?php echo $this->_var['end_date']; ?>" style="width:100px;height:20px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="button" />
    </form>
</div>
<div class="main-div">
    <p style="margin: 10px">
    <table>
        <tr>
            <td><span title="<?php echo $this->_var['lang']['notice_order_money']; ?>"><?php echo $this->_var['lang']['order_money']; ?><?php echo $this->_var['order_money']; ?><?php echo $this->_var['lang']['yuan']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_order_member']; ?>"><?php echo $this->_var['lang']['order_member']; ?><?php echo $this->_var['order_member']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_order_count']; ?>"><?php echo $this->_var['lang']['order_count']; ?><?php echo $this->_var['order_count']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_order_goods_number']; ?>"><?php echo $this->_var['lang']['order_goods_number']; ?><?php echo $this->_var['order_goods_number']; ?></span></td>
        </tr>
        <tr>
            <td><span title="<?php echo $this->_var['lang']['notice_average_member']; ?>"><?php echo $this->_var['lang']['average_member']; ?><?php echo $this->_var['average_member']; ?><?php echo $this->_var['lang']['yuan']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_average_goods']; ?>"><?php echo $this->_var['lang']['average_goods']; ?><?php echo $this->_var['average_goods']; ?><?php echo $this->_var['lang']['yuan']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_goods_save']; ?>"><?php echo $this->_var['lang']['goods_save']; ?><?php echo $this->_var['goods_save']; ?></span></td>
            <td><span title="<?php echo $this->_var['lang']['notice_goods_number']; ?>"><?php echo $this->_var['lang']['goods_number']; ?><?php echo $this->_var['goods_number']; ?></span></td>
        </tr>
        <tr>
            <td><span title="<?php echo $this->_var['lang']['notice_shop_save']; ?>"><?php echo $this->_var['lang']['shop_save']; ?><?php echo $this->_var['shop_save']; ?></span></td>
            <!--
            <td><span title="<?php echo $this->_var['lang']['notice_order_peak']; ?>"><?php echo $this->_var['lang']['order_peak']; ?><?php echo $this->_var['order_peak']; ?></span></td>
            -->
            <td>&nbsp;</td><td>&nbsp;</td>
            <td>&nbsp;</td><td>&nbsp;</td>
        </tr>
    </table>
    </p>
</div>
<div class="list-div">
    <div class="order_count">
        <p><span class="tab_front">销售走势</span></p>
        <div style='height:400px;width:90%;margin-left:auto;margin-right:auto;' id='orders_option_div'></div>
    </div>
</div>

<script src='js/echarts-all.js'></script>
<script>
    var option = {
        title : {
//            text: '',
//            subtext: ''
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:[]
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: false}, // 辅助线开关
                dataView : {show: false, readOnly: false}, // 数据视图
                magicType : {show: true, type: ['line']}, // 显示折线图
                restore : {show: true}, // 还原
                saveAsImage : {show: true} // 保存为图片
            }
        },
        calculable : false,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : [<?php echo $this->_var['date_arr']; ?>]
            }
        ],
        yAxis : [
            {
                type : 'value',
                axisLabel : {
                    formatter: '{value} 元'
                }
            }
        ],
        series : [
            {
                name:'下单金额',
                type:'line',
                data:[<?php echo $this->_var['goods_amount_arr']; ?>],
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
//                        {type : 'average', name: '平均值'}
                    ]
                }
            }
        ]
    };
    var order_chart = echarts.init(document.getElementById('orders_option_div'));
    order_chart.setOption(option);
</script>
<!-- end 升级 -->


<?php echo $this->fetch('pagefooter.htm'); ?>
