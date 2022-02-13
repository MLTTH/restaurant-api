
# About
Small API for pizzerias.
A user can create an account and register. The user can choose one or many pizzas. A pizza is linked to one or many tags, just like a tag can be associated to several pizzas.

## Requirements
Laravel, 
Composer,
MySQL

### Steps
Clone the project
Create a new .env file using .env.exemple & settle Database

On terminal :
#
~ composer require laravel/sanctum
#
~ php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
#
~ php artisan migrate
#
~ composer install
