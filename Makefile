lint:
	composer run-script phpcs -- --standard=PSR12 tests routes

test:
	composer run-script phpunit tests

run:
	php -S localhost:8000 -t public
