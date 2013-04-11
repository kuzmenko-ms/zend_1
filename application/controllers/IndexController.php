<?php
class IndexController extends Zend_Controller_Action {
    function indexAction() {
        $this->view->title = "Hello world's page";
        $this->view->header = "Hello, world!";
    }
}