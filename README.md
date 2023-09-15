<div>
<img src="/img/makaroni.jpg" >



# Makaroni

Makaroni is an yummy framework made for PHP developers ;))





##  Requirements

PHP >= 8


## Usage

Clone this repo, 

run `composer install`, 

create a database and run `php migrate`,

run `php yum` and start...

### via Docker:
You can run Makaroni blog via Docker!

1) in `config.php` file set the following values:
```php
'database' => [
        'host' => 'db',
        'name' => 'database name',
        'user_name' => 'root',
        'password' => 'your password',
]
```
2) in `docker-compose.yml` file set the environment values:
```shell
db:
    container_name: makaroni_blog_mariadb
    image: mariadb
    volumes:
      - ../:/var/www/html
      - ./mariadb:/var/lib/mysql
    ports:
      - 3306:3306
    environment:
      MYSQL_DATABASE: database name
      MYSQL_ROOT_PASSWORD: your password

```
4) run
```shell
docker compose -f docker/docker-compose.yml up --build
```

5) in `php-fpm` container run for create tables
```shell
php migrate
```
6) run containers down and up again, and start...

## Contributing
Send your pull requests for contributing.


## License

[MIT](LICENSE).


</div>
