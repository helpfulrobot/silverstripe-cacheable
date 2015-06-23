<?php
/**
 * 
 * @author Deviate Ltd 2014-2015 http://www.deviate.net.nz
 * @package silverstripe-cachable
 * 
 * Configure the module's storage:
 * 
 * The default is to use "file" for the cache store via {@link Zend_Cache_Backend_File}, 
 * but this can be overriden in YML config. See the README for more options.
 */

define('CACHEABLE_STORE_DIR_NAME', 'cacheable');
define('CACHEABLE_STORE_DIR_TEST', TEMP_FOLDER . DIRECTORY_SEPARATOR . 'cacheable_tests');
define('CACHEABLE_STORE_NAME', 'cacheablestore');
define('CACHEABLE_STORE_FOR', 'Cacheable');
define('CACHEABLE_STORE_TAG_DEFAULT', 'cacheable_tag_nav'); // Default Zend tag name for this cache 
define('CACHEABLE_STORE_TAG_DEFAULT_TEST', 'cacheable_tag_nav_test');
define('CACHEABLE_STORE_WEIGHT', 1000);
define('CACHEABLE_STORE_DIR', CacheableConfig::cache_dir_name());

CacheableConfig::configure();
SS_Cache::pick_backend(CACHEABLE_STORE_NAME, CACHEABLE_STORE_FOR, CACHEABLE_STORE_WEIGHT);
