<?php
/**
 * Translatable Plugin Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 * @license GPL-2.0
 * @license GPL-3.0
 */

namespace Devaloka\Plugin;

use Devaloka\Translation\TranslatableTrait;

/**
 * Trait TranslatablePluginTrait
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
trait TranslatablePluginTrait
{
    use TranslatableTrait;

    public function loadTextDomain($domain = null, $path = null)
    {
        /** @var PluginInterface $this */

        $domain = ($domain !== null) ? $domain : $this->getTextDomain();
        $path   = ($path !== null) ? $path : $this->getDomainPath();

        $file        = wp_normalize_path($this->getFile());
        $muPluginDir = wp_normalize_path(WPMU_PLUGIN_DIR);

        if (strpos($file, $muPluginDir) === 0) {
            $path = basename($this->getDirectory()) . $path;

            return load_muplugin_textdomain($domain, $path);
        }

        return load_plugin_textdomain($domain, false, $path);
    }

    public function loadLocaleFile($locale = null, $path = null)
    {
        /** @var PluginInterface $this */

        $locale = ($locale !== null) ? $locale : $this->getLocale();
        $path   = ($path !== null) ? $path : $this->getDomainPath();

        $file        = wp_normalize_path($this->getFile());
        $muPluginDir = wp_normalize_path(WPMU_PLUGIN_DIR);

        if (strpos($file, $muPluginDir) === 0) {
            $path = basename($this->getDirectory()) . $path;
        }

        $localeFile = $path . '/' . $locale . '.php';

        if (validate_file($localeFile) === 0 && is_readable($localeFile)) {
            require_once $localeFile;
        }
    }
}
