<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 18-1-2018
 * Time: 21:22
 */

namespace nl\monkeylog\util\markdown;


class TreeReaderTest extends \PHPUnit_Framework_TestCase
{

    public function testReadTree()
    {

        $dir = __DIR__ . '/../../../../example/markdown_content';

        /** @var Node $nodes */
        $nodes = TreeReader::readRecursive($dir,2);


//        var_dump($nodes);

        echo json_encode($nodes);
        $this->assertEquals(3, count($nodes->getChildren()));

    }
}
