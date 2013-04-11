<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

protected function _initAutoload() {
        $this->bootstrap("frontController");
        $front = $this->frontController;

        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->setFallbackAutoloader(true);

        $modules = $front->getControllerDirectory();
        $default = $front->getDefaultModule();

        foreach (array_keys($modules) as $module) {
            if ($module === $default) {
                continue;
            }
        }
        $autoloader->pushAutoloader(new Zend_Application_Module_Autoloader(array(
             "namespace" => ucwords($module),
             "basePath" => $front->getModuleDirectory($module),
         )));
        return $autoloader;
    }
}

