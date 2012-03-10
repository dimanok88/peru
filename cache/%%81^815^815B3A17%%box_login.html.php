<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_login.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<!-- Бокс вход -->
<div id="boxLogin">
<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b><b class="b5"></b></b>
<div class="boxheader">
<p>&nbsp;&raquo;&nbsp;<?php echo $this->_config[0]['vars']['heading_login']; ?>
</p>
</div>
<div class="boxcontent">

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p>
<?php echo $this->_config[0]['vars']['text_email']; ?>
:
</p>
<p class="loginform">
<?php echo $this->_tpl_vars['FIELD_EMAIL']; ?>

</p>
<p>
<?php echo $this->_config[0]['vars']['text_pwd']; ?>
:
</p>
<p class="loginform">
<?php echo $this->_tpl_vars['FIELD_PWD']; ?>

</p>
<p class="LoginContentCenter">
<?php echo $this->_tpl_vars['BUTTON']; ?>

</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<p class="LoginContentCenter">
<a href="<?php echo $this->_tpl_vars['LINK_NEW_ACCOUNT']; ?>
"><?php echo $this->_config[0]['vars']['text_register']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['LINK_LOST_PASSWORD']; ?>
"><?php echo $this->_config[0]['vars']['text_password_forgotten']; ?>
</a>
</p>

</div>
<b class="bottom"><b class="b5b"></b><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
</div>
<!-- /Бокс вход -->