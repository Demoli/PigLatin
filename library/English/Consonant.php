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
class English_Consonant extends ConsonantAbstract
{
    public function  interpret()
    {
        preg_match($this->_regex, $this->_word,$matches);
        return strtolower(($matches[2] . '-' . $matches[1] . 'ay'));
    }
}
?>
