<!-- $Id: sell_stats.htm 16420 2015-10-23 13:16:57Z langlibin $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader_bd.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<div id="tabbar-div">
    <p>
        <span class="tab-front" onclick="javascript:location.href='sell_stats.php'"><?php echo $this->_var['lang']['sales_statistics']; ?></span>
        <span class="tab-back" onclick="javascript:location.href='sell_area_stats.php'"><?php echo $this->_var['lang']['area_analyse']; ?></span>
    </p>
</div>
<div class="main-div"><p style="margin: 10px"><?php echo $this->_var['lang']['notice_sell_stats']; ?></div>

<div class="form-div">
    <form action="sell_stats.php" method="post" id="searchForm" name="searchForm">
        <select name="stats_type" id="stats_type" onchange="week()">
            <option value="1" <?php if ($this->_var['stats_type'] == '1'): ?>selected<?php endif; ?>>按周统计</option>
            <option value="2" <?php if ($this->_var['stats_type'] != '1'): ?>selected<?php endif; ?>>按月统计</option>
        </select>
        <select name="year" id="year" onchange="week()"></select>
        <select name="month" id="month" onchange="week()"></select>
        <select name="dropweek" id="dropweek" <?php if ($this->_var['stats_type'] != '1'): ?>style="display: none"<?php endif; ?>></select>
        <select name="status" id="status">
            <option value="-1"><?php echo $this->_var['lang']['select_please']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['status_list'],'selected'=>$this->_var['status'])); ?>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="button" />
        <input type="submit" name="export" value="<?php echo $this->_var['lang']['batch_export']; ?>" class="button" />
    </form>
</div>
<div class="main-div">
    <p style="margin: 10px">
        <span title="<?php echo $this->_var['lang']['notice_order_money_all']; ?>"><?php echo $this->_var['lang']['order_money_all']; ?><?php echo $this->_var['order_money']; ?>元</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span title="<?php echo $this->_var['lang']['notice_order_count_all']; ?>"><?php echo $this->_var['lang']['order_count_all']; ?><?php echo $this->_var['order_count']; ?></span>
    </p>
</div>
<div id="tabbar-div2">
    <p>
        <span class="tab-front" id="tab_order_amount">下单金额</span>
        <span class="tab-back" id="tab_order_count">下单量</span>
    </p>
</div>
<div class="list-div" id="orders_amount_div">
    <div class="order_count">
        <p><span class="tab_front">下单金额统计</span></p>
        <div style='height:400px;width:90%;margin-left:auto;margin-right:auto;' id='orders_amount_option_div'></div>
    </div>
</div>
<div class="list-div" id="orders_count_div">
    <div class="order_count">
        <p><span class="tab_front">下单量统计</span></p>
        <div style='height:400px;width:90%;margin-left:auto;margin-right:auto;' id='orders_count_option_div'></div>
    </div>
</div>

<form method="post" action="" name="listForm" onsubmit="">
    <div class="list-div" id="listDiv">
        <?php endif; ?>
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th>订单编号</th>
                <th>买家</th>
                <th>下单时间</th>
                <th>订单总额</th>
                <th>订单状态</th>
            </tr>
            <?php $_from = $this->_var['order_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
                <td><?php echo $this->_var['item']['order_sn']; ?></td>
                <td><?php echo $this->_var['item']['user_name']; ?></td>
                <td><?php echo $this->_var['item']['add_time']; ?></td>
                <td><?php echo $this->_var['item']['goods_amount']; ?></td>
                <td><?php echo $this->_var['lang']['os'][$this->_var['item']['order_status']]; ?></td>
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
    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;

    for (i = 0; i < 10; i++) {
        var oP = document.createElement("option");
        var oText = document.createTextNode(y);
        oP.appendChild(oText);
        oP.setAttribute("value", y);
        if(y == '<?php echo $this->_var['year']; ?>')
        {
            oP.setAttribute("selected", "selected")
        }
        document.getElementById('year').appendChild(oP);
        y = y - 1;
    };
    var j = 1;
    for (i = 1; i < 13; i++) {
        var month = document.createElement("option");
        var monthText = document.createTextNode(j);
        month.appendChild(monthText);
        month.setAttribute("value", j);
        if (j == <?php echo $this->_var['month']; ?>)
        {
            month.setAttribute("selected", "selected");
        }
        document.getElementById('month').appendChild(month);
        j = j + 1;
    };

    var week_num = <?php echo $this->_var['week_num']; ?>;
    //绑定周
    function week()
    {
        if($("#stats_type").val()==2)
        {
            $("#dropweek").hide();
            return;
        }
        $("#dropweek").show();
        var text = $("#year").val() + '-' + $("#month").val();
        var ymd = text.substring(0, 4) + "-" + text.substring(5, 7) + "-1";
        var week = new Date(Date.parse(ymd.replace(/\-/g, "/")));
        var w = week.toString().substring(0, 3);
        var yymm = new Date(text.substring(0, 4), text.substring(5, 7), 0);
        var day = yymm.getDate();
        var dd = 1;
        switch (w) {
            case "Mon": dd = 0; break;
            case "Tue": dd = 1; break;
            case "Wed": dd = 2; break;
            case "Thu": dd = 3; break;
            case "Fri": dd = 4; break;
            case "Sat": dd = 5; break;
            case "Sun": dd = 6; break;
        }
        var aw = 5;
        if (day == 28 && dd == 0) {
            aw = 4;
        }
        var i = 1;
        $("#dropweek").empty();
        for (var i = 0; i < aw; i++) {
            var start = i * 7 + 1 - dd;
            var end = i * 7 + 7 - dd;
            if (start < 1) {
                start = 1;
            }
            if (end > day) {
                end = day;
            }
            var str = ("第" + (i + 1) + "周 <" + text.substring(5, 7) + "月" + start + "号—" + text.substring(5, 7) + "月" + end + "号>").toString();
            var val = $("#year").val() + '-' + text.substring(5, 7) + '-' + start + ' ' + $("#year").val() + '-' + text.substring(5, 7) + '-' + end + ' ' + i;
            $("#dropweek").append("<option value='" + val + "'>" + str + "</option>");
        }
        $('#dropweek')[0].selectedIndex = week_num;

        var itme = $("#dropweek").find("option:selected").text();
        $("#txtweek:text").val(itme.toString());
    }
    // 执行
    week();
</script>

<script src='js/echarts-all.js'></script>
<script>
    var option1 = {
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
                data : [<?php echo $this->_var['date']; ?>]
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
                data:[<?php echo $this->_var['goods_amount']; ?>],
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
    var option2 = {
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
                data : [<?php echo $this->_var['date']; ?>]
            }
        ],
        yAxis : [
            {
                type : 'value',
                axisLabel : {
                    formatter: '{value} 件'
                }
            }
        ],
        series : [
            {
                name:'下单件数',
                type:'line',
                data:[<?php echo $this->_var['goods_count']; ?>],
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
    var order_chart1 = echarts.init(document.getElementById('orders_amount_option_div'));
    order_chart1.setOption(option1);
    var order_chart2 = echarts.init(document.getElementById('orders_count_option_div'));
    order_chart2.setOption(option2);
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#orders_count_div").hide();
        $("#tab_order_amount").hover(function(){
            $("#orders_amount_div").show();
            $("#orders_count_div").hide();
            $("#tab_order_amount").addClass('tab-front');
            $("#tab_order_amount").removeClass('tab-back');
            $("#tab_order_count").addClass('tab-back');
            $("#tab_order_count").removeClass('tab-front');
        });
        $("#tab_order_count").hover(function(){
            $("#orders_amount_div").hide();
            $("#orders_count_div").show();
            $("#tab_order_count").addClass('tab-front');
            $("#tab_order_count").removeClass('tab-back');
            $("#tab_order_amount").addClass('tab-back');
            $("#tab_order_amount").removeClass('tab-front');
        });
    });

    listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
    listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

    <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>