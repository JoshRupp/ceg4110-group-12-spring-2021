<?php

namespace App\Http\Controllers\Mapper\Item;

use stdClass;

class ItemShowFieldMapper
{
    private const DEFAULT_COLOUR = 'FFFFFF';
    private stdClass $details;
    private array $recipes;

    public function __construct(array $item)
    {
        $this->details = $item['details'];
        $this->recipes = $item['recipes'];
        // TODO: Add 'used in recipes' data
    }

    public function getName(): string
    {
        return $this->details->name;
    }

    public function getIcon(): ?string
    {
        if ($this->details->icon_name === null) {
            return null;
        }

        $colour = self::DEFAULT_COLOUR;

        if ($this->details->icon_color) {
            $colour = strtolower($this->details->icon_color);
        }

        return route(
            'image.item',
            [
                strtolower($this->details->icon_name),
                'colour' => $colour
            ]);
    }

    public function getCategory(): string
    {
        return $this->details->category;
    }

    public function getSubCategory(): ?string
    {
        return $this->details->subcategory;
    }

    public function getRarity(): int
    {
        return $this->details->rarity;
    }

    public function getPrices(): array
    {
        return [
            'buy' => (int) $this->details->buy_price,
            'sell' => (int) $this->details->sell_price
        ];
    }

    public function getCarryLimit(): int
    {
        return $this->details->carry_limit;
    }

    public function getResearchPoints(): int
    {
        return $this->details->points;
    }

    public function getRecipes(): array
    {
        $recipes = [];

        foreach ($this->recipes as $recipe) {
            $firstIngredient = [
                'name' => $recipe->first_ingredient,
                'url' => route('item.show', $recipe->first_ingredient_id)
            ];

            // Item's can be crafted using only one ingredient
            $secondIngredient = null;
            if ($recipe->second_ingredient_id !== null) {
                $secondIngredient = [
                    'name' => $recipe->second_ingredient,
                    'url' => route('item.show', $recipe->second_ingredient_id)
                ];
            }

            $recipes[] = [
                'first_ingredient' => $firstIngredient,
                'second_ingredient' => $secondIngredient,
            ];
        }

        return $recipes;
    }
}
