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
class English_Vowel extends WordAbstract
{
    public function  interpret()
    {
        return strtolower($this->_word . '-ay');
    }
}
?>
