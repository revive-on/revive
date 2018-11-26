<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Repositories;


class CardEventRepository extends Repository
{
    public function getNewEventDeck()
    {
        $data = $this->model->inRandomOrder()->take(4)->get()->toArray();
        return $data;
    }

    public function getAllCount()
    {
        $data = $this->model->count();
    }
}