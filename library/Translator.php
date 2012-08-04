<?php
class Translator
{
    private $_text;
    private $_language;

    public function __construct($text,$fromLang)
    {
        $this->_text = trim($text);
        $this->_language = $fromLang;
    }

    public function parse()
    {
        switch($this->_language) {
            case 'en':
                $parser = new Parser_EnglishToLatin($this->_text);
                $wordList =  $parser->parse();
             break;
             case 'pl':
                 $parser = new Parser_LatinToEnglish($this->_text);
                 $wordList = $parser->parse();
        }

        $output = '';
        
        foreach($wordList as $word) {
            $output .= $word->interpret() . ' ';
        }

        return $output;
    }

    public function translate()
    {
        
    }
}