<?php

namespace App\Repositories\Item;

use App\Sources\Item\ItemSource;

class ItemRepository
{
    private ItemSource $src;

    public function __construct(ItemSource $src)
    {
        $this->src = $src;
    }

    public function index(string $language): array
    {
        return $this->src->index($language);
    }

    public function show(int $id, string $language): array
    {
        return [
            'details' => $this->src->getDetails($id, $language),
            'recipes' => $this->src->getRecipes($id, $language)
        ];
    }
}
