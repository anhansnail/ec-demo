<?php


namespace Customize\Controller;

use Eccube\Entity\BaseInfo;
use Eccube\Repository\BaseInfoRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class AddAServiceWithoutAbstractClassController
{
    /** @var BaseInfo */
    protected $__baseInfor;
    /**
     * AddAServiceWithoutAbstractClassController constructor
     * @param BaseInfoRepository $baseInfoRepository
     */
    public function __construct(BaseInfoRepository $baseInfoRepository)
    {
        $this->__baseInfor = $baseInfoRepository->get();
    }

    /**
     * @Method("GET")
     * @Route("/get_shop_name", name="get_shop_name")
     */
    public function testMethod()
    {
        return new Response('shop name is '.$this->__baseInfor->getShopName());
    }
}
