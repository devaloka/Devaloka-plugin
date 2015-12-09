<?php
/**
 * Plugin Interface
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Plugin;

/**
 * Interface PluginInterface
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
interface PluginInterface
{
    /**
     * Boots the plugin.
     */
    public function boot();

    /**
     * @return string
     */
    public function getDirectory();

    /**
     * @return string
     */
    public function getDirectoryUri();

    /**
     * @return string
     */
    public function getFile();

    /**
     * @return string
     */
    public function getFileUri();

    /**
     * @return string
     */
    public function getBasename();

    /**
     * @return string
     */
    public function getTextDomain();

    /**
     * @return string
     */
    public function getDomainPath();

    /**
     * @return string
     */
    public function getLocale();
}
