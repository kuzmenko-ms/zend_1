<?php
include("library/Zend/Form.php");
include("library/Zend/Form/Element/Text.php");
include("library/Zend/Form/Element/Password.php");
include("library/Zend/Form/Element/Submit.php");

class Application_Form_User extends Zend_Form
{
    public function init()
    {
        $this->setName('form_user');
        $username = new Zend_Form_Element_Text('username');
        $username->setLabel("User name")
                ->setRequired(true)
                ->addValidator('NotEmpty')
                ->addValidator('Alnum')
                ->addFilter('StringTrim')
                ->addFilter('StripTags');
                
        $password = new Zend_Form_Element_Password('password'); 
        $password->setLabel("Password")
                ->setRequired(true)
                ->addValidator('NotEmpty')  ;      
        $email = new Zend_Form_Element_Text('email');  
        $email->setLabel("Email")
              ->addValidator('regex', true, array('/^[a-z0-9]+@[a-z0-9]+\.[a-z0-9]{2,4}$/'))
              ->addValidator('NotEmpty');
        $submit = new Zend_Form_Element_submit('submit');  
        $submit->setLabel("Registration");
        $this->addElements(array($username,$password,$email,$submit));
    }
}
?>
