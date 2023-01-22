<?php

namespace App\Hiker\Resources\Lessons\Nodes;

use Trail\Tracks\Node;
use Trail\Tracks\Nodes\Saveable;
use Trail\Tracks\Trips\Trip;

class SaveLesson extends Node implements Saveable
{
    /**
     * The model
     *
     * @var App\Lessons;
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

        $this->model->title = $bag->title;
        $this->model->year_id = $bag->year_id;
        $this->model->hours = $bag->hours;
        $this->model->credits = $bag->credits;
        $this->model->body = $bag->body;

        $this->model->save();

        $this->model->quarters()->sync(json_decode($bag->quarters));
        $this->model->users()->sync(json_decode($bag->users));
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
