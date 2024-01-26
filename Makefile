make migrate:
	php artisan migrate
make test:
	php artisan test
make hash:
	php artisan generate:hash
make publish:
	php artisan queue:publish
make consume:
	php artisan queue:consume
