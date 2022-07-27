copy:
	@cp phpunit.dist.xml phpunit.xml

build: 
	@docker-compose build --pull --no-cache

start: 
	@docker-compose up -d

stop: 
	@docker-compose down --remove-orphans

test:
	@docker-compose run --rm php bin/phpunit