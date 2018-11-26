<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-05-17
 * Time: 오후 3:58
 */

namespace App\Http\Controllers;


use App\Services\AreaService;

class AreasController extends Controller
{
    /**
     * @var AreaService
     */
    protected $service;

    /**
     * MapsController constructor.
     * @param AreaService $service
     */
    public function __construct(AreaService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById($id)
    {
        return $this->toJson($this->service->getById($id));
    }

    /**
     * @param int $mapId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMapAreas(int $mapId){
        return $this->toJson($this->service->getMapAreas($mapId)->toArray());
    }
}