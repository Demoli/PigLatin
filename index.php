<?php

define('APPLICATION_PATH', dirname(__FILE__));
error_reporting(E_ALL);
ini_set('display_errors', 'On');

set_include_path(
    get_include_path()
    . PATH_SEPARATOR .  APPLICATION_PATH . '/library/'
);

function __autoload($className)
{
    $classFile = str_replace('_', '/', $className) . '.php';
    
    require_once $classFile;
}

$request = new Request();

if($request->isPostRequest()) {

    $translator = new Translator(
        $request->getPostParam('text'),
        $request->getPostParam('language'
    ));

    $translation = $translator->parse();
}

$defaultInput = 'The quick brown fox jumps over the lazy dog';

require 'views/index.phtml';