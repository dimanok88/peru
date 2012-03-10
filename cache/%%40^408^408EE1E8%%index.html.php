<?php /* Smarty version 2.6.25, created on 2012-03-10 22:56:41
         compiled from vamshop/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'vamshop/index.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>


<!-- Контейнер -->
<div id="container">

<!-- Шапка -->
<div id="header">
<div class="header-left">
<img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/logo.png" alt="<?php echo $this->_tpl_vars['store_name']; ?>
" />
</div>
<div class="header-right">
&nbsp;
</div>
<div class="clear"></div>
</div>

<!-- /Шапка -->

<div id="menu">
<ul>
<li<?php echo $this->_tpl_vars['1']; ?>
><a href="<?php echo $this->_tpl_vars['mainpage']; ?>
"><span><?php echo $this->_config[0]['vars']['text_mainpage']; ?>
</span></a></li>
<?php if ($this->_tpl_vars['account']): ?><?php if ($this->_supers['session']['customer_id']): ?>
<li<?php echo $this->_tpl_vars['2']; ?>
><a href="<?php echo $this->_tpl_vars['account']; ?>
"><span><?php echo $this->_config[0]['vars']['link_account']; ?>
</span></a></li>
<?php endif; ?><?php endif; ?>
<li<?php echo $this->_tpl_vars['3']; ?>
><a href="<?php echo $this->_tpl_vars['cart']; ?>
"><span><?php echo $this->_config[0]['vars']['link_cart']; ?>
</span></a></li>
<li<?php echo $this->_tpl_vars['4']; ?>
><a href="<?php echo $this->_tpl_vars['checkout']; ?>
"><span><?php echo $this->_config[0]['vars']['link_checkout']; ?>
</span></a></li>
<?php if ($this->_supers['session']['customer_id']): ?>
<li<?php echo $this->_tpl_vars['5']; ?>
><a href="<?php echo $this->_tpl_vars['logoff']; ?>
"><span><?php echo $this->_config[0]['vars']['link_logoff']; ?>
</span></a></li>
<?php else: ?>
<li<?php echo $this->_tpl_vars['6']; ?>
><a href="<?php echo $this->_tpl_vars['login']; ?>
"><span><?php echo $this->_config[0]['vars']['link_login']; ?>
</span></a></li>
<?php endif; ?>    
</ul>
</div>

<!-- Навигация -->
<div id="navigation">
<span><?php echo $this->_tpl_vars['navtrail']; ?>
</span>
</div>
<!-- /Навигация -->

<!-- Центр -->
<div id="wrapper">
<div id="content">

<?php echo $this->_tpl_vars['main_content']; ?>


</div>
</div>
<!-- /Центр -->

<!-- Левая колонка -->
<div id="left">

<?php echo $this->_tpl_vars['box_CATEGORIES']; ?>

<?php echo $this->_tpl_vars['box_FILTERS']; ?>

<?php echo $this->_tpl_vars['box_CONTENT']; ?>

<?php echo $this->_tpl_vars['box_INFORMATION']; ?>

<?php echo $this->_tpl_vars['box_ADD_QUICKIE']; ?>

<?php echo $this->_tpl_vars['box_LAST_VIEWED']; ?>

<?php echo $this->_tpl_vars['box_REVIEWS']; ?>

<?php echo $this->_tpl_vars['box_SEARCH']; ?>

<?php echo $this->_tpl_vars['box_SPECIALS']; ?>

<?php echo $this->_tpl_vars['box_FEATURED']; ?>

<?php echo $this->_tpl_vars['box_LATESTNEWS']; ?>

<?php echo $this->_tpl_vars['box_ARTICLES']; ?>

<?php echo $this->_tpl_vars['box_ARTICLESNEW']; ?>

<?php echo $this->_tpl_vars['box_AUTHORS']; ?>


</div>
<!-- /Левая колонка -->

<!-- Правая колонка -->
<div id="right">

<?php echo $this->_tpl_vars['box_CART']; ?>

<?php echo $this->_tpl_vars['box_LOGIN']; ?>

<?php echo $this->_tpl_vars['box_ADMIN']; ?>

<?php echo $this->_tpl_vars['box_DOWNLOADS']; ?>

<?php echo $this->_tpl_vars['box_AFFILIATE']; ?>

<?php echo $this->_tpl_vars['box_WHATSNEW']; ?>

<?php echo $this->_tpl_vars['box_NEWSLETTER']; ?>

<?php echo $this->_tpl_vars['box_BESTSELLERS']; ?>

<?php echo $this->_tpl_vars['box_INFOBOX']; ?>

<?php echo $this->_tpl_vars['box_CURRENCIES']; ?>

<?php echo $this->_tpl_vars['box_LANGUAGES']; ?>

<?php echo $this->_tpl_vars['box_MANUFACTURERS']; ?>

<?php echo $this->_tpl_vars['box_MANUFACTURERS_INFO']; ?>

<?php echo $this->_tpl_vars['box_FAQ']; ?>


</div>
<!-- /Правая колонка -->

<!-- Низ -->
<div id="footer">
<?php if ($this->_tpl_vars['BANNER']): ?>
<p>
<?php echo $this->_tpl_vars['BANNER']; ?>

</p>
<?php endif; ?>
<p>
<a href="vam_rss2_info.php"><img src="images/rss.png" alt="RSS" border="0" /></a>
</p>
</div>
<!-- /Низ -->

</div>
<!-- /Контейнер -->