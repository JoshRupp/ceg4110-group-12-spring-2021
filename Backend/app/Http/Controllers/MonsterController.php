<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Mapper\Monster\MonsterIndexMapper;
use App\Http\Controllers\Mapper\Monster\MonsterShowMapper;
use App\Repositories\Monster\MonsterRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MonsterController extends Controller
{
    private Request $request;
    private MonsterRepository $monsterRepository;

    public function __construct(Request $request, MonsterRepository $monsterRepository)
    {
        $this->request = $request;
        $this->monsterRepository = $monsterRepository;
    }

    public function index(): JsonResponse
    {
        $monsters = $this->monsterRepository->index(App::getLocale());

        $mapper = new MonsterIndexMapper($monsters);
        return new JsonResponse($mapper->get());
    }

    public function show(): JsonResponse
    {
        $monster = $this->monsterRepository->show($this->request->id, App::getLocale());

        $mapper = new MonsterShowMapper($monster);
        return new JsonResponse($mapper->get());
    }
}
