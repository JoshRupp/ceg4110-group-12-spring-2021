<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Image\Image;
use App\Http\Requests\ImageShowRequest;
use App\Http\Requests\EquipmentImageRequest;
use App\Http\Requests\ItemImageRequest;
use App\Http\Requests\MonsterImageRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    public const DEFAULT_RARITY = 1;
    public const DEFAULT_COLOUR = 'white';

    private array $config;

    public function __construct()
    {
        $this->config = config('image');
    }

    public function svg(ImageShowRequest $request)
    {
        $type = $request->get('type');
        $colour = $request->get('colour') ? '#' . $request->colour : null;
        $name = $request->get('image');

        $config = $this->config['images'][$type];

        if ($config['base_name'] !== null) {
            $name = str_replace('NAME', strtolower($name), $config['base_name']);
        }

        $path = $this->config['base_path'] . $config['folder'] . "/$name.svg";

        if (!file_exists($path)) {
            // TODO: Format response better
            return new JsonResponse(['error' => 'Image not found.'], Response::HTTP_NOT_FOUND);
        }

        $image = new Image($path);

        return response($image->getFiltered($colour))->header('Content-type', 'image/svg');
    }

    public function monster(MonsterImageRequest $request): Response
    {
        $id = $request->route('id');

        $config = $this->config['images']['monster'];

        $path = $this->config['base_path'] . $config['folder'] ."/$id.png";
        return response(file_get_contents($path))->header('Content-type', 'image/png');
    }

    public function equipment(EquipmentImageRequest $request): Response
    {
        $equipment = $request->route('name');
        $rarity = $request->get('rarity') ?? self::DEFAULT_RARITY;

        $config = $this->config['images']['equipment'];

        $path = $this->config['base_path'] . $config['folder'] . "/$equipment/$rarity.png";
        return response(file_get_contents($path))->header('Content-type', 'image/png');
    }

    public function item(ItemImageRequest $request): Response
    {
        $item = $request->route('name');
        $colour = $colour = $request->get('colour') ?? self::DEFAULT_COLOUR;

        $config = $this->config['images']['item'];

        $path = $this->config['base_path'] . $config['folder'] . "/$item/$colour.png";

        return response(file_get_contents($path))->header('Content-type', 'image/png');
    }
}
