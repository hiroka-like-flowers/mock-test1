# mock-test1
## 環境構築
git clone https://github.com/hiroka-like-flowers/mock-test1.git
docker-compose up -d --build
docker-compose exec php bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
## 環境開発
お問い合わせ画面:http://localhost:8085/
登録画面:http://localhost:8085/register
phpMyAdmin:http://localhost:8086
## 実行環境
php:8.2-fpm
nginx:1.21.1
mysql:8.0.26
Laravel Framework 8.83.29
## ER図
<img width="974" height="1306" alt="image" src="https://github.com/user-attachments/assets/92c331fa-ed20-4ab4-b847-021e4acf0f6f" />
