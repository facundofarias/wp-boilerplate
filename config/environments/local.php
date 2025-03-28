<?php

/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

use function Env\env;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG'));
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', true);
define('WP_DEVELOPMENT_MODE', 'theme');

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', true);

Config::define('SMTP_HOST', env('SMTP_HOST') ?? null);
Config::define('SMTP_AUTH', env('SMTP_AUTH') ?? null);
Config::define('SMTP_PORT', env('SMTP_PORT') ?? null);
Config::define('SMTP_USERNAME', env('SMTP_USERNAME') ?? null);
Config::define('SMTP_PASSWORD', env('SMTP_PASSWORD') ?? null);
