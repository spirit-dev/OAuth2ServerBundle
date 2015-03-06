<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SpiritDevOAuth2ServerExtension extends Extension {
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container) {
        $configuration = new Configuration();
        $config = array();
        foreach ($configs as $subConfig) {
            $config = array_merge($config, $subConfig);
        }
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        if (!isset($config['spiritdev_oauth_settings']['user_class'])) {
            throw new \InvalidArgumentException('The "user_class" option must be set');
        }
        else {
            $container->setParameter('spirit_dev_o_auth2_server.user_class', $config['spiritdev_oauth_settings']['user_class']);
        }

        if (!isset($config['spiritdev_oauth_settings']['user_provider'])) {
            throw new \InvalidArgumentException('The "user_provider" option must be set');
        }
        else {
            $container->setParameter('spirit_dev_o_auth2_server.user_provider', $config['spiritdev_oauth_settings']['user_provider']);
        }
    }

    public function getXsdValidationBasePath() {
        return __DIR__.'/../Resources/config/';
    }

    public function getNamespace() {
        return 'http://www.example.com/symfony/schema/';
    }
}
