<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Mapper\Weapon\WeaponIndexMapper;
use App\Http\Controllers\Mapper\Weapon\WeaponShowMapper;
use App\Repositories\Weapon\WeaponRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WeaponController extends Controller
{
    private Request $request;
    private WeaponRepository $weaponRepository;

    public function __construct(
        Request $request,
        WeaponRepository $weaponRepository
    ) {
        $this->request = $request;
        $this->weaponRepository = $weaponRepository;
    }

    public function index(): JsonResponse
    {
        $weapons = $this->weaponRepository->index(App::getLocale());

        $mapper = new WeaponIndexMapper($weapons);
        return new JsonResponse($mapper->get());
    }

    public function show(): JsonResponse
    {
        $weapon = $this->weaponRepository->show($this->request->id, App::getLocale());

        $mapper = new WeaponShowMapper($weapon);
        return new JsonResponse($mapper->get());
    }
}
