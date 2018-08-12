<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Http\Controllers;


use App\Models\Event;
use App\Repositories\EventRepository;

class EventsController extends Controller
{
    /**
     * @var EventRepository
     */
    protected $repository;

    /**
     * EventsController constructor.
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        parent::__construct();
        $this->repository = new EventRepository($event);
    }

    public function show()
    {
        return $this->repository->pickTurnEventList();
    }
}