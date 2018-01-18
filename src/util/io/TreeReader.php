<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 17-1-2018
 * Time: 20:05
 */

namespace nl\monkeylog\util\io;


class TreeReader
{
    private static $ignoreSpecials = ['.', '..'];

    /**
     * @param string $dir
     * @return array File
     * @throws \Exception
     */
    public static function readFolder($dir) {

        if(substr($dir, -1) !== DIRECTORY_SEPARATOR) {
            $dir .= DIRECTORY_SEPARATOR;
        }

        $rawFiles = scandir($dir);
        $files = [];

        if($rawFiles === FALSE) {
            throw new \Exception("Directory is not readable");
        }

        foreach ($rawFiles as $rawFile) {
            if(!in_array($rawFile, static::$ignoreSpecials)) {
                $files[] = new File($dir . $rawFile);
            }
        }

        return $files;
    }
}