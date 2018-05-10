[![Total Downloads](https://poser.pugx.org/feripratama/make-seed/downloads)](https://packagist.org/packages/feripratama/make-seed)
[![Latest Unstable Version](https://poser.pugx.org/feripratama/make-seed/v/unstable)](https://packagist.org/packages/feripratama/make-seed)
[![Latest Stable Version](https://poser.pugx.org/feripratama/make-seed/v/stable)](https://packagist.org/packages/feripratama/make-seed)
[![Monthly Downloads](https://poser.pugx.org/feripratama/make-seed/d/monthly)](https://packagist.org/packages/feripratama/make-seed)
[![Daily Downloads](https://poser.pugx.org/feripratama/make-seed/d/daily)](https://packagist.org/packages/feripratama/make-seed)

# make-seed

### Install via composer :

```bash
$ composer require feripratama/make-seed:dev-master
```

### edit app/config.php

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,

        /* ---------- */

        Feripratama\MakeSeed\MakeSeedServiceProvider::class,
```

### artisan command :

```bash
$ php artisan csv-seeder --class-name=ClassNameSeeder
```
