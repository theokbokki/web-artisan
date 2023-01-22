<?php

namespace App\Hiker\Resources\Lessons\Nodes;

use Trail\Tracks\Node;
use Trail\Tracks\Nodes\Result;
use Trail\Tracks\Nodes\Runnable;
use Trail\Tracks\Trips\Trip;

class Delete extends Node implements Runnable
{
    /**
     * Run the instanciated node.
     *
     * @param  \Hiker\Tracks\Trip  $trip
     * @return void
     */
    public function execute(Trip $trip)
    {
        if ($model = $trip->resource()->model()) {
            $model->delete();
        }
    }

    /**
     * Close current tab.
     */
    public function result(Result $result)
    {
        $result->closeTab();
    }
}
