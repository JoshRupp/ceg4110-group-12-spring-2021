<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function index(string $language): array;

    public function show(int $id, string $language): array;
}
