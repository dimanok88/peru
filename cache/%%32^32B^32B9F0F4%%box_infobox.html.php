<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_infobox.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_infobox.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<!-- Бокс информация о группе -->
<div id="boxGroupInfo">
<h5><?php echo $this->_config[0]['vars']['heading_customer_group_info']; ?>
</h5>

<div id="boxGroupInfoContent">
<?php echo $this->_tpl_vars['BOX_CONTENT']; ?>

</div>

</div>
<!-- /Бокс информация о группе -->