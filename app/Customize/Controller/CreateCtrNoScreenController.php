<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class CreateCtrNoScreenController
{
    /**
     * @Method("GET")
     * @Route("/controller", name="controller")
     */
    public function testMethod()
    {
        return new Response(
            '',
            Response::HTTP_OK,
            array('Content-Type' => 'text/plain; charset=utf-8')
        );    }
}
