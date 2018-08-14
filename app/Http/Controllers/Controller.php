<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * return encoded json data
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function toJson(array $data)
    {
        $header = array(
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        );
        return response()->json($data, 200, $header, JSON_UNESCAPED_UNICODE);
    }
}
