<?php
/* --------------------------------------------------------------
   $Id: banner_infobox.php 899 2007-02-08 12:28:21 VaM $   

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_infobox.php,v 1.2 2002/05/09); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_infobox.php,v 1.5 2003/08/18); www.nextcommerce.org
   (c) 2004 xt:Commerce (banner_infobox.php,v 1.5 2003/08/18); xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

  require(DIR_WS_CLASSES . 'phplot.php');

  $stats = array();
  $banner_stats_query = vam_db_query("select dayofmonth(banners_history_date) as name, banners_shown as value, banners_clicked as dvalue from " . TABLE_BANNERS_HISTORY . " where banners_id = '" . $banner_id . "' and to_days(now()) - to_days(banners_history_date) < " . $days . " order by banners_history_date");
  while ($banner_stats = vam_db_fetch_array($banner_stats_query)) {
    $stats[] = array($banner_stats['name'], $banner_stats['value'], $banner_stats['dvalue']);
  }

  if (sizeof($stats) < 1) $stats = array(array(date('j'), 0, 0));

  $graph = new PHPlot(200, 220, 'images/graphs/banner_infobox-' . $banner_id . '.' . $banner_extension);

  $graph->SetFileFormat($banner_extension);
  $graph->SetIsInline(1);
  $graph->SetPrintImage(0);

  $graph->draw_vert_ticks = 0;
  $graph->SetSkipBottomTick(1);
  $graph->SetDrawXDataLabels(0);
  $graph->SetDrawYGrid(0);
  $graph->SetPlotType('bars');
  $graph->SetDrawDataLabels(1);
  $graph->SetLabelScalePosition(1);
  $graph->SetMarginsPixels(15,15,15,30);

  $graph->SetTitleFontSize('4');
  $graph->SetTitle('3 Day Statistics');

  $graph->SetDataValues($stats);
  $graph->SetDataColors(array('blue','red'),array('blue', 'red'));

  $graph->DrawGraph();

  $graph->PrintImage();
?>