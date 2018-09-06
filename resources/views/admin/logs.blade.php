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
                  <a href="">防御记录</a>
                  <a><cite>记录</cite></a>
                </span>
                <h2 class="title">记录</h2>
            </div>
        </div>
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="form-box">
                        <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">来源IP:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input type="text" autocomplete="off" class="layui-input">
                                </div>
                                {{--<div class="layui-form-mid">邮箱:</div>--}}
                                {{--<div class="layui-input-inline" style="width: 100px;">--}}
                                  {{--<input type="text" autocomplete="off" class="layui-input">--}}
                                {{--</div>--}}
                                {{--<div class="layui-form-mid">性别:</div>--}}
                                {{--<div class="layui-input-inline" style="width: 100px;">--}}
                                    {{--<select name="sex">--}}
                                        {{--<option value="1">男</option>--}}
                                        {{--<option value="2">女</option>--}}
                                    {{--</select>     --}}
                                {{--</div>--}}
                                <button class="layui-btn layui-btn-blue">查询</button>
                                <button class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
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
            {field: 'log_ip', title: '来源IP', minWidth: 120, sort: true},
            {field: 'log_time', title: '攻击时间', minWidth: 120,sort: true},
            {field: 'log_page', title: '攻击页面', minWidth: 100},
            {field: 'log_method', title: '攻击方式', width: 100},
            {field: 'log_rkey', title: 'RKEY', minWidth: 80},
            {field: 'log_rdata', title: 'RDATA', minWidth: 100},
            {field: 'log_user_agent', title: 'User_Agent', width: 120},
            {field: 'log_request_url', title: '请求URL', minWidth: 150}
      ]
      ]
    ,data: [
          @foreach($logs as $log)
          {
              'log_ip':'{{$log->log_ip}}',
              'log_time':'{{$log->log_time}}',
              'log_page':'{{$log->log_page}}',
              'log_method':'{{$log->log_method}}',
              'log_rkey':'{{$log->log_rkey}}',
              'log_rdata':'{{$log->log_rdata}}',
              'log_user_agent':'{{$log->log_user_agent}}',
              'log_request_url':'{{$log->log_request_url}}',
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