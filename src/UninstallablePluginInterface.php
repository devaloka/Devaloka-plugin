<?php
/**
 * Uninstallable Plugin Interface
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2014 Whizark.
 * @license MIT
 */

namespace Devaloka\Plugin;

/**
 * Interface UninstallablePluginInterface
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
interface UninstallablePluginInterface extends PluginInterface
{
    public function uninstall();
}
