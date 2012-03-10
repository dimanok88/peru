<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<!-- Бокс поиск -->
<div id="boxSearch">
<h5><a href="<?php echo $this->_tpl_vars['LINK_ADVANCED']; ?>
"><?php echo $this->_config[0]['vars']['heading_search']; ?>
</a></h5>

<div id="boxSearchContent">
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p class="searchboxform"><?php echo $this->_tpl_vars['INPUT_SEARCH']; ?>
</p>
<div class="ajaxQuickFind" id="ajaxQuickFind" style="text-align: left;"></div>
<?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>

<?php echo $this->_tpl_vars['FORM_END']; ?>

<script type="text/javascript">
<?php echo '
jQuery.noConflict();
jQuery(document).ready(function(){

  jQuery("#quick_find_keyword").keyup(function(){
      var searchString = jQuery("#quick_find_keyword").val(); 
      jQuery.ajax({
      	url: "index_ajax1.php",             
      	dataType : "html",
      	type: "POST",
      	data: "q=includes/modules/ajax/ajaxQuickFind.php&keywords="+searchString,
      	success: function(msg){jQuery("#ajaxQuickFind").html(msg);}            
 });     
                           
                           
   });


})

'; ?>

</script>
<p><a href="<?php echo $this->_tpl_vars['LINK_ADVANCED']; ?>
"><?php echo $this->_config[0]['vars']['text_advanced_search']; ?>
</a></p>
</div>
</div>
<!-- /Бокс поиск -->