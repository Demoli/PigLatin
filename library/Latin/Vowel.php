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
class Latin_Vowel extends WordAbstract
{
    public function  interpret()
    {
        $split = explode('-',$this->_word);
        return $split[0];
    }
}
?>
