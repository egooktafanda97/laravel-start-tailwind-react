# Laravel Start Tailwind React

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

## License

This project licensed under the terms of [Apache License 2.0][choosealicense].
Please see [license file](./license.txt) for more information.

[choosealicense]:https://choosealicense.com/licenses/apache-2.0/
