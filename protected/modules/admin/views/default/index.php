<h1>后台首页</h1><a href="<?php echo $this->createUrl('index/out');?>">退出</a>
<h3>欢迎你，<?php echo Yii::app()->user->name;?>!</h3>
<h5>当前时间，<?php echo date('Y-m-d H:i:s', time()); ?></h5>
<h5>登陆时间，<?php echo date('Y-m-d H:i:s', Yii::app()->session['loginDate']); ?></h5>
<h5>客户端IP，<?php echo Yii::app()->request->userHostAddress; ?></h5>
<h5>服务器环境，<?php echo $_SERVER['SERVER_SOFTWARE']; ?></h5>
<h5>PHP版本，<?php echo PHP_VERSION; ?></h5>
<h5>服务器IP，<?php echo $_SERVER['SERVER_ADDR']; ?></h5>
<h5>数据库信息，<?php echo mysql_get_client_info(); ?></h5>
