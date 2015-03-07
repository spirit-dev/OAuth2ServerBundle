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

/**
 * Class ConfigurationManager
 * @package SpiritDev\Bundle\OAuth2ServerBundle\DependencyInjection
 *
 * @author Jean BORDAT <bordat.jean@gmail.com>
 * Date    07/03/2015 14:27
 */
class ConfigurationManager {

    private $templateName = null;

    /**
     * @param $template
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:27
     */
    public function __construct($template) {
        $this->templateName = $template;
    }

    /**
     * @return null
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:27
     */
    public function getTemplateName() {
        return $this->templateName;
    }

    /**
     * @param String $templateName
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:27
     */
    public function setTemplateName($templateName) {
        $this->templateName = $templateName;
    }
} 