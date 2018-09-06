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
                            <li class="layui-this">今日指数</li>
                            <li>往日指数</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-tab-item layui-show">
                                56
                            </div>
                            <div class="layui-tab-item">
                                66
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../layui.all.js"></script>
    <script>
     var element = layui.element;
    </script>
</body>
</html>