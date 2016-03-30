# Ray.FirebaseModule

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kuma-guy/Ray.FirebaseModule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kuma-guy/Ray.FirebaseModule/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ray-di/Ray.WebParamModule/badges/coverage.png?b=1.x)](https://scrutinizer-ci.com/g/ray-di/Ray.WebParamModule/?branch=1.x)
[![Build Status](https://travis-ci.org/kuma-guy/Ray.FirebaseModule.svg?branch=master)](https://travis-ci.org/kuma-guy/Ray.FirebaseModule)

firebase module for Ray.Di

## Installation

### Composer install

    $ composer require ray/firebase-module
 
### Module install

```php
use Ray\Di\AbstractModule;
use Ray\FirebaseModule\FirebaseModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $this->install(new FirebaseModule('firebase_url', 'firebase_token'));
    }
}
```
### DI trait

 * [FirebaseInject](https://github.com/kuma-guy/Ray.FirebaseModule/blob/master/src/FirebaseInject.php) for `Firebase\FirebaseInterface` interface
 
