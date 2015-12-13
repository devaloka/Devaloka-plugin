<?php
/**
 * Abstract Plugin
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2014 Whizark.
 * @license MIT
 * @license GPL-2.0
 * @license GPL-3.0
 */

namespace Devaloka\Plugin;

/**
 * Class AbstractPlugin
 *
 * @package Devaloka\Plugin
 */
abstract class AbstractPlugin implements PluginInterface
{
    use PluginTrait;

    /**
     * Constructor.
     *
     * @param string $file The absolute path to the plugin's file.
     */
    public function __construct($file)
    {
        require_once ABSPATH . '/wp-admin/includes/plugin.php';

        $data = get_plugin_data($file, false, false);

        // /<path>/<wp-content>/<(mu-)plugins>/<plugin>
        $this->directory = dirname($file);

        // http://example.com/<wp-content>/<(mu-)plugins>/<plugin>
        $this->directoryUri = plugins_url('', $file);

        // /<path>/<wp-content>/<(mu-)plugins>/<plugin>/<plugin>.php
        $this->file = $file;

        // http://<example.com>/<wp-content>/<(mu-)plugins>/<plugin>/<plugin>.php
        $this->fileUri = $this->directoryUri . '/' . basename($file);

        // <plugin>/<plugin>.php
        $this->baseName = plugin_basename($file);

        if ($this instanceof TranslatablePluginInterface) {
            // <plugin>
            $textDomain = ($data['TextDomain'] !== '') ? $data['TextDomain'] : basename($this->directory);

            // </languages>
            $domainPath = ($data['DomainPath'] !== '') ? $data['DomainPath'] : '/languages';

            // <locale>
            $locale = get_locale();

            $this->setTextDomain($textDomain);
            $this->setDomainPath($domainPath);
            $this->setLocale($locale);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function boot()
    {
    }
}
