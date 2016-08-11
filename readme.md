# Przelewy24
_A Laravel 5 library for Przelewy24 as a Service Provider_
**v0.1**

### Instalation
composer require initbizlab/laravel-przelewy24:@dev

app/config/app.php

add to providers array:
```Initbizlab\Przelewy24\Przelewy24ServiceProvider::class,```

add to aliases array:
```'Przelewy24' => Initbizlab\Przelewy24\Facades\Przelewy24::class,```
