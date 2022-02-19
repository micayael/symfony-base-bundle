<?php

namespace Micayael\Bundle\BaseBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('micayael_base');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
//                ->scalarNode('login_route')
//                    ->defaultValue('login')
//                    ->info('name of the route for login')
//                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
