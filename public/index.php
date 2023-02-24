<?php

echo "<p>This is a PHP base app running on Docker</p>";

echo "<p> Run <i>docker-compose exec web composer</i> to install a framework or any library, eg";

echo "<li> <i>docker-compose exec web composer create-project symfony/skeleton {app_name}</i> to create a Symfony App</li>";

echo "<li> <i>docker-compose exec web composer create-project laravel/laravel {app_name}</i> to create a Laravel App</li>";

echo "<p> Then start coding! </p>";

echo "<p><small>¹ You may have to move the app files around since the creation command will create a folder with the app name and the app files in it.</small><br/>";

echo "<small>² You may need to run a <i>docker-compose exec web chmod -R 777 {some folder}</i> for writing permissions</small></p>";
