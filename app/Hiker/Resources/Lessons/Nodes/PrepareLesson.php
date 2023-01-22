<?php

namespace App\Hiker\Resources\Lessons\Nodes;

use Trail\Tracks\Node;
use Trail\Tracks\Nodes\Runnable;
use Trail\Tracks\Trips\Trip;

class PrepareLesson extends Node implements Runnable
{
    /**
     * Run the instanciated node.
     *
     * @param  \Hiker\Tracks\Trip  $trip
     * @return void
     */
    public function execute(Trip $trip)
    {
        $model = $trip->resource()->model();
        $this->set('users', json_encode($model->users()->pluck('trail_users.id')));
        $this->set('quarters', json_encode($model->quarters()->pluck('quarters.id')));
    }
}
