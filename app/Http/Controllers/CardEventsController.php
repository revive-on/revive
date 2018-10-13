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
use App\Services\CardEventService;
use Illuminate\Support\Facades\Log;
use Spatie\Activitylog\Models\Activity;

class CardEventsController extends Controller
{
    /**
     * @var CardEventService
     */
    protected $service;

    /**
     * CardEventsController constructor.
     * @param CardEventService $service
     */
    public function __construct(CardEventService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    public function hi()
    {
        $this->service->executeCardEvents(array());
    }

    public function tests()
    {
        Log::info('하이');
        Log::info('헬로');
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