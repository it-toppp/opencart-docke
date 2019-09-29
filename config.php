<?php
// HTTP
define('HTTP_SERVER', 'http://srv0.pp.ua/');
define('HTTP_CATALOG', 'http://srv0.pp.ua/');

// HTTPS
define('HTTPS_SERVER', 'https://srv0.pp.ua/');
define('HTTPS_CATALOG', 'https://srv0.pp.ua/');


// DIR
define('DIR_APPLICATION', '/var/www/catalog/');
define('DIR_SYSTEM', '/var/www/system/');
define('DIR_IMAGE', '/var/www/image/');
define('DIR_LANGUAGE', '/var/www/catalog/language/');
define('DIR_TEMPLATE', '/var/www/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/system/config/');
define('DIR_CACHE', '/var/www/system/storage/cache/');
define('DIR_DOWNLOAD', '/var/www/system/storage/download/');
define('DIR_LOGS', '/var/www/system/storage/logs/');
define('DIR_MODIFICATION', '/var/www/system/storage/modification/');
define('DIR_UPLOAD', '/var/www/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mariadb');
define('DB_USERNAME', 'admin_n1gsm');
define('DB_PASSWORD', 'gyFeMNU6FK');
define('DB_DATABASE', 'admin_n1gsm');
define('DB_PORT', '3306');
define('DB_PREFIX', '');

define('beanstalkd_host', 'beanstalkd');

define('COUNTRY', 'RUSSIA');
define('elastic_search_index', 'n1gsm-shop');
define('WRITE_SYSTEM_LOGS',1);

define('CACHE_HOSTNAME', 'redis');
define('CACHE_PORT', '6379');
define('CACHE_PREFIX', 'redis_');