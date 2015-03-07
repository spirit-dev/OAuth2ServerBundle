Overriding Default SpiritDevOAuth2ServerBundle Controllers
============================================

The default controllers packaged with the SpiritDevOAuth2ServerBundle provide a lot of
functionality that is sufficient for general use cases. But, you might find
that you need to extend that functionality and add some logic that suits the
specific needs of your application.

**Note:**

> Overriding the controller requires to duplicate all the logic of the action.
> Most of the time, it is easier to use the events
> to implement the functionality. Replacing the whole controller should be
> considered as the last solution when nothing else is possible.

The first step to overriding a controller in the bundle is to create a child
bundle whose parent is SpiritDevOAuth2ServerBundle. The following code snippet creates a new
bundle named `SpiritDevOAuth2ServerBundle` that declares itself a child of SpiritDevOAuth2ServerBundle.

``` php
// src/Acme/OAuth2ClientBundle/AcmeOAuth2ClientBundle.php
<?php

namespace Acme\OAuth2ClientBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeOAuth2ClientBundle extends Bundle
{
    public function getParent()
    {
        return 'SpiritDevOAuth2ServerBundle';
    }
}
```

**Note:**

> The Symfony2 framework only allows a bundle to have one child. You cannot create
> another bundle that is also a child of SpiritDevOAuth2ServerBundle.


Now that you have created the new child bundle you can simply create a controller class
with the same name and in the same location as the one you want to override. This
example overrides the `SecurityController` by extending the SpiritDevOAuth2ServerBundle
`SecurityController` class and simply overriding the method that needs the extra
functionality.

The example below overrides the `loginCheckAction` method. It uses the code from
the base controller and makes sucurity verifications before switching on defined views.

``` php
// src/Acme/OAuth2clientBundle/Controller/SecurityController.php
<?php

namespace Acme\OAuth2clientBundle\Controller;

use SpiritDev\Bundle\OAuth2ClientBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends BaseController {

    public function loginCheckAction(Request $request)
    {
        // Do stuff here
    }
}
```

**Note:**

> If you do not extend the SpiritDevOAuth2ServerBundle controller class that you want to override
> and instead extend ContainerAware or the Controller class provided by the FrameworkBundle
> then you must implement all of the methods of the SpiritDevOAuth2ServerBundle controller that
> you are overriding.
