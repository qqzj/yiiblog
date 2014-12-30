<h1>后台首页</h1><a href="<?php echo $this->createUrl('index/out');?>">退出</a>
<h3>欢迎你，<?php echo Yii::app()->user->name;?>!</h3>
<h5>当前时间，<?php echo date('Y-m-d H:i:s', time()); ?></h5>