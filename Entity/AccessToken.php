<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\Entity;

use FOS\OAuthServerBundle\Entity\AccessToken as BaseAccessToken;
use Doctrine\ORM\Mapping as ORM;
use SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface;

/**
 * @ORM\Table(name="spiritdev_oauth2_accesstoken")
 * @ORM\Entity
 */
class AccessToken extends BaseAccessToken
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * @var UserSubjectInterface
     *
     * @ORM\ManyToOne(targetEntity="SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface")
     */
    protected $user;
}