# codeception-hello-module

Module to interface with a FreeRADIUS server

# Badges
[![Lahello Stable Version](https://poser.pugx.org/davidjeddy/codeception-hello-module/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Total Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/downloads)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Lahello Unstable Version](https://poser.pugx.org/davidjeddy/codeception-hello-module/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![License](https://poser.pugx.org/davidjeddy/codeception-hello-module/license?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![composer.lock](https://poser.pugx.org/davidjeddy/codeception-hello-module/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)

#Add Sensiolabs quality here

# REQUIREMENTS
PHP 7+

MySQL 5.5+

Composer

Codeception

# Credit
The majority of this package is based off an article by Jordan Eldredge:

[https://jordaneldredge.com/blog/writing-a-custom-codeception-module/](https://jordaneldredge.com/blog/writing-a-custom-codeception-module/)

# INSTALLATION
 + `cd {project root}`
 + Run `composer require davidjeddy/codeception-hello-module` in terminal
     + OR add `"davidjeddy/codeception-hello-module": "dev-master@dev"` to your project's  `composer.json`, then run `composer update`.

# USAGE
Add the module to the suite configuration

```PHP
class_name: Acceptancehelloer
modules:
    enabled:
        ...
        - Hello
        ...
```

Rebuild codeception, typically `codeception build`
Add functionality to hello Cept/Cest
Run hello
Enjoy