<?php

namespace App\Hiker\Resources\Lessons;

use App\Hiker\Resources\Lessons\Forms\LessonForm;
use App\Hiker\Resources\Lessons\Nodes\PrepareLesson;
use App\Hiker\Resources\Lessons\Nodes\SaveLesson;
use Hiker\Tracks\FlowsRepository;
use Trail\Http\Requests\ResourceRequest;

class LessonFlows extends FlowsRepository
{
    /**
     * Returns the "draft" roadmap definition.
     * Draft is only used by graphical UI clients and is used to prepare
     * a flow's initial value(s).
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function draft()
    {
        return $this->from(ResourceRequest::class)
            ->setTransitory()
            ->show(LessonForm::class)
            ->chain('create');
    }

    /**
     * Returns the "create" roadmap definition.
     * Create is used by all clients (API included) for instanciating
     * a concrete flow with its initial value(s).
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function create()
    {
        return $this->from(ResourceRequest::class)
            ->save(SaveLesson::class)
            ->chain('read');
    }

    /**
     * Returns the "edit" roadmap definition.
     * Edit is only used by graphical UI clients and is used to prepare
     * a flow's updated value(s).
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function edit()
    {
        return $this->from(ResourceRequest::class)
            ->setTransitory()
            ->run(PrepareLesson::class)
            ->show(LessonForm::class)
            ->chain('update');
    }

    /**
     * Returns the "update" roadmap definition.
     * Update is used by all clients (API included) for setting
     * new values in a concrete flow.
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function update()
    {
        return $this->from(ResourceRequest::class)
            ->save(SaveLesson::class)
            ->chain('read');
    }

    /**
     * Returns the "read" (single resource) roadmap definition.
     * Read is used by all clients (API included) for displaying
     * or returning a flow's content.
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function read()
    {
        return $this->from(ResourceRequest::class)
            ->setTransitory()
            ->show(Views\SingleView::class);
    }

    /**
     * Returns the "remove" roadmap definition.
     * Edit is only used by graphical UI clients and is used to prepare
     * a flow's delete flow.
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function remove()
    {
        return $this->from(ResourceRequest::class)
            ->setTransitory()
            ->show(Forms\Remove::class)
            ->chain('delete');
    }

    /**
     * Returns the "delete" roadmap definition.
     * Delete is used by all clients (API included) for destroying
     * a flow and its related contents.
     *
     * @return Hiker\Track\Roadmap|null
     */
    public function delete()
    {
        return $this->from(ResourceRequest::class)
            ->run(Nodes\Delete::class)
            ->chain('index');
    }
}
