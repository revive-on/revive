<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Repositories;


use App\Models\Map;
use Illuminate\Database\Eloquent\Model;

class MapRepository extends Repository
{
    /**
     * @var Map
     */
    protected $model;

    public function __construct(Map $model)
    {
        parent::__construct($model);
    }

    public function getById($id)
    {
        return $this->show($id);
    }
}