<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-09-29
 * Time: 오후 10:51
 */

namespace App\Services;


use App\Models\CardEvent;
use App\Repositories\CardEventRepository;

class CardEventService extends Service
{
    /**
     * @var CardEventRepository
     */
    protected $repository;

    public function executeCardEvents(array $cardEvents)
    {
        // run card event in order

        /** @var CardEvent $cardEvent */
        foreach ($cardEvents as $cardEvent) {
            $this->payResource($cardEvent);
            $this->runStory($cardEvent);
        }
    }

    private function payResource(CardEvent $cardEvent)
    {
        //ResourceService->pay();
    }

    private function runStory(CardEvent $cardEvent)
    {

    }
}