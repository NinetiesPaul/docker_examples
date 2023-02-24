## This is a PHP base app running on Docker

Run ```docker-compose exec web composer``` to install a framework or any library, eg:

- **```docker-compose exec web composer create-project symfony/skeleton {app_name}``` to create a Symfony App**
- **```docker-compose exec web composer create-project laravel/laravel {app_name}``` to create a Laravel App**

Then start coding!

¹ You may have to move the app files around since the creation command will create a folder with the app name and the app files in it.

² You may need to run a ```docker-compose exec web chmod -R 777 {some folder}``` for dealing with permissions errors
