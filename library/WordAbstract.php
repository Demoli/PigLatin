<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WordAbstract
 *
 * @author Neil
 */
abstract class WordAbstract implements IIntepreter
{
    protected $_word;

    public function  __construct($word)
    {
        $this->_word = $word;
    }
}
?>
