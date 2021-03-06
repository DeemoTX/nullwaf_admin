<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/layui.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="/favicon.ico">
    <title>NullWAF 管控中心</title>
</head>
<body class="login-wrap">
<div class="login-container">
    <form class="login-form" method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" id="email" name="email" class="input-field{{ $errors->has('phone') ? ' has-error' : '' }}" required>
            <label for="email" class="input-label">
                <span class="label-title">邮箱地址</span>
            </label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" class="input-field{{ $errors->has('password') ? ' has-error' : '' }}" required>
            <label for="password" class="input-label">
                <span class="label-title">密码</span>
            </label>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="login-button">登录<i class="ai ai-enter"></i></button>
    </form>
</div>
</body>
<script src="layui.js"></script>
<script src="index.js" data-main="login"></script>
</html>