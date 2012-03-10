<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/module/main_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/module/main_content.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>

<?php echo $this->_tpl_vars['MODULE_error']; ?>

<p>
<?php echo $this->_tpl_vars['text']; ?>

</p>
<?php echo $this->_tpl_vars['MODULE_latest_news']; ?>

<?php echo $this->_tpl_vars['MODULE_featured_products']; ?>

<?php echo $this->_tpl_vars['MODULE_new_products']; ?>

<?php echo $this->_tpl_vars['MODULE_upcoming_products']; ?>