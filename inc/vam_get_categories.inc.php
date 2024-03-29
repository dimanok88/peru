<?php
/* -----------------------------------------------------------------------------------------
   $Id: vam_get_categories.inc.php 1009 2007-02-07 10:51:57 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(general.php,v 1.225 2003/05/29); www.oscommerce.com
   (c) 2003	 nextcommerce (vam_get_categories.inc.php,v 1.3 2003/08/13); www.nextcommerce.org 
   (c) 2004 xt:Commerce (vam_get_categories.inc.php,v 1.3 2004/08/25); xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   
  function vam_get_categories($categories_array = '', $parent_id = '0', $indent = '') {

    $parent_id = vam_db_prepare_input($parent_id);

    if (!is_array($categories_array)) $categories_array = array();

    $categories_query = "select
                                      c.categories_id,
                                      cd.categories_name
                                      from " . TABLE_CATEGORIES . " c,
                                       " . TABLE_CATEGORIES_DESCRIPTION . " cd
                                       where parent_id = '" . vam_db_input($parent_id) . "'
                                       and c.categories_id = cd.categories_id
                                       and c.categories_status != 0
                                       and cd.language_id = '" . $_SESSION['languages_id'] . "'
                                       order by sort_order, cd.categories_name";

    $categories_query  = vamDBquery($categories_query);

    while ($categories = vam_db_fetch_array($categories_query,true)) {
      $categories_array[] = array('id' => $categories['categories_id'],
                                  'text' => $indent . $categories['categories_name']);

      if ($categories['categories_id'] != $parent_id) {
        $categories_array = vam_get_categories($categories_array, $categories['categories_id'], $indent . '&nbsp;&nbsp;');
      }
    }

    return $categories_array;
  }
 ?>