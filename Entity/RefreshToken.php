<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\Entity;

use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;
use Doctrine\ORM\Mapping as ORM;
use SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface;

/**
 * @ORM\Table(name="spiritdev_oauth2_refreshtoken")
 * @ORM\Entity
 */
class RefreshToken extends BaseRefreshToken
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
     * @var UserSubjectInterface
     *
     * @ORM\ManyToOne(targetEntity="SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface")
     */
    protected $user;
}