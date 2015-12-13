<?php
/**
 * Plugin Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Plugin;

/**
 * Trait PluginTrait
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
trait PluginTrait
{
    protected $directory;

    protected $directoryUri;

    protected $file;

    protected $fileUri;

    protected $baseName;

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function getDirectoryUri()
    {
        return $this->directoryUri;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getFileUri()
    {
        return $this->fileUri;
    }

    /**
     * @return string
     */
    public function getBaseName()
    {
        return $this->baseName;
    }

    /**
     * @deprecated 0.6.0 Moved to TranslatableTrait.
     * @see \Devaloka\Translation\TranslatableTrait
     *
     * @return string
     */
    public function getTextDomain()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getTextDomain()'
                )
            );
        }
    }

    /**
     * @deprecated 0.6.0 Moved to TranslatableTrait.
     * @see \Devaloka\Translation\TranslatableTrait
     *
     * @return string
     */
    public function getDomainPath()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getDomainPath()'
                )
            );
        }
    }

    /**
     * @deprecated 0.6.0 Moved to TranslatableTrait.
     * @see \Devaloka\Translation\TranslatableTrait
     *
     * @return string
     */
    public function getLocale()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getLocale()'
                )
            );
        }
    }
}
