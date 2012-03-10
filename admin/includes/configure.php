<?php
/* --------------------------------------------------------------

  VaM Shop - open source ecommerce solution
  http://vamshop.ru
  http://vamshop.com

   Copyright (c) 2007 VaM Shop
  --------------------------------------------------------------
  based on:
  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   
  

  (c) 2002-2003 osCommerce (configure.php,v 1.14 2003/02/21); www.oscommerce.com
  (c) 2004 xt:Commerce (configure.php,v 1.13 2003/02/10); xt-commerce.com

  Released under the GNU General Public License
  --------------------------------------------------------------*/

// Define the webserver and path parameters
// * DIR_FS_* = Filesystem directories (local/physical)
// * DIR_WS_* = Webserver directories (virtual/URL)
  define('HTTP_SERVER', 'http://www.peru.dev'); // eg, http://localhost or - https://localhost should not be empty for productive servers
  define('HTTP_CATALOG_SERVER', 'http://www.peru.dev');
  define('HTTPS_CATALOG_SERVER', 'http://www.peru.dev');
  define('ENABLE_SSL_CATALOG', 'false'); // secure webserver for catalog module
  define('DIR_FS_DOCUMENT_ROOT', '/home/nike/web/peru/www/'); // where the pages are located on the server
  define('DIR_WS_ADMIN', '/admin/'); // absolute path required
  define('DIR_FS_ADMIN', '/home/nike/web/peru/www/admin/'); // absolute pate required
  define('DIR_WS_CATALOG', '/'); // absolute path required
  define('DIR_FS_CATALOG', '/home/nike/web/peru/www/'); // absolute path required
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_ORIGINAL_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/original_images/');
  define('DIR_FS_CATALOG_THUMBNAIL_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/thumbnail_images/');
  define('DIR_FS_CATALOG_INFO_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/info_images/');
  define('DIR_FS_CATALOG_POPUP_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/popup_images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_CATALOG_ORIGINAL_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/original_images/');
  define('DIR_WS_CATALOG_THUMBNAIL_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/thumbnail_images/');
  define('DIR_WS_CATALOG_INFO_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/info_images/');
  define('DIR_WS_CATALOG_POPUP_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/popup_images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_FS_CATALOG. 'lang/');
  define('DIR_FS_LANGUAGES', DIR_FS_CATALOG. 'lang/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_INC', DIR_FS_CATALOG . 'inc/');
  define('DIR_WS_FILEMANAGER', DIR_WS_MODULES . 'fckeditor/editor/filemanager/browser/default/');

  define('DIR_FS_FORUM_ROOT', '');
  define('DIR_FS_SITE_ROOT', '');
  define('VAM_COOKIE_NAME', 'VAMCookie');

  define('SESSION_WRITE_DIRECTORY', DIR_FS_CATALOG . 'tmp/');

// define our database connection
  define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '123');
  define('DB_DATABASE', 'peru');
  define('USE_PCONNECT', 'false'); // use persisstent connections?
  define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'

?>