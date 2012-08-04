<?php
class Parser_LatinToEnglish extends Parser_Abstract
{
    public function parse()
    {
        foreach($this->_text as $word) {
            
            if($this->startsWith(array_pop(explode('-',$word))) == 'vowel') {
                $this->_wordQueue->enqueue(new Latin_Vowel($word));
            }
            else {
                $this->_wordQueue->enqueue(new Latin_Consonant($word));
            }
        }

        return $this->_wordQueue;
    }
}
?>
