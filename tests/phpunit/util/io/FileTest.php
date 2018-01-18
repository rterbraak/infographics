<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 17-1-2018
 * Time: 20:32
 */

namespace nl\monkeylog\util\io;


use Prophecy\Exception\Exception;

class FileTest extends \PHPUnit_Framework_TestCase
{

    private $testFile;
    private $testDir;

    public function setUp()
    {
        $random = uniqid();

        $this->testDir =sys_get_temp_dir() . '/' . $random;

        $this->testFile = sys_get_temp_dir() . '/' . $random . '.abc.txt';
        mkdir($this->testDir);
        touch($this->testFile);
    }


    public function testExists()
    {
//        $this->expectException(\Exception::class);
        $file = new File("idontexists.txt");
        $this->assertFalse($file->exists());

    }

    public function testGetAbsoluteFileName()
    {

    }

    public function testGetFileName()
    {

    }

    public function testGetExtension()
    {

    }

    public function testIsDirectory()
    {

    }
}
