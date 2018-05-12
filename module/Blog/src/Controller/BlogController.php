<?php

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Controlador do Blog
 * @package Blog\Controller
 * @author Rafael Franco <rafael@joyaweb.com.br>
 */
class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}