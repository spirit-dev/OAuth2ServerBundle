<?php

namespace SpiritDev\Bundle\OAuth2ServerBundle\DependencyInjection;

class ConfigurationManager {

    private $templateName = null;
    public function __construct($template) {
        $this->templateName = $template;
    }
    public function getTemplateName() {
        return $this->templateName;
    }

    /**
     * @param String $templateName
     */
    public function setTemplateName($templateName) {
        $this->templateName = $templateName;
    }
} 