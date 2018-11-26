<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-05-17
 * Time: 오후 3:58
 */

namespace App\Http\Controllers;


use App\Services\MapService;

class MapsController extends Controller
{
    /**
     * @var MapService
     */
    protected $service;

    /**
     * MapsController constructor.
     * @param MapService $service
     */
    public function __construct(MapService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    public function getById($id)
    {
        return $this->toJson(array($this->service->getById($id)));
    }
}