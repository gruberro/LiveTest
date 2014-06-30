<?php

error_reporting(E_ERROR | E_PARSE);

include_once __DIR__.'/lib/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$classLoader = new \Symfony\Component\ClassLoader\UniversalClassLoader();

$classLoader->registerNamespace('Doctrine', __DIR__.DIRECTORY_SEPARATOR.'lib');
$classLoader->registerNamespace('Symfony' , __DIR__.DIRECTORY_SEPARATOR.'lib');
$classLoader->registerNamespace('Zend'    , __DIR__.DIRECTORY_SEPARATOR.'lib');
$classLoader->registerNamespace('Base'    , __DIR__.DIRECTORY_SEPARATOR.'lib');
$classLoader->registerNamespace('Annovent', __DIR__.DIRECTORY_SEPARATOR.'lib');
$classLoader->registerNamespace('phmLabs' , __DIR__.DIRECTORY_SEPARATOR.'lib');

$classLoader->registerNamespace('LiveTest', __DIR__);

$classLoader->register();
