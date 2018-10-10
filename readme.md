# Galleo (WIP)
> Create galleries and access them by API

![Galleo](galleo.png?raw=true)

## Installation

```sh
composer install
php artisan migrate db:seed
```

Also make symbolic link to storage/app/public

Of course you need to create .env file based on .env.example and provide your database info.

### Demo account

Email: test@test.com
Password: testtest

### How to use?

Sign up, then sign in, and then in dashboard read How to section :)

### Serving locally

```sh
php artisan serve
# or
cd public
php -S 127.0.0.1:8000
```

### Running tests

```sh
vendor/bin/phpunit
```

## Meta

Damian Balandowski – balandowski@icloud.com

[https://github.com/damianbal](https://github.com/damianbal)
