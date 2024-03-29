<?php
/* -----------------------------------------------------------------------------------------
   $Id: webtopay.php 998 2008/12/07 13:24:46 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2004	 xt:Commerce (webmoney.php,v 1.4 2003/08/13); xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_WEBTOPAY_TEXT_TITLE', 'Оплата кредитной карточкой');
  define('MODULE_PAYMENT_WEBTOPAY_TEXT_PUBLIC_TITLE', 'Оплата кредитной карточкой');
  define('MODULE_PAYMENT_WEBTOPAY_TEXT_DESCRIPTION', 'После нажатия кнопки Подтвердить заказ, Вы перейдёте на сайт платёжной системы, на которой Вас попросят указать информацию о кредитной карточке. Все данные передаются по защищённому протоколу SSL, т.е. безопасность Вашей информации гарантируется.<br />
<br />
В случае, если информация о карточке введена правильно и карточка соответствует требованиям безопасности платёжной системы, платёж будет проведён, Вы вернётесь в магазин и заказ будет оформлен. Если товар виртуальный, Вы сразу сможете загрузить заказанный товар.<br />');

define('MODULE_PAYMENT_WEBTOPAY_STATUS_TITLE' , 'Разрешить модуль WebToPay');
define('MODULE_PAYMENT_WEBTOPAY_STATUS_DESC' , 'Вы хотите разрешить использование модуля при оформлении заказов?');
define('MODULE_PAYMENT_WEBTOPAY_ALLOWED_TITLE' , 'Разрешённые страны');
define('MODULE_PAYMENT_WEBTOPAY_ALLOWED_DESC' , 'Укажите коды стран, для которых будет доступен данный модуль (например RU,DE (оставьте поле пустым, если хотите что б модуль был доступен покупателям из любых стран))');
define('MODULE_PAYMENT_WEBTOPAY_ID_TITLE' , 'ID номер магазина в WebToPay');
define('MODULE_PAYMENT_WEBTOPAY_ID_DESC' , 'Укажите id номер Вашего магазина.');
define('MODULE_PAYMENT_WEBTOPAY_SORT_ORDER_TITLE' , 'Порядок сортировки');
define('MODULE_PAYMENT_WEBTOPAY_SORT_ORDER_DESC' , 'Порядок сортировки модуля.');
define('MODULE_PAYMENT_WEBTOPAY_ZONE_TITLE' , 'Зона');
define('MODULE_PAYMENT_WEBTOPAY_ZONE_DESC' , 'Если выбрана зона, то данный модуль оплаты будет виден только покупателям из выбранной зоны.');
define('MODULE_PAYMENT_WEBTOPAY_PREPARE_ORDER_STATUS_ID_TITLE' , 'Укажите статус заказа, ожидающий оплаты');
define('MODULE_PAYMENT_WEBTOPAY_PREPARE_ORDER_STATUS_ID_DESC' , 'Укажите статус заказа, ожидающий оплаты.');
define('MODULE_PAYMENT_WEBTOPAY_ORDER_STATUS_ID_TITLE' , 'Укажите оплаченный статус заказа');
define('MODULE_PAYMENT_WEBTOPAY_ORDER_STATUS_ID_DESC' , 'Укажите оплаченный статус заказа.');
  
?>