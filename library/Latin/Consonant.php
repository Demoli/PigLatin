<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VowelInterpter
 *
 * @author Neil
 */
class Latin_Consonant extends ConsonantAbstract
{
    public function  interpret()
    {
        preg_match($this->_regex,
                    array_pop(explode('-',$this->_word))
                    ,$matches);
        return $matches[1] . array_shift(explode('-',$this->_word));
    }
}
?>
