<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-09-29
 * Time: 오후 11:03
 */

namespace App\Services;


use App\Repositories\RepositoryInterface;

class Service
{
    /**
     * @var RepositoryInterface
     */
    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}