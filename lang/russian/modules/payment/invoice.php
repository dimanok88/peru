<?php
/* -----------------------------------------------------------------------------------------
   $Id: invoice.php 1101 2007/02/07 13:24:46 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2004	 xt:Commerce (invoice.php,v 1.4 2003/08/13); xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', 'Invoice');
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Invoice');
define('MODULE_PAYMENT_INVOICE_TEXT_INFO','');
define('MODULE_PAYMENT_INVOICE_STATUS_TITLE' , 'Enable Invoices Module');
define('MODULE_PAYMENT_INVOICE_STATUS_DESC' , 'Do you want to accept Invoices as payments?');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_TITLE' , 'Set Order Status');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_DESC' , 'Set the status of orders made with this payment module to this value');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_TITLE' , 'Sort order of display.');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_DESC' , 'Sort order of display. Lowest is displayed first.');
define('MODULE_PAYMENT_INVOICE_ZONE_TITLE' , 'Payment Zone');
define('MODULE_PAYMENT_INVOICE_ZONE_DESC' , 'If a zone is selected, only enable this payment method for that zone.');
define('MODULE_PAYMENT_INVOICE_ALLOWED_TITLE' , 'Allowed zones');
define('MODULE_PAYMENT_INVOICE_ALLOWED_DESC' , 'Please enter the zones <b>separately</b> which should be allowed to use this modul (e. g. AT,DE (leave empty if you want to allow all zones))');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_TITLE' , 'Minimum Orders');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_DESC' , 'Minimum orders for a Customer to view this Option.');
?>