async-symfony
-------------

Repository to accompany the YouTube series

Requirements
------------

* PHP 8.0 or higher

Installation
------------
Clone the project.

Usage
-----
Install all dependencies via `composer`:

```bash
$ composer intall
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
