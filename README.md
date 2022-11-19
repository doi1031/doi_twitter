# doi_twitter
## 環境構築手順
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```