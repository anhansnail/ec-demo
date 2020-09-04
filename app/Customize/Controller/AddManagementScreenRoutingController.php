<?php


namespace Customize\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class AddManagementScreenRoutingController
{
    /**
     * @Method("GET")
     * @Route("/sample")
     * @Template("/%eccube_admin_route%/sample")
     */
    public function testMethod()
    {
        return new Response('admin page');
    }
}
