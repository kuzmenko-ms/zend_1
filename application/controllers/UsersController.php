<?php
//include("application/models/User.php");
include("application/forms/User.php");



class UsersController extends Zend_Controller_Action
{
    function indexAction() 
    {
        $this->view->title = "jkfds";
        $this->view->header = "Hello, world!";
    }

     function addAction() 
    {
        $this->view->title = "sdf";
        $this->view->header = "Hello, world!";
        $form = new Application_Form_User();
        if($this->getRequest()->isPost()){
            if($form->isValid($this->getRequest()->getPost())){
               // $user=new Model_User();
               // $user->fill($form->getValues());
               // $user->created=date('Y-m-d H:i:s');
               // $user->save();
                
            }
        }
        $this->view->form = $form;
        
        
    }
    
    function deleteAction() 
    {
        $this->view->title = "sdf";
        $this->view->header = "Hello, world!";
    }
    
    function editAction() 
    {
        $this->view->title = "sdf";
        $this->view->header = "Hello, world!";
    }
    
    function viewAction() 
    {
        $this->view->title = "sdfdfs";
        $this->view->header = "Hello, world!";
    }
}