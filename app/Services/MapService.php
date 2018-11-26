<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-09-29
 * Time: 오후 10:51
 */

namespace App\Services;


use App\Repositories\MapRepository;

class MapService extends Service
{
    /**
     * @var MapRepository
     */
    protected $repository;

    public function __construct(MapRepository $repository)
    {
        parent::__construct($repository);
    }
}