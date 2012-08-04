<?php
class Parser_EnglishToLatin extends Parser_Abstract
{
    public function parse()
    {
        foreach($this->_text as $word) {
            
            if($this->startsWith($word) == 'vowel') {
                $this->_wordQueue->enqueue(new English_Vowel($word));
            }
            else {
                $this->_wordQueue->enqueue(new English_Consonant($word));
            }
        }

        return $this->_wordQueue;
    }
}
?>
