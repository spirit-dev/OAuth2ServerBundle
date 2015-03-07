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

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="spiritdev_oauth2_client")
 * @ORM\Entity
 */
class Client extends BaseClient {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setRandomId($random) {
        $this->randomId = $random;
    }

    /**
     * {@inheritdoc}
     */
    public function getRandomId() {
        return $this->randomId;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublicId() {
        return sprintf('%s_%s', $this->getId(), $this->getRandomId());
    }

    /**
     * {@inheritdoc}
     */
    public function setSecret($secret) {
        $this->secret = $secret;
    }

    /**
     * {@inheritdoc}
     */
    public function getSecret() {
        return $this->secret;
    }

    /**
     * {@inheritdoc}
     */
    public function checkSecret($secret) {
        return (null === $this->secret || $secret === $this->secret);
    }

    /**
     * {@inheritdoc}
     */
    public function setRedirectUris(array $redirectUris) {
        $this->redirectUris = $redirectUris;
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUris() {
        return $this->redirectUris;
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedGrantTypes(array $grantTypes) {
        $this->allowedGrantTypes = $grantTypes;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedGrantTypes() {
        return $this->allowedGrantTypes;
    }
}