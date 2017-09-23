# App Store

This is a stub for an app store demonstrating nested resources in laravel.
See: https://stackoverflow.com/a/46353195/4233593

## Install

Clone this repository.

    git clone https://github.com/MyTeamName/appstore4233593.git

Set your environment variables if you haven't already.

    cp .env.example .env

Set your database credentials.

Make sure your `APP_KEY` is set.

    php artisan key:generate

Run database migrations.

    php artisan migrate

Use the factory to create some demo data.

    php artisan tinker

```php
factory(App\Category::class, 100)->create();
```

Now browse to `/api/v1/categories` or `/api/v1/categories/{id}`
