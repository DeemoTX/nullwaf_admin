<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../css/layui.css">
    <link rel="stylesheet" href="../css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <title>管理后台</title>
</head>
<body class="layui-view-body">
<div class="layui-content">
    <div class="layui-page-header">
        <div class="pagewrap">
                <span class="layui-breadcrumb">
                  <a href="">首页</a>
                  <a href="">防火墙配置</a>
                  <a><cite>白名单设置</cite></a>
                </span>
            <h2 class="title">白名单设置</h2>
        </div>
    </div>
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-body">
                <div class="form-box">
                    <button class="layui-btn layui-btn-blue"><i class="layui-icon">&#xe654;</i>新增</button>
                    <table id="demo"></table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../layui.all.js"></script>
<script>
    var element = layui.element;
    var table = layui.table;
    var form = layui.form;

    //展示已知数据
    table.render({
        elem: '#demo'
        ,cols: [
            [
                {field: 'id', title: 'ID', minWidth: 120, sort: true},
                {field: 'url', title: 'URL', minWidth: 200,sort: true},
            ]
        ]
        ,data: [
            @foreach($urls as $url)
            {
                'id':'{{$url->id}}',
                'url':'{{$url->url}}',
            },
            @endforeach
        ]
        ,skin: 'line' //表格风格
        ,even: true
        ,page: true //是否显示分页
        ,limits: [5, 7, 10]
        ,limit: 5 //每页默认显示的数量
    });
</script>
</body>
</html>