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

namespace SpiritDev\Bundle\OAuth2ServerBundle\Entity;

use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;
use Doctrine\ORM\Mapping as ORM;
use SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface;

/**
 * @ORM\Table(name="spiritdev_oauth2_refreshtoken")
 * @ORM\Entity
 */
class RefreshToken extends BaseRefreshToken implements UserSubjectInterface {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="SpiritDev\Bundle\OAuth2ServerBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;
    /**
     * @var UserSubjectInterface
     *
     * @ORM\ManyToOne(targetEntity="SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface")
     */
    protected $user;

    public function getName() {

    }
}