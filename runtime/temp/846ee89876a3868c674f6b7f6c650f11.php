<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:32:"../tpl/home/wap/login\login.html";i:1514425712;}*/ ?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
  <title><?php echo $site_info['WEB_SITE_TITLE']; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,minimal-ui">
  <meta name="description" content="<?php echo $site_info['WEB_SITE_DESCRIPTION']; ?>">
  <meta name="Keywords" content="<?php echo $site_info['WEB_SITE_KEYWORD']; ?>">
  <link rel="stylesheet" href="__CSS__/style.css">
  <script type="text/javascript" src="__JS__/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="__HOME__/layer_mobile/layer.js"></script>
  <script type="text/javascript" src="__COM__/js/home_index.js"></script>

</head>
<body>
  <div class="login_header">
    <img src="<?php echo $site_info['WEB_SITE_LOGO']; ?>">
    <form name="formlogin"  action="<?php echo url('Login/dologin'); ?>" method="post">
      <input name="account" type="text" placeholder="账号或手机号">
      <input name="password" placeholder="登录密码" type="password">
      <p id="login" onclick="login()" >登录</p>
      <p><a href="<?php echo url('selectreg'); ?>">我要注册</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('password'); ?>">忘记密码？</a></p>
    </form>
  </div>

</body>
</html>