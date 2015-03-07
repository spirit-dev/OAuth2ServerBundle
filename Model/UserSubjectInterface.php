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

namespace SpiritDev\Bundle\OAuth2ServerBundle\Model;

/**
 * Interface UserSubjectInterface
 * @package SpiritDev\Bundle\OAuth2ServerBundle\Model
 *
 * @author Jean BORDAT <bordat.jean@gmail.com>
 * Date    07/03/2015 14:30
 */
interface UserSubjectInterface
{
    // Liste toutes les méthodes additionnelles dont votre
    // InvoiceBundle aura besoin pour accéder au sujet afin
    // que vous soyez sûr que vous avez accès à ces méthodes.

    /**
     * @return string
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:31
     */
    public function getName();
}