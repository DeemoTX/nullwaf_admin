<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layui.css">
    <link rel="stylesheet" href="../css/view.css"/>
    <title></title>
</head>
<body>
<div id="waf_count" style="height: 300px;"></div>
<script src="echarts.common.min.js"></script>
<script type="text/javascript">
    var count_dom = document.getElementById("waf_count");
    var countChart = echarts.init(count_dom);
    var app = {};
    countOption = null;
    countOption = {
        title: {
            text: '未来一周攻击态势'
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [2, 3, 0, 4, 1, 1, 2],
            type: 'line',
            areaStyle: {}
        }]
    };
    ;
    if (countOption && typeof countOption === "object") {
        countChart.setOption(countOption, true);
    }

</script>
</body>
</html>