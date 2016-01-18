<?php

namespace jokari4242\EasyPostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('jokari4242EasyPostBundle:Default:index.html.twig', array('name' => $name));
    }
}
