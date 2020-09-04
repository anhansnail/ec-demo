<?php


namespace Customize\Controller;
use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Eccube\Entity\Product;


class UseServicesController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/products", name="products")
     */
    public function testDemoEntity()
    {
        /** @var Product $product */
        $product = $this->entityManager->getRepository('Eccube\Entity\Product')->find(1);

        return new Response('Product is '.$product->getName());    }
}
