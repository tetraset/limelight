up:
	docker compose up -d

down:
	docker compose down --remove-orphans

rebuild: build down up

build:
	docker compose build

init:
	docker compose exec limelight composer install
	docker compose exec limelight service nginx start