<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Customize\Repository\MARepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Customize/Repository/MARepository.php';

return $this->services['Customize\\Repository\\MARepository'] = new \Customize\Repository\MARepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Doctrine\\Query\\Queries']) ? $this->services['Eccube\\Doctrine\\Query\\Queries'] : ($this->services['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});