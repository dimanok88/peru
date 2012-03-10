<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_content.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>

<!-- Бокс контент -->
<div id="boxContent">
<h5><?php echo $this->_config[0]['vars']['heading_content']; ?>
</h5>

<div id="boxContentContent">
<?php if (@STORE_TELEPHONE): ?>
<p>
<?php echo $this->_config[0]['vars']['text_phone']; ?>
 <?php echo @STORE_TELEPHONE; ?>

</p>
<?php endif; ?>
<?php if (@STORE_ICQ): ?>
<p>
<?php echo $this->_config[0]['vars']['text_icq']; ?>
 <?php echo @STORE_ICQ; ?>

</p>
<?php endif; ?>
<?php if (@STORE_SKYPE): ?>
<p>
<?php echo $this->_config[0]['vars']['text_skype']; ?>
 <?php echo @STORE_SKYPE; ?>

</p>
<?php endif; ?>
<ul>
<?php echo $this->_tpl_vars['BOX_CONTENT']; ?>

</ul>
</div>

</div>
<!-- /Бокс контент -->