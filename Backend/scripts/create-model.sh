#!/usr/bin/env bash

NAMESPACE=$1
MODEL=$2
TABLE=$3

if [[ "$#" -ne 3 ]]
then
    echo "Invalid number of arguments."
    exit 1
fi

docker-compose exec php php artisan krlove:generate:model $MODEL --output-path=Models/$NAMESPACE --namespace=App\\Models\\$NAMESPACE --table-name=$TABLE
