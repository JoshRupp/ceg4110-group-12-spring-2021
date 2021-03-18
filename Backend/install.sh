#!/usr/bin/env bash

echo "Installing..."

docker-compose up -d
docker-compose exec php composer install
