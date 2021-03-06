<?php

namespace Acme\DemoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class AcmeDemoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        
        $ymlloader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $ymlloader->load('admin.yml');
    }

    public function getAlias()
    {
        return 'acme_demo';
    }
}
