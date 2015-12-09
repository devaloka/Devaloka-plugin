<?php
/**
 * Activatable Plugin Interface
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2014 Whizark.
 * @license MIT
 */

namespace Devaloka\Plugin;

/**
 * Interface ActivatablePluginInterface
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
interface ActivatablePluginInterface extends PluginInterface
{
    public function register();

    /**
     * Activates the plugin.
     *
     * @param bool $networkWide Whether to activate the plugin for all sites in the network.
     */
    public function activate($networkWide = false);

    /**
     * Deactivates the plugin.
     *
     * @param bool $networkWide Whether to deactivate the plugin for all sites in the network.
     */
    public function deactivate($networkWide = true);
}
