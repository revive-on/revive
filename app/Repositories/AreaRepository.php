<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Repositories;


use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class AreaRepository extends Repository
{
    /**
     * @var Area
     */
    protected $model;

    public function __construct(Area $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function getById($id)
    {
        return $this->show($id);
    }

    /**
     * @param array $where
     * @return \Illuminate\Support\Collection
     */
    public function get(array $where)
    {
        return $this->model->where($where)->get();
    }
}