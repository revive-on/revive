<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-08-12
 * Time: 오전 7:47
 */

namespace App\Http\Controllers;


use App\Models\CardEvent;
use App\Repositories\CardEventRepository;

class CardEventsController extends Controller
{
    /**
     * @var CardEventRepository
     */
    protected $repository;

    /**
     * CardEventsController constructor.
     * @param CardEvent $cardEvent
     */
    public function __construct(CardEvent $cardEvent)
    {
        parent::__construct();
        $this->repository = new CardEventRepository($cardEvent);
    }

    /**
     * list card event
     * @return \Illuminate\Http\JsonResponse
     */
    public function listCardEvents()
    {
        $data = $this->repository->getNewEventDeck();
        return $this->toJson($data);
    }

    /**
     * @param array $cardEvent
     */
    public function pickCardEvent(array $cardEvent)
    {
        // get by random
        $this->repository->update($cardEvent, $cardEvent['id']);
    }

    public function useCardEvent(array $cardEvent)
    {
        $this->repository->update($cardEvent, $cardEvent['id']);
    }

    public function getNewEvent()
    {
        $data = $this->repository->show(5)->toArray();
        return $this->toJson($data);
    }
}