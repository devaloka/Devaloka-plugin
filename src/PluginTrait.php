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

    protected $textDomain;

    protected $domainPath;

    protected $locale;

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
     * @return string
     */
    public function getTextDomain()
    {
        return $this->textDomain;
    }

    /**
     * @return string
     */
    public function getDomainPath()
    {
        return $this->domainPath;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
