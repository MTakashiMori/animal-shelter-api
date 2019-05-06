# animal-shelter-api

<strong>For all cases, try give root acess to folders</strong><br>
<strong>And for a easyless install, do not change anything in docker</strong>
<br>
1° -> clone this repository

2°-> inside folder execute docker-compose up (wait until laravel server is up )

3°-> cp .env.example to .env

4°-> in .env, alter the <stong>DB_HOST</strong> value to your ip local (DB_HOST=192.168.1.10)

5°-> set root access (chmod 777) on database volume, if you did not change anything, the database volume must be <strong>/var/www/html/db/shelter</strong>

6°-> execute on db container,if you did not change anything, the command must be <strong>docker exec -it pet-adoption-api php artisan migrate:refresh --seed</strong>

7°-> access <a>localhost:8000/api/v1/test</a> to a test
