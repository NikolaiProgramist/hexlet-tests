install:
	composer install

test:
	php tests/StringUtilsTest.php

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests