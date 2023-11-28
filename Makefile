#!/usr/bin/make

export BASH=bash
DOCKER_DIR=laradock-bim-update

up:
	cd $(DOCKER_DIR) && exec docker-compose up -d nginx workspace

down:
	cd $(DOCKER_DIR) && exec docker compose down

cli:
	cd $(DOCKER_DIR) && exec docker-compose exec workspace bash
