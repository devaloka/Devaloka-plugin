<?php
/**
 * Activatable Plugin Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 * @license GPL-2.0
 * @license GPL-3.0
 */

namespace Devaloka\Plugin;

/**
 * Trait ActivatablePluginTrait
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
trait ActivatablePluginTrait
{
    public function register()
    {
        register_activation_hook($this->getFile(), [$this, 'activate']);
        register_deactivation_hook($this->getFile(), [$this, 'deactivate']);
    }

    /**
     * Activates this plugin.
     *
     * @param bool $networkWide Whether to activate the plugin for all sites in the network.
     */
    public function activate($networkWide = false)
    {
    }

    /**
     * Deactivates this plugin.
     *
     * @param bool $networkWide Whether to deactivate the plugin for all sites in the network.
     */
    public function deactivate($networkWide = true)
    {
    }
}
