<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/layui.css">
    <link rel="stylesheet" href="../css/view.css"/>
    <title></title>
</head>
<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-row layui-col-space20">
            <div class="layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-body chart-card">
                        <div class="chart-header">
                            <div class="metawrap">
                                <div class="meta">
                                    <span>总攻击次数</span>
                                </div>
                                <div class="total">{{$logs_count}}</div>
                            </div>
                        </div>
                        <div class="chart-body">
                            <div class="contentwrap">
                                所有类型的攻击
                            </div>
                        </div>
                        <div class="chart-footer">
                            <div class="field">
                                <span>日攻击量</span>
                                <span>{{$logs_count}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-body chart-card">
                        <div class="chart-header">
                            <div class="metawrap">
                                <div class="meta">
                                    <span>SQL注入攻击</span>
                                </div>
                                <div class="total">{{$logs_count}}</div>
                            </div>
                        </div>
                        <div class="chart-body">
                            <div class="contentwrap">
                                SQL注入攻击
                            </div>
                        </div>
                        <div class="chart-footer">
                            <div class="field">
                                <span>日攻击量</span>
                                <span>{{$logs_count}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-body chart-card">
                        <div class="chart-header">
                            <div class="metawrap">
                                <div class="meta">
                                    <span>CSRF攻击</span>
                                </div>
                                <div class="total">{{$logs_count}}</div>
                            </div>
                        </div>
                        <div class="chart-body">
                            <div class="contentwrap">
                                CSRF跨站脚本攻击
                            </div>
                        </div>
                        <div class="chart-footer">
                            <div class="field">
                                <span>日攻击量</span>
                                <span>{{$logs_count}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-sm12 layui-col-md12">
                <div class="layui-card">
                    <div class="layui-tab layui-tab-brief">
                        <ul class="layui-tab-title">
                            <li class="layui-this">攻击量</li>
                            <li>攻击类型</li>
                            <li>攻击来源</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-tab-item layui-show">
                                <div id="waf_count" style="height: 300px;"></div>
                            </div>
                            <div class="layui-tab-item layui-show">
                                <div id="waf_types" style="height: 300px;"></div>
                            </div>
                            <div class="layui-tab-item layui-show">
                                <div id="waf_origins" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../layui.all.js"></script>
    <script src="echarts.common.min.js"></script>
    <script>
     var element = layui.element;
    </script>
    <script type="text/javascript">
        var count_dom = document.getElementById("waf_count");
        var countChart = echarts.init(count_dom);
        var app = {};
        countOption = null;
        countOption = {
            title: {
                text: '攻击量'
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
                data: [21, 5, 0, 0, 0, 0, 3],
                type: 'line',
                areaStyle: {}
            }]
        };
        ;
        if (countOption && typeof countOption === "object") {
            countChart.setOption(countOption, true);
        }

    </script>
    <script type="text/javascript">
        var types_dom = document.getElementById("waf_types");
        var typesChart = echarts.init(types_dom);
        typesOption = null;
        typesOption = {
            title: {
                text: '攻击类型'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            series: [
                {
                    name:'攻击类型',
                    type:'pie',
                    radius: ['50%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: false,
                            position: 'center'
                        },
                        emphasis: {
                            show: true,
                            textStyle: {
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:[
                        {value:24, name:'SQL注入'},
                        {value:0, name:'CSRF攻击'},
                        {value:0, name:'XSS攻击'},
                        {value:5, name:'其他'},
                    ]
                }
            ]
        };
        if (typesOption && typeof typesOption === "object") {
            typesChart.setOption(typesOption, true);
        }
    </script>
    <script type="text/javascript">
        var origins_dom = document.getElementById("waf_origins");
        var originsChart = echarts.init(origins_dom);
        originsOption = null;
        originsOption = {
            title: {
                text: '攻击来源'
            },
            xAxis: {
                type: 'category',
                data: ['回溯地址', '重庆', '美国', '日本', '北京', '山东', '河南']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [29, 0, 0, 0, 0, 0, 0],
                type: 'bar'
            }]
        };
        if (originsOption && typeof originsOption === "object") {
            originsChart.setOption(originsOption, true);
        }
    </script>
</body>
</html>