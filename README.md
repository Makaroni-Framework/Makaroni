<div>
<img src="/img/makaroni.jpg" >



# Makaroni

Makaroni is an yummy framework made for PHP developers ;))

## Features

- Simple and easy to use
- Routing system
- Validation
- QueryBuilder
- Migration



##  Requirements

PHP >= 8


## Getting Started
via Composer:
```
composer create-project makaroni/framework:1.x-dev project-name
```
OR 

[download last release](https://github.com/Makaroni-Framework/Makaroni/releases/tag/v1.0.3) and run `composer install`.

Now start the magic!

*NOTE: To see an example of a blog application, go to the `blog` branch.

## Directory trees
- `img` : have makaroni logo image
- `main` : this directory have your application codes
    - `config` : there are config.php file for config your app
    - `public` : index.php directory
    - `route` : define your routes in route.php
    - `System` : directory for controllers and models (write your helper methods in helpers.php)
    - `view` : create your views here
    - `Migration` : write your migrations here


## Routing
For create new route, in `route.php` file:

```php
use Makaroni\Framework\Route\Router;

$this->add("/", ['_controller' => PostController::class, '_method' => 'index'], "post_index");

// with parameters
$this->add("/post/{slug}", ['_controller' => PostController::class, '_method' => 'show'], "post_show");
```
## Validation
You can validate your inputs with `validate` methods, which gives array of arrays for validation: 
```php

use Makaroni\Framework\Validation\Validation;

class PostController
{
    public function store()
    {
        $title = request()->input('title');

        (new Validation)->validate([
            ['title', $title, 'words'],
        ]);

        // continues if inputs are valid
    }
}

```
##  QueryBuilder
[See full documentation](https://github.com/alirezasalehizadeh/QueryBuilder) 

##  Migration
[See full documentation](https://github.com/alirezasalehizadeh/QuickMigration) 

##  Yum
Use `yum` for run your local webserver:
```php
php yum

// PHP 8.1.14 Development Server (http://localhost:8080) started...
```
## Migrate
Use `migrate` for run your migrations
```php
php migrate
```

## Contributing
Send your pull requests for contributing.


## License

[MIT](LICENSE).


</div>
