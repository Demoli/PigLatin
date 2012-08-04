<?php
abstract class Parser_Abstract
{
    protected $_text;
    private $_vowels = 'aeiou';
    protected $_wordQueue;

    public function  __construct($text)
    {
        $this->_text = explode(' ',$text);
        $this->_wordQueue = new SplQueue();
    }

    protected function startsWith($word)
    {
        $matches = array();
        if(preg_match("/^[$this->_vowels]/", $word)) {
           return 'vowel';
        }
        elseif(preg_match("/[A-Za-z^$this->_vowels]+/", $word)) {
            return 'consonant';
        }
    }
}
