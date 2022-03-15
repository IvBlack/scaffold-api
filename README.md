# scaffold-api
REST API on Laravel 8 in 100 strings.


The guide focuses on the rapid deployment of a minimum set for full-fledged API development 
in accordance with best practices taken from the Laravel 5.7 documentation, adapted for Laravel 8.75.

Main settings:
composer create-project --prefer-dist laravel/laravel scaffold-api
php artisan make:model Game -mrc
php artisan make:request GameRequest
php artisan make:middleware ForceJsonResponse

Our result we can see throuth php artisan route:list
Relevant code changes will be reflected in PR.
In accomodation witn REST best practice https://habr.com/ru/post/351890/

Thx.
