<?php

namespace App\Repositories\Monster;

use App\Repositories\BaseRepositoryInterface;
use App\Sources\Monster\MonsterSource;

class MonsterRepository implements BaseRepositoryInterface
{
    private MonsterSource $src;

    public function __construct(MonsterSource $src)
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
            'habitats' => $this->src->getHabitats($id, $language),
            'rewards' => $this->src->getRewards($id, $language),
            'breaks' => $this->src->getBreaks($id, $language),
            'hitzones' => $this->src->getHitzones($id, $language)
        ];
    }
}
