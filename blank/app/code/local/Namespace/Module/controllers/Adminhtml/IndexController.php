<?php

class <Namespace>_<Module>_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
    public function postAction()
    {
        $post = $this->getRequest()->getPost();
        $this->_redirect('*/*');
    }
}