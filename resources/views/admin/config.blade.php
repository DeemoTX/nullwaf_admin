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
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">系统配置</div>
            <form class="layui-form layui-card-body" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">WAF开关</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="switch" lay-skin="switch" @if($config->switch)checked @endif>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">USER_KEY</label>
                    <div class="layui-input-inline">
                        <p>{{ $config->user_key }}</p>
                    </div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../layui.all.js"></script>
<script>
    var form = layui.form
        , layer = layui.layer;
</script>
</body>
</html>