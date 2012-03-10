<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/boxes/box_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/boxes/box_cart.html', 1, false),array('modifier', 'vam_truncate', 'vamshop/boxes/box_cart.html', 21, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>

<?php if ($this->_tpl_vars['deny_cart'] != 'true'): ?>
<!-- Бокс корзина -->
<script type="text/javascript" src="jscript/jscript_ajax_cart.js"></script>
<div id="divShoppingCart">
<div id="boxCart">
<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b><b class="b5"></b></b>
<div class="boxheader">
<p>&nbsp;&raquo;&nbsp;<a href="<?php echo $this->_tpl_vars['LINK_CART']; ?>
"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</a></p>
</div>
<div class="boxcontent">

<?php if ($this->_tpl_vars['empty'] == 'false'): ?>
<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_data']):
        $this->_foreach['aussen']['iteration']++;
?>

<?php if (@AJAX_CART == 'true'): ?>
<form class="cart_quantity" action="<?php echo $this->_tpl_vars['products_data']['LINK']; ?>
/action/update_product" method="post" onsubmit="doDelProduct(this); return false;"><?php echo $this->_tpl_vars['products_data']['PRODUCTS_QTY']; ?>

<?php endif; ?>

<?php echo $this->_tpl_vars['products_data']['QTY']; ?>
&nbsp;x&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['products_data']['LINK']; ?>
" title="<?php echo $this->_tpl_vars['products_data']['NAME']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['products_data']['NAME'])) ? $this->_run_mod_handler('vam_truncate', true, $_tmp, @MAX_DISPLAY_CART, "...", true) : smarty_modifier_vam_truncate($_tmp, @MAX_DISPLAY_CART, "...", true)); ?>
</a>&nbsp;
<?php if (@AJAX_CART == 'true'): ?>
<input type="image" src="images/delete.gif" title="<?php echo $this->_config[0]['vars']['text_delete']; ?>
" /></form>
<?php endif; ?>
<br />
<?php if ($this->_tpl_vars['products_data']['ATTRIBUTES'] != ''): ?> 
<?php $_from = $this->_tpl_vars['products_data']['ATTRIBUTES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_data'] => $this->_tpl_vars['item_data']):
?> 
<?php echo $this->_tpl_vars['item_data']['NAME']; ?>
: <?php echo $this->_tpl_vars['item_data']['VALUE']; ?>
<br />
<?php endforeach; endif; unset($_from); ?> 
<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['DISCOUNT']): ?>
<p class="CartContentRight">
<?php echo $this->_config[0]['vars']['text_discount']; ?>
&nbsp;<?php echo $this->_tpl_vars['DISCOUNT']; ?>

</p>
<?php endif; ?>
<p class="CartContentRight">
<?php echo $this->_tpl_vars['UST']; ?>
<?php echo $this->_config[0]['vars']['text_total']; ?>
&nbsp;<span><?php echo $this->_tpl_vars['TOTAL']; ?>
</span>
</p>
<p class="CartContentRight">
<?php if ($this->_tpl_vars['SHIPPING_INFO']): ?><?php echo $this->_tpl_vars['SHIPPING_INFO']; ?>
<?php endif; ?>
</p>
<p class="CartContentCenter">
<a href="<?php echo $this->_tpl_vars['LINK_CHECKOUT']; ?>
"><?php echo $this->_config[0]['vars']['text_checkout']; ?>
</a>
</p>
<?php else: ?> <!-- Пустая корзина --> 
<p>
<?php echo $this->_config[0]['vars']['text_empty_cart']; ?>

</p>
<?php endif; ?>

</div>
<b class="bottom"><b class="b5b"></b><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
</div>
</div>
<!-- /Бокс корзина -->
<?php endif; ?>