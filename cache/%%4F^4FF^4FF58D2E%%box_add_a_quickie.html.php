<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_add_a_quickie.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_add_a_quickie.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<!-- Бокс быстрый заказ -->
<div id="boxAddQuickie">
<h5><?php echo $this->_config[0]['vars']['heading_add_a_quickie']; ?>
</h5>

<div id="boxAddQuickieContent">
<?php echo $this->_config[0]['vars']['text_quickie']; ?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p class="addquickieform"><?php echo $this->_tpl_vars['INPUT_FIELD']; ?>
</p>
<div class="ajaxAddQuickie" id="ajaxAddQuickie" style="text-align: left;"></div>
<?php echo $this->_tpl_vars['SUBMIT_BUTTON']; ?>

<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php echo '
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){

  jQuery("#quick_add_quickie").keyup(function(){
      var searchString = jQuery("#quick_add_quickie").val(); 
      jQuery.ajax({
      	url: "index_ajax1.php",             
      	dataType : "html",
      	type: "POST",
      	data: "q=includes/modules/ajax/ajaxAddQuickie.php&quickie="+searchString,
      	success: function(msg){jQuery("#ajaxAddQuickie").html(msg);}            
 });     
                           
                           
   });


})

'; ?>

</script>
</div>
</div>
<!-- /Бокс быстрый заказ -->