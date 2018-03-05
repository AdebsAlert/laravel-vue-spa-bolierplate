# Laravel Vue SPA Boilerplate
Starter Boilerplate SPA made with Laravel 5.5, Vue 2, JWT Auth, Vue-router 3, Vuex 3 & Axios

 
## Built With
* [Laravel 5.5](https://laravel.com/docs/5.5)
* [Vue 2](https://vuejs.org)
* [Vue Router 3](http://router.vuejs.org)
* [Vuex 3](http://vuex.vuejs.org)
* [Axios](https://github.com/mzabriskie/axios)
* [Authentication with JWT Token](https://github.com/tymondesigns/jwt-auth)

## Installation:
* Clone the repo
* `cd` to the repo
* Copy `.env.example` to `.env` by running `cp .env.example .env`
* Run `composer install --no-scripts`
* Run `php artisan key:generate`
* Run `php artisan jwt:secret`
* Configure `.env`
* Run `php artisan migrate`.
* Run `npm install`
* Run `npm run watch`
* View the site by 
    * Either running `php artisan serve` if you are not using vagrant homestead or laravel valet (in a new terminal/command prompt)
    * Otherwise go to your local dev url configured in vagrant

For any problem in laravel setup, please get help from [Laravel](https://laravel.com) site. For any other problem, please create an issue, I will attend to it ASAP.
     
## Note:
Modification is highly appreciated, please contribute.
