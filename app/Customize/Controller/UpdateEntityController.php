<?php


namespace Customize\Controller;

use Eccube\Application;
use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Customize\Entity\ProductTrait;
use Eccube\Entity\Product;
use Eccube\Repository\ProductRepository;

class UpdateEntityController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Method("GET")
     * @Route("/update_entity", name="update_entity")
     * @Template("Sample/update_entity.twig")
     */
    public function index()
    {
//        /** @var Product $product */
//        $product = $this->entityManager->getRepository('Eccube\Entity\Product')->find(1);
//        var_dump($product->maker_name);
//        return ['Product' => $product];
        $app = [];
        $product = $this->productRepository->find(1);
//        var_dump($product);
//        dump($product->maker_name);

        $product->maker_name = 'あああ';
        $product->stock = 11;
        $this->entityManager->persist($product);
        $this->entityManager->flush();
        return ['product'=>$product];
    }
//    public function index(Application $app)
//    {
//        $Product = $app['eccube.repository.product']->find(1);
//        var_dump($Product);
//        dump($Product->maker_name);
//
//        $Product->maker_name = 'あああ';
//        $app['orm.em']->persist($Product);
//        $app['orm.em']->flush();
//    }
}
