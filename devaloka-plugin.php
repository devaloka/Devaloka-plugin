<?php
/*
Plugin Name: Devaloka Plugin
Description: Provides Interfaces, Traits, and Classes for WordPress Plugin
Version: 0.6.2
Author: Whizark
Author URI: http://whizark.com
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: devaloka-plugin
Domain Path: /languages
Network: true
*/

if (!defined('ABSPATH')) {
    exit;
}

/** @var Devaloka\Devaloka $devaloka */
call_user_func(
    function () use ($devaloka) {
        $container = $devaloka->getContainer();

        /** @var Composer\Autoload\ClassLoader $loader */
        $loader = $container->get('loader');

        $loader->addPsr4('Devaloka\\Plugin\\', __DIR__ . '/src/', true);
    }
);
