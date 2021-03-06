<?php
define('FRESHRSS_VERSION', '0.7.1');
define('FRESHRSS_WEBSITE', 'http://freshrss.org');

// Constantes de chemins
define('FRESHRSS_PATH', dirname(__FILE__));

	define('PUBLIC_PATH', FRESHRSS_PATH . '/p');
		define('INDEX_PATH', PUBLIC_PATH . '/i');
		define('PUBLIC_RELATIVE', '..');

	define('DATA_PATH', FRESHRSS_PATH . '/data');
		define('LOG_PATH', DATA_PATH . '/log');
		define('CACHE_PATH', DATA_PATH . '/cache');

	define('LIB_PATH', FRESHRSS_PATH . '/lib');
		define('APP_PATH', FRESHRSS_PATH . '/app');

//define('TMP_PATH', sys_get_temp_dir());  // need more tests so...
define('TMP_PATH', DATA_PATH);  // ... we use DATA_PATH for the 0.7.1
