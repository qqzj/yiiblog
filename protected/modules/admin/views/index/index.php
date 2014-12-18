<?php
/* @var $this DefaultController */
?>
<?php $form = $this->beginWidget('CActiveForm');?>
用户名:<?php echo $form->textField($loginForm, 'username', array('id'=>'user'));?><br />
密&nbsp;&nbsp;&nbsp;码:<?php echo $form->passwordField($loginForm, 'password', array('id'=>'pass'));?><br />
验证码:<?php echo $form->textField($loginForm, 'captcha', array('id'=>'captcha'));?><?php $this->widget('CCaptcha');?><br />
记住我:<?php echo $form->checkBox($loginForm, 'rememberMe', array('id'=>'remember'));?><br />
<input type="submit" value="登陆" /><hr />
<?php $this->endWidget();?>
<h1>后台管理 / Index控制器 / index方法</h1>