async-symfony
-------------

Repository to accompany the YouTube series

Requirements
------------
- [PHP 8.0 or higher](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download)
<!-- - [Docker](https://www.docker.com/) -->

Installation
------------
```bash
$ git clone https://github.com/GaryClarke/async-symfony.git
$ cd async-symfony
```

Usage
-----
Install all dependencies via `composer`:

```bash
$ composer install
```
Run the project:

```bash
$ php -S localhost:8000 -t public/
```
or

```bash
$ symfony server:start -d
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

Tests
-----
Execute this command to run tests:

```bash
$ cd my_project/
$ ./bin/phpunit
```

## Contribution
if you want to contribute, feel free to follow the video which explains everything about it [here](https://www.youtube.com/watch?v=s_foKPUz62w)


## Socials

Subscribe to YouTube channel [here](https://www.youtube.com/c/GaryClarkeTech/featured)
