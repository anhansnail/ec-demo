<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.pxjhh8t' shared service.

return $this->services['service_locator.pxjhh8t'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['Layout' => function () {
    $f = function (\Eccube\Entity\Layout $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\\Entity\\Layout']) ? $this->services['autowired.Eccube\\Entity\\Layout'] : ($this->services['autowired.Eccube\\Entity\\Layout'] = new \Eccube\Entity\Layout())) && false ?: '_'});
}, 'cacheUtil' => function () {
    $f = function (\Eccube\Util\CacheUtil $v = null) { return $v; }; return $f(${($_ = isset($this->services['Eccube\\Util\\CacheUtil']) ? $this->services['Eccube\\Util\\CacheUtil'] : ($this->services['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, $this))) && false ?: '_'});
}]);
