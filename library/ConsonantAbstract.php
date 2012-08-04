<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsonantAbstract
 *
 * @author Neil
 */
abstract class ConsonantAbstract extends WordAbstract {
    protected $_regex = '/\b(qu|[^\W0-9aeiou_]+)?([a-z]+)/i';
}
?>
