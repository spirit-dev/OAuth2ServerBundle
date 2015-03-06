<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\Model;

interface UserSubjectInterface
{
    // Liste toutes les méthodes additionnelles dont votre
    // InvoiceBundle aura besoin pour accéder au sujet afin
    // que vous soyez sûr que vous avez accès à ces méthodes.

    /**
     * @return string
     */
    public function getName();
}