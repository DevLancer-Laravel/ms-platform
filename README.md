<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">Management System Platform</p>

## About us

Developing Management System Platform On The Web

  - HRM
  - CRM
  - Ecommerce
  - E-Learning
  - Hosting & VPS

## Setup
1. docker-compose build
2. docker-compose up -d
3. docker-compose exec app cp .env.example .env
4. docker-compose exec app composer install
5. docker-compose exec nodejs npm install
6. docker-compose exec app php artisan key:generate
7. docker-compose exec app php artisan migrate
8. docker-compose exec app php artisan db:seed
9. docker-compose exec app php artisan config:cache

## Config
- Open file hosts and add "127.0.0.1 hr-platform.local" into it.

Enjoy!!!
