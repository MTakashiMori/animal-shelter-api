# animal-shelter-api

clone this repository

docker-compose up -d

cp .env.example to .env

.env-> DB_HOST -> your ip local -> 192.168.1.1

chmod folder /var/www/html/db/shelter

php artisan migrate:refresh --seed
