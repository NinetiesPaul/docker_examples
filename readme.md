# PHP/Apache and PostgreSQL
This branch contains a docker container of PHP coupled with Apache with PostgreSQL for storage

## How to Run
1. Install the container
```
docker-compose build
```

2. Run the container
Then to run the containers execute
```
docker-compose up -d
```

Run either 

```
docker-compose exec web composer create-project symfony/skeleton {app_name}
```
To create a Symfony App; or
```
docker-compose exec web composer create-project laravel/laravel {app_name}
```
to create a Laravel App
