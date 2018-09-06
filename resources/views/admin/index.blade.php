<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/layui.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="/favicon.ico">
    <title>NullWAF</title>
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header custom-header">
            
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item slide-sidebar" lay-unselect>
                    <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">{{$user->name}}</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">主页</a></dd>
                        <dd><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('退出') }}
                            </a></dd>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </dl>
                </li>
            </ul>
        </div>

        <div class="layui-side custom-admin">
            <div class="layui-side-scroll">

                <div class="custom-logo">
                    <img src="images/logo.png" alt=""/>
                    <h1>NullWAF 管控中心</h1>
                </div>
                <ul id="Nav" class="layui-nav layui-nav-tree">
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="layui-icon">&#xe609;</i>
                            <em>面板</em>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="console">态势概览</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="layui-icon">&#xe857;</i>
                            <em>防御记录</em>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="waf_logs">记录</a></dd>
                            {{--<dd>--}}
                                {{--<a href="javascript:;">页面</a>--}}
                                {{--<dl class="layui-nav-child">--}}
                                    {{--<dd>--}}
                                        {{--<a href="login.html">登录页</a>--}}
                                    {{--</dd>--}}
                                {{--</dl>--}}
                            {{--</dd>--}}
                        </dl>
                    </li>
                    {{--<li class="layui-nav-item">--}}
                        {{--<a href="javascript:;">--}}
                            {{--<i class="layui-icon">&#xe612;</i>--}}
                            {{--<em>用户</em>--}}
                        {{--</a>--}}
                        {{--<dl class="layui-nav-child">--}}
                            {{--<dd><a href="views/users.html">用户组</a></dd>--}}
                            {{--<dd><a href="views/operaterule.html">权限配置</a></dd>--}}
                        {{--</dl>--}}
                    {{--</li>--}}
                </ul>

            </div>
        </div>

        <div class="layui-body">
             <div class="layui-tab app-container" lay-allowClose="true" lay-filter="tabs">
                <ul id="appTabs" class="layui-tab-title custom-tab"></ul>
                <div id="appTabPage" class="layui-tab-content"></div>
            </div>
        </div>

        <div class="layui-footer">
            <p>© 2018 重庆大学NullWAF项目组</p>
        </div>

        <div class="mobile-mask"></div>
    </div>
    <script src="layui.js"></script>
    <script src="index.js" data-main="home"></script>
</body>
</html>