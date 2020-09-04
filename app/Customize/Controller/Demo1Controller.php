<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class Demo1Controller
{
    /**
     * @Method("GET")
     * @Route("/demo1", name="demo1")
     */
    public function testMethod()
    {
        return new Response('Hello sample page !');
    }
}
