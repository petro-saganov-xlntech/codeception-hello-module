# codeception-hello-module

Module to interface with a FreeRADIUS server

# Badges
[![Latest Stable Version](https://poser.pugx.org/davidjeddy/codeception-hello-module/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Total Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/downloads)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Lahello Unstable Version](https://poser.pugx.org/davidjeddy/codeception-hello-module/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![License](https://poser.pugx.org/davidjeddy/codeception-hello-module/license?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/codeception-hello-module/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)
[![composer.lock](https://poser.pugx.org/davidjeddy/codeception-hello-module/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/codeception-hello-module)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/847f7ced-982c-4b03-981f-a06bf11e2303/big.png)](https://insight.sensiolabs.com/projects/847f7ced-982c-4b03-981f-a06bf11e2303)

# REQUIREMENTS
PHP ^5.6

Composer ^1.x

Codeception ^2.3

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

 - Rebuild codeception, typically `codeception build`
 - Add `$I->greet('NAME');` to a Cept/Cest test class
 - Run test suite
 - Enjoy
