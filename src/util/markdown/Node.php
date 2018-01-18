<?php
/**
 * Created by PhpStorm.
 * User: rterbraak
 * Date: 18-1-2018
 * Time: 21:09
 */

namespace nl\monkeylog\util\markdown;


class Node
{

    public $children;
    public $title;
    public $content;

    /**
     * Node constructor.
     * @param $title
     * @param $content
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getChildren() {
        return $this->children;
    }

    public function addChild($child) {
        $this->children[] = $child;
    }
}