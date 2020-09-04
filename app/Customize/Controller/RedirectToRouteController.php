<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Eccube\Controller\AbstractController;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;


class RedirectToRouteController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/redirect", name="redirect")
     */
    public function test()
    {
        return $this->redirectToRoute('demo1');
    }
}
