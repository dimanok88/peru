<?php
   /* -----------------------------------------------------------------------------------------
   $Id: validcategories.php 1316 2007-02-08 11:13:01Z VaM $   

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project (earlier name of osCommerce)
   (c) 2002-2003 osCommerce (validcategories.php,v 0.01 2002/08/17); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contribution:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org


   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

require('includes/application_top.php');


?>
<html>
<head>
<title>Valid Categories/Products List</title>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<head>
<body>
<table width="550" cellspacing="1">
<tr>
<td class="pageHeading" colspan="3">
<?php echo TEXT_VALID_CATEGORIES_LIST; ?>
</td>
</tr>
<?
    echo "<tr><th class=\"dataTableHeadingContent\">" . TEXT_VALID_CATEGORIES_ID . "</th><th class=\"dataTableHeadingContent\">" . TEXT_VALID_CATEGORIES_NAME . "</th></tr><tr>";
    $result = vam_db_query("SELECT * FROM ".TABLE_CATEGORIES." c, ".TABLE_CATEGORIES_DESCRIPTION." cd WHERE c.categories_id = cd.categories_id and cd.language_id = '" . $_SESSION['languages_id'] . "' ORDER BY c.categories_id");
    if ($row = vam_db_fetch_array($result)) {
        do {
            echo "<td class=\"dataTableHeadingContent\">".$row["categories_id"]."</td>\n";
            echo "<td class=\"dataTableHeadingContent\">".$row["categories_name"]."</td>\n";
            echo "</tr>\n";
        }
        while($row = vam_db_fetch_array($result));
    }
    echo "</table>\n";
?>
<br>
<table width="550" border="0" cellspacing="1">
<tr>
<td align=middle><span class="button"><button type="button" value="Close Window" onClick="window.close()">Close Window</button></span></td>
</tr></table>
</body>
</html>