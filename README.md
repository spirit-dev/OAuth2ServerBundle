
Getting Started With SpiritDevO-Auth2ServerBundle
=========================================

## Introduction
OAuth2ServerBundle is an OAuth2 flow manager. Define your API grants, your rendering template and thats all.
It manages for you token flows from [OAuth2](http://oauth.net/2/) Protocol. It also provides a direct login to API side. 
Take a look to the following to get started with OAuth2ServerBundle ;)

## Note
The actual version is designed for Symfony 2.6.
Upper Symfony versions may have issues.

## Installation

Installation is a quick 3 steps process:

1. Download SpiritDevOAuth2ServerBundle
2. Enable the Bundle
3. Configure the SpiritDevOAuth2ServerBundle


### Step 1: Install SpiritDevOAuth2ServerBundle

The preferred way to install this bundle is to rely on [Composer](http://getcomposer.org).
Just check on [Packagist](https://packagist.org/packages/spirit-dev/oauth2-server-bundle) the version you want to install (in the following example, we used "dev-master") and add it to your `composer.json`:

``` js
{
    "require": {
        // ...
        "spirit-dev/oauth2-server-bundle": "dev-master"
    }
}
```

### Step 2: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
            new SpiritDev\Bundle\OAuth2ServerBundle\SpiritDevOAuth2ServerBundle(),
    );
}
```


### Step 3: Configure SpiritDevOAuth2ServerBundle

Add SpiritDevOAuth2ServerBundle settings in app/config/config.yml:

``` yaml
# app/config/config.yml

# Doctrine Configuration
doctrine:
    ...
    orm:
        auto_generate_proxy_classes: "%kernel.debug%"
        auto_mapping: true
        resolve_target_entities:
            # Acme\DemoBundle\Entity\User represents the User class you want to be used by Spirit-Dev Oauth2 Server bundle
            # Don't change SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface
            SpiritDev\Bundle\OAuth2ServerBundle\Model\UserSubjectInterface: Acme\DemoBundle\Entity\User

# Spirit-Dev OAuth2 configuration
spirit_dev_o_auth2_server:
    spiritdev_oauth_settings:
        user_class: Acme\DemoBundle\Entity\User
        user_provider: Acme\DemoBundle\Provider\UserProvider
```

Define Routing settings like the following in app/config/routing.yml

``` yaml
...
spiritdev_oauth_server_auth_login:
    pattern:  /oauth/v2/auth_login
    defaults: { _controller: SpiritDevOAuth2ServerBundle:Security:login }

spiritdev_oauth_server_auth_login_check:
    pattern:  /oauth/v2/auth_login_check
    defaults: { _controller: SpiritDevOAuth2ServerBundle:Security:loginCheck }
```

## Simulating a token granting (comming soon)

## Next steps
Now that you have completed the basic installation and configuration of the SpiritDevO-Auth2ServerBundle, you are ready to learn about more advanced features and usages of the bundle.

The following documents are available:

* [Overriding Templates](https://github.com/spirit-dev/Oauth2ServerBundle/blob/master/Resources/doc/overriding_templates.md)
* [Overriding Controllers](https://github.com/spirit-dev/Oauth2ServerBundle/blob/master/Resources/doc/overriding_controllers.md)

* [Console Commands](https://github.com/spirit-dev/Oauth2ServerBundle/blob/master/Resources/doc/documentation.md)