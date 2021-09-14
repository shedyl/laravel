build:
	docker-compose up -d --build

down:
	docker-compose down

migrate:
	docker-compose exec app php artisan migrate

seed:
	docker-compose exec app php artisan db:seed
