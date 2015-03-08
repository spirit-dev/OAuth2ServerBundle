<?php
/*
 *                                     _________________________________
 *                                    /       _             _           \
 *             /(        )`          /       /_`_  ._._/___/ | _         \
 *             \ \___   / |       __/      . _//_//// /   /_.'/_'|/       \_
 *             /- _  `-/  '      /            /                             \
 *            (/\/ \ \   /\     /   Jean Bordat ( Twitter @Ji_Bay_ )         |
 *            / /   | `    \  _/   Since 2K10 until today                    |
 *            O O   ) /    |   \  @mail <bordat.jean@gmail.com>              |
 *            `-^--'`<     '    \  Date 07/03/2015                           |
 *           (_.)  _  )   /      \                                           |
 *            `.___/`    /        \_  Code Burner  _________________________/
 *              `-----' /           \_____________/
 * <----.     __ / __   \
 * <----|====O)))==) \) /====
 * <----'    `--' `.__,' \
 *              |        |
 *               \       /
 *          ______( (_  / \_____
 *        ,'  ,-----'   |       \
 *        `--{__________)       \/          hex: 53 70 69 72 69 74 2d 44 65 76
 */

namespace SpiritDev\Bundle\OAuth2ServerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 *
 * @author Jean BORDAT <bordat.jean@gmail.com>
 * Date    07/03/2015 14:28
 */
class SpiritDevOAuth2ServerExtension extends Extension {
    /**
     * {@inheritDoc}
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:28
     */
    public function load(array $configs, ContainerBuilder $container) {
        $configuration = new Configuration();
        $config = array();
        foreach ($configs as $subConfig) {
            $config = array_merge($config, $subConfig);
        }
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $mainConfigName = 'spiritdev_oauth_settings';

        if (!isset($config[$mainConfigName]['user_class'])) {
            throw new \InvalidArgumentException('The "user_class" option must be set');
        } else {
            $container->setParameter('spirit_dev_o_auth2_server.user_class', $config[$mainConfigName]['user_class']);
        }

        if (!isset($config[$mainConfigName]['user_provider'])) {
            throw new \InvalidArgumentException('The "user_provider" option must be set');
        } else {
            $container->setParameter('spirit_dev_o_auth2_server.user_provider', $config[$mainConfigName]['user_provider']);
        }

        if (!isset($config[$mainConfigName]['user_repository'])) {
            throw new \InvalidArgumentException('The "user_repository" option must be set');
        } else {
            $container->setParameter('spirit_dev_o_auth2_server.user_repository', $config[$mainConfigName]['user_repository']);
        }
    }

    /**
     * @return string
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:28
     */
    public function getXsdValidationBasePath() {
        return __DIR__ . '/../Resources/config/';
    }

    /**
     * @return string
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:28
     */
    public function getNamespace() {
        return 'http://www.example.com/symfony/schema/';
    }
}
