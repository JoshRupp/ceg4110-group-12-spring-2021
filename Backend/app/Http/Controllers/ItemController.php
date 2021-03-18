<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Mapper\Item\ItemIndexMapper;
use App\Http\Controllers\Mapper\Item\ItemShowMapper;
use App\Repositories\Item\ItemRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ItemController
{
    private Request $request;
    private ItemRepository $itemRepository;

    public function __construct(Request $request, ItemRepository $itemRepository)
    {
        $this->request = $request;
        $this->itemRepository = $itemRepository;
    }

    public function index(): JsonResponse
    {
        $items = $this->itemRepository->index(App::getLocale());

        $mapper = new ItemIndexMapper($items);
        return new JsonResponse($mapper->get());
    }

    public function show(): JsonResponse
    {
        $item = $this->itemRepository->show($this->request->id,  App::getLocale());

        $mapper = new ItemShowMapper($item);
        return new JsonResponse($mapper->get());
    }
}
