<?php
/* @var $this DefaultController */
?>
<?php $form = $this->beginWidget('CActiveForm');?>
用户名:<?php echo $form->textField($loginForm, 'username', array('id'=>'user'));?><br />
密&nbsp;&nbsp;&nbsp;码:<?php echo $form->passwordField($loginForm, 'password', array('id'=>'pass'));?><br />
验证码:<?php echo $form->textField($loginForm, 'captcha', array('id'=>'captcha', 'autocomplete'=>'off'));?><!--<?php $this->widget('CCaptcha');?>-->
<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
<br />
记住我:<?php echo $form->checkBox($loginForm, 'rememberMe', array('id'=>'remember'));?><br />
<input type="submit" value="登陆" /><br />
<span style="color:red;font-weight:bold;">
<?php echo $form->error($loginForm, 'username')?>
<?php echo $form->error($loginForm, 'password')?>
<?php echo $form->error($loginForm, 'captcha')?>
</span>
<?php $this->endWidget();?>
<hr />
<h1>后台管理 / Index控制器 / index方法</h1>