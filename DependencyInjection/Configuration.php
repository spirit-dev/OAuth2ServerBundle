<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {

        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('spirit_dev_o_auth2_server');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
            ->children()
            ->arrayNode('spiritdev_oauth_settings')
            ->children()
            ->scalarNode('user_class')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('user_provider')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}