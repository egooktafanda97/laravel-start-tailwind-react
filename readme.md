# Laravel Start Tailwind React

[![Build Status](https://travis-ci.org/riipandi/laravel-start-tailwind-react.svg?branch=master)](https://travis-ci.org/riipandi/laravel-start-tailwind-react)
[![StyleCI](https://github.styleci.io/repos/229514178/shield?branch=master)](https://github.styleci.io/repos/229514178)
[![Latest Stable Version](http://img.shields.io/packagist/v/riipandi/laravel-start-tailwind-react.svg?style=flat)](https://packagist.org/packages/riipandi/laravel-start-tailwind-react)
[![Total Downloads](http://img.shields.io/packagist/dt/riipandi/laravel-start-tailwind-react.svg?style=flat)](https://packagist.org/packages/riipandi/laravel-start-tailwind-react)

Starter project Laravel with TailwindCSS and ReactJS preset.

## Quick Start

### Create Project

```
composer create-project --prefer-dist riipandi/laravel-start-tailwind-react myapp
```

### Install
Edit or create `.env` file and then execute:

```sh
# Composer dependencies
composer install
php artisan key:generate
php artisan migrate:fresh --seed

# Compiling resources
npm install --no-optional --no-audit
npm run development
```

> For detailed explanation on how things work, check out [Laravel docs](https://laravel.com/docs).

## License

This project licensed under the terms of [Apache License 2.0][choosealicense].
Please see [license file](./license.txt) for more information.

[choosealicense]:https://choosealicense.com/licenses/apache-2.0/
