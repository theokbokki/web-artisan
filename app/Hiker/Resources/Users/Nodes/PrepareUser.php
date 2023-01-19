<?php

namespace App\Hiker\Resources\Users\Nodes;

use Trail\Tracks\Node;
use Trail\Tracks\Nodes\Runnable;
use Trail\Tracks\Trips\Trip;

class PrepareUser extends Node implements Runnable
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
        $this->set('roles', json_encode($model->roles()->pluck('role')));
    }
}
