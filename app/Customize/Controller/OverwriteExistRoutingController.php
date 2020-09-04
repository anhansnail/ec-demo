<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class OverwriteExistRoutingController
{
    /**
     * @Method("GET")
     * @Route("/demo1", name="demo1")
     */
    public function testMethod()
    {
        return new Response('Overwrite /demo1 page');
    }
}
