<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class LinkToAddRouterController
{
    /**
     * @Method("GET")
     * @Route("/sample/url/{id}", name="sample_page")
     * @Template("Sample/pass_url.twig")
     */
    public function testMethod($id)
    {
        return [];
    }
}
