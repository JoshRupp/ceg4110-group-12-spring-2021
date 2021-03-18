<?php

namespace App\Http\Controllers\Mapper\Item;


class ItemIndexMapper
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function get(): array
    {
        $items = [];
        foreach ($this->items as $item) {
            $url = route('item.show', $item->id);

            $items[] = [
                'id' => (int) $item->id,
                'name' => $item->name,
                'category' => $item->category,
                'url' => $url
            ];
        }

        return $items;
    }
}
