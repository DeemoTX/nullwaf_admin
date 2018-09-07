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
            <div class="layui-card-header">区块链日志</div>
            <form class="layui-form layui-card-body" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">开启区块链</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="switch" lay-skin="switch">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">Cluster标识</label>
                    <div class="layui-input-inline">
                        <input type="text" name="ClusterId" required lay-verify="required" placeholder="cluster标识"
                               autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">ClusterId</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">合约名称</label>
                    <div class="layui-input-inline">
                        <input type="text" name="ChaincodeName" required lay-verify="required" placeholder="合约名称"
                               autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">ChaincodeName</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">通道名称</label>
                    <div class="layui-input-inline">
                        <input type="text" name="ChannelName" required lay-verify="required" placeholder="通道名称"
                               autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">ChannelName</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">节点与组织</label>
                    <div class="layui-input-inline">
                        <input type="text" name="Peers" required lay-verify="required" placeholder="节点与组织"
                               autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">	Array of PeerSet</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">BaaS接口</label>
                    <div class="layui-input-block">
                        <select name="city" lay-verify="required">
                            <option value=""></option>
                            <option value="0">TBaaS</option>
                            <option value="1">纸贵科技</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">上链内容</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="like[write]" title="IP地址" checked>
                        <input type="checkbox" name="like[read]" title="攻击时间" checked>
                        <input type="checkbox" name="like[dai]" title="请求地址" checked>
                    </div>
                </div>
                {{--<div class="layui-form-item">--}}
                    {{--<label class="layui-form-label">单选框</label>--}}
                    {{--<div class="layui-input-block">--}}
                        {{--<input type="radio" name="sex" value="男" title="男">--}}
                        {{--<input type="radio" name="sex" value="女" title="女" checked>--}}
                    {{--</div>--}}
                    {{--<input type="checkbox" name="" title="写作" lay-skin="primary" checked>--}}
                {{--</div>--}}
                {{--<div class="layui-form-item layui-form-text">--}}
                    {{--<label class="layui-form-label">文本域</label>--}}
                    {{--<div class="layui-input-block">--}}
                        {{--<textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
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