# Docker PHP

This is a repository with many different options of pre-configured docker containers for a PHP development environment. Check different project branches for different options.

## Branches

### {main} branch

PHP running on it's built in server

### {apache_decoupling} branch

PHP with Apache server on separate container, with database options

### {db_mysql} branch

PHP coupled with Apache and MySQL as Database option

### {db_pgl} branch

PHP coupled with Apache and PostgreSQL as Database option

## How to Run

Unless stated otherwise:

To build the containers run
```docker-compose build```

Then to run the containers execute
```docker-compose up -d```

Open your browser and access `http://localhost:8015`