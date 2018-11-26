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

class CardEventsController extends Controller
{
    /**
     * @var CardEventService
     */
    protected $service;

    /**
     * @var int
     */
    protected $page;

    /**
     * CardEventsController constructor.
     * @param CardEventService $service
     */
    public function __construct(CardEventService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    public function __invoke()
    {
        if (empty($this->page)) {
            $this->page = 1;
        }
        $data = $this->service->getAll()->toArray();
        $total = $this->service->getAllCount();
        $perPage = 3;
        $lastPage = $total / $perPage + 1;
        $returnData = array(
            'data' => $data,
            'total' => $total,
            'per_page' => $perPage,
            'current_page' => 1,
            'last_page' => $lastPage,
            'next_page_url' => '/api/card-events?page=' . $this->page,
            'prev_page_url' => null,
            "from" => 1,
            "to" => $lastPage
        );
        return $this->toJson($returnData);
    }

    public function hi()
    {
        $this->service->executeCardEvents(array());
    }

    public function tests()
    {
        Log::info('테스트 버튼을 클릭했다.');
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