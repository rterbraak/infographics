<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 18-1-2018
 * Time: 21:06
 */

namespace nl\monkeylog\util\markdown;


use nl\monkeylog\util\io\File;

class TreeReader
{

    /**
     * @param $dir
     * @param int $level
     * @return Node
     * @throws \Exception
     */
    public static function readRecursive($dir, $level=0) {

        if($level < 1) {
            return null;
        }

        $files = \nl\monkeylog\util\io\TreeReader::readFolder($dir);
        $fileList= new Node($dir, "");
        /** @var File $file */
        foreach($files as $file) {

            if($file->isDirectory()) {
                $fileList->addChild(self::readRecursive($file->getAbsoluteFileName(), $level-1));
            }
            elseif ($file->getExtension() === "md") {
                $fileList->addChild(new Node($file->getFileName(), $file->getAbsoluteFileName()));
            }
        }

        return $fileList;
    }
}