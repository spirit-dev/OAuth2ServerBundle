<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="spiritdev_oauth2_user_users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="guid", type="string", length=32)
     */
    protected $guid;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    /**
     * @ORM\Column(name="api_key", type="string", length=32)
     */
    protected $apiKey;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        $this->guid = md5(uniqid(null, true));
    }


    public function getId() {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(
            array(
                $this->id,
            )
        );
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            ) = unserialize($serialized);
    }

    /**
     * Gets the value of apiKey.
     *
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Sets the value of apiKey.
     *
     * @param mixed $apiKey the api key
     *
     * @return self
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Gets the value of guid.
     *
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets the value of guid.
     *
     * @param mixed $guid the guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }
}