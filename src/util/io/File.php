<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 17-1-2018
 * Time: 20:16
 */

namespace nl\monkeylog\util\io;


class File
{

    private $absoluteFileName;

    /**
     * File constructor.
     * @param $absoluteFileName
     */
    public function __construct($absoluteFileName)
    {
        $this->absoluteFileName = $absoluteFileName;
    }

    /**
     * Check if file exists
     * @return bool
     */
    public function exists() {
        return file_exists($this->absoluteFileName);
    }

    /**
     * Get absolute filename
     * @return string
     */
    public function getAbsoluteFileName() {
        return $this->absoluteFileName;
    }

    /**
     * Get basename from file
     * @return string
     */
    public function getFileName()
    {
        return pathinfo($this->absoluteFileName, PATHINFO_BASENAME);
    }

    /**
     * Get extension from file
     * @return string
     */
    public function getExtension() {
        return pathinfo($this->absoluteFileName, PATHINFO_EXTENSION);
    }

    /**
     * Check if file is directory
     * @return bool
     */
    public function isDirectory()
    {
        return is_dir($this->absoluteFileName);
    }
}