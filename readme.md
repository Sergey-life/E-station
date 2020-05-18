Запуск:

Скачать. В скачаной папке открыть терминал. Ввести команду: docker-compose build && docker-compose up -d
Вводим: composer dump-autoload
Вводим: docker-compose exec php php /var/www/html/artisan migrate
Вводим: docker-compose exec php php /var/www/html/artisan db:seed
Вводим в браузере: localhost:8088
phpMyAdmin: localhost:8008 (log: homestead, pas: secret)
Проверки(Postman):

Create new station(POST): http://localhost:8088/api/stations/
Update station(PUT): http://localhost:8088/api/stations/{id}
Delete station(DELETE): http://localhost:8088/api/stations/{id}
displays stations in the specified city that are currently open(GET): http://localhost:8088/api/stations
Cтраница ТЗ: https://macpaw.com/careers/back-end-intern
