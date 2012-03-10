<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_newsletter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_newsletter.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<!-- Бокс рассылки -->
<div id="boxNewsletter">
<h5><?php echo $this->_config[0]['vars']['heading_guestnewsletter']; ?>
</h5>

<div id="boxNewsletterContent">
<?php echo $this->_config[0]['vars']['text_email']; ?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p class="newsletterform"><?php echo $this->_tpl_vars['FIELD_EMAIL']; ?>
</p>
<?php echo $this->_tpl_vars['BUTTON']; ?>

<?php echo $this->_tpl_vars['FORM_END']; ?>

</div>
</div>
<!-- /Бокс рассылки -->