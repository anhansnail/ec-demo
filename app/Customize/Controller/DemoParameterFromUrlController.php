<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DemoParameterFromUrlController
{
    /**
     * @Method("GET")
     * @Route("/sample/{id}")
     */
    public function testMethod($id)
    {
        return new Response('Parameter is '.$id);
    }
}
