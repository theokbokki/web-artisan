<?php

namespace App\Hiker\Resources\Users\Nodes;

use Trail\Tracks\Node;
use Trail\Tracks\Nodes\Saveable;
use Trail\Tracks\Trips\Trip;

class SaveUser extends Node implements Saveable
{
    /**
     * The model
     *
     * @var App\Users;
     */
    protected $model;

    /**
     * Run the saveable node
     *
     * @param  \Trail\Tracks\Trips\Trip  $trip
     * @return void
     */
    public function execute(Trip $trip)
    {
        $bag = $trip->baggage();

        $this->model = $trip->resource()->modelOrNew();

        $this->model->name = $bag->name;
        $this->model->username = $bag->username;
        $this->model->email = $bag->email;
        $this->model->password = $bag->password ? bcrypt($bag->password) : $this->model->password;
        $this->model->avatar = $bag->avatar;
        $this->model->excerpt = $bag->excerpt;
        $this->model->job = $bag->work;
        $this->model->body = $bag->about;

        $this->model->save();

        $this->model->roles()->sync(json_decode($bag->roles));
    }

    /**
     * Get the saved model
     *
     * @return mixed
     */
    public function model()
    {
        return $this->model;
    }
}
