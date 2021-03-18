<?php

namespace App\Http\Controllers\Mapper\Item;


class ItemShowMapper
{
    private array $item;

    public function __construct(array $item)
    {
        $this->item = $item;
    }

    public function get(): array
    {
        $fieldMapper = new ItemShowFieldMapper($this->item);
        return [
            'name' => $fieldMapper->getName(),
            'icon' => $fieldMapper->getIcon(),
            'category' => $fieldMapper->getCategory(),
            'sub_category' => $fieldMapper->getSubCategory(),
            'rarity' => $fieldMapper->getRarity(),
            'prices' => $fieldMapper->getPrices(),
            'carry_limit' => $fieldMapper->getCarryLimit(),
            'research_points' => $fieldMapper->getResearchPoints(),
            'recipes' => $fieldMapper->getRecipes()
        ];
    }
}
