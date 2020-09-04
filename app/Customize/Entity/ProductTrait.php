<?php


namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{
    /**
     * @ORM\Column(name="maker_name",type="string", nullable=true)
     */
    public $maker_name;

    public function getMakerName()
    {
        return $this->maker_name;
    }

    public function setMakerName($maker_name)
    {
        return $this->maker_name = $maker_name;
    }
}
