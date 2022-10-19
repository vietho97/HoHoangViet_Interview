install:
	composer install
	composer dump-autoload

env:
	cp .env.example .env
	php artisan key:generate

start:
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear
	php artisan cache:clear
	php artisan serve