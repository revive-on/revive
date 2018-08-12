<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Repositories;


class EventRepository extends Repository
{
    public function pickTurnEventList()
    {
        $data = $this->model->take(4)->get()->toArray();
        return $this->toJson($data);
    }
}