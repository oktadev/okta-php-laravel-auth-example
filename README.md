# Build a Simple Laravel App with Authentication

This example shows how to create a simple Laravel app and add authentication using Okta.

Please read [Build a Simple Laravel App with Authentication](https://developer.okta.com/blog/2019/09/05/laravel-authentication) to see how this application was built.

**Prerequisites:** PHP, Composer, [Okta developer account](https://developer.okta.com/)

## Getting Started

Sign up for an [Okta developer account](https://developer.okta.com/signup/) and create a new application. Make note of the Client ID and Issuer values for your application.

Clone this project using the following commands:

```bash
git clone https://github.com/oktadeveloper/okta-php-laravel-auth-example.git
cd okta-php-laravel-auth-example
```

Copy and edit the `.env` file and enter the Okta Client ID, Secret and Base URL details there:

```bash
cp .env.example .env
```

Install the project's dependencies:

```bash
composer install
```

Set up the database (it uses sqlite by default):

```bash
php artisan migrate
```

Run the application with:

```bash
php artisan serve
```

Please read [Build a Simple Laravel App with Authentication](https://developer.okta.com/blog/2019/09/05/laravel-authentication) for the full details of this application.


## License

Apache 2.0, see [LICENSE](LICENSE).
