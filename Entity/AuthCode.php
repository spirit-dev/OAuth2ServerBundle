<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\Entity;

use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="spiritdev_oauth2_authcode")
 * @ORM\Entity
 */
class AuthCode extends BaseAuthCode
{
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
     * @ORM\ManyToOne(targetEntity="SpiritDev\Bundle\OAuth2ServerBundle\Model\OAuth2ServerSubjectInterface")
     * @var OAuth2ServerSubjectInterface
     */
    protected $user;
}