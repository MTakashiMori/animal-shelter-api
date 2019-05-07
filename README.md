# Animal Shelter

This is a project for a animal shelter, you can add a shelter, add animals to her and adopt his animals.

# Introduction

this is a simple project using laravel and docker. This is the api for the <a href="https://github.com/MTakashiMori/animal-shelter">front-end</a>

# Install

<h3>Requirements</h3>
<ul>
    <li>Linux</li>
    <li>Docker</li>
    <li>Docker-compose</li>
</ul>    

<strong>For all cases, try give root acess to folders</strong><br>
<strong>And for a easyless install, do not change anything in docker</strong>
<br>
1° -> Clone this repository

2° -> Inside folder execute (wait until laravel server is up )
```
docker-compose up 
```

3° -> Copy .env.example to .env

4° -> In .env, alter the <stong>DB_HOST</strong> value to your ip local ( ex. DB_HOST=192.168.1.10)

5° -> Set root access (chmod 777) on database volume, if you did not change anything, the database volume must be <strong>/var/www/html/db/shelter</strong>

6° -> Execute on db container,if you did not change anything, the command must be 
```
docker exec -it pet-adoption-api php artisan migrate:refresh --seed
```
7° -> Access to a test
```
localhost:8000/api/v1/test
```
