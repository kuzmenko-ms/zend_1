<?php
    error_reporting(E_ALL && E_STRICT);
    set_include_path('.' . PATH_SEPARATOR . './library/Zend'
            . PATH_SEPARATOR . './application/models/'
            . PATH_SEPARATOR . get_include_path());
    //включаем в путь папки из нашего проекта
    //PATH_SEPARATOR используется для разделения папок в пути
    //для *nix систем - это ':', для win - ';'
    set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));
    include "Zend/Loader.php";
    Zend_Loader::loadClass('Zend_Controller_Front');

    //установка контроллеров
    $frontController = Zend_Controller_Front::getInstance();
    $frontController->throwExceptions(true);
    $frontController->setControllerDirectory('./application/controllers');

    //запускаем
    $frontController->dispatch();