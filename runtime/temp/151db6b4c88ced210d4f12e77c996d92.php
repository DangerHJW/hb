<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\UPUPW_ANK_W64\WebRoot\Vhosts\web\public/../shop/seller\view\login\index.html";i:1515390034;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>商家后台</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="__SELLER__/common/css/pintuer.css"/>
<link rel="stylesheet" href="__SELLER__/lib/css/login.css"/>
<script src="__SELLER__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__SELLER__/layer/layer.js"></script>
<script type="text/javascript" src="__SELLER__/js/ajax_alert.js"></script>
<!--[if lt IE 8]>
<script type="text/javascript">
    alert('请您升级到IE8或以上版本!');
</script>
<![endif]-->
</head>
<body>
<div class="dux-login">
            <div class="media media-y">
                <a href="javascript:" target="_blank">
                  <h3 style="color:#fff" >商家后台管理系统</h3>
                  <!-- <img src="__SELLER__/lib/images/login.png" alt="商家后台管理系统" /> -->
                </a>
            </div>
            <br />
            <br />
            <form class="from1" action="<?php echo url("dologin"); ?>" method="post">
               <div class="input-block">
                <input type="text" class="input" id="username" name="account" size="20" maxlength="30" placeholder="用户名" />
                <br />
                <input type="password" class="input" id="password" name="password" size="20" maxlength="30" placeholder="密码" />
              </div>
              <br>
            </form>
            <div class="form-group">
                  <button type="button" target-form="from1" class="button button-block bg-main text-big ajax-post">登录</button>
              </div>
                   
</div>
</body>
</html>