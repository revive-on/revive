<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-09-29
 * Time: 오후 10:51
 */

namespace App\Services;


use App\Models\Map;
use App\Repositories\AreaRepository;
use App\Repositories\RepositoryInterface;

class AreaService extends Service
{
    /**
     * @var AreaRepository
     */
    protected $repository;

    public function __construct(AreaRepository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param int $mapId
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection
     */
    public function getMapAreas(int $mapId){
        return Map::findOrFail($mapId)->areas()->get();
    }
}