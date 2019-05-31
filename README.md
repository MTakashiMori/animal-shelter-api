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

2° -> Copy file 

```
docker-compose.everride.yml.example
```
to 
```
docker-compose.everride.yml
```

3° -> Change the values inside "<>" to your custom
```
custom values if you want
<PORT_API> => 8000
<PORT_ROOT> => 3306
<YOUR_PATH> => your custom path
<USER> => user
<PASSWORD> => password
```
4° -> copy 
```
.env.example
```
to
```
.env
```

5° -> In .env, alter the <stong>DB_HOST</strong> value to your ip local ( ex. DB_HOST=192.168.1.10)

6° -> Inside folder execute (wait until laravel server is up )
```
docker-compose up 
```
7° -> Access to a test
```
localhost:8000/api/v1/test
```
