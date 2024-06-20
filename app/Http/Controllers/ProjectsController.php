<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProjectsController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ProjectResource::collection(Project::all());
    }

    /**
     * @param CreateProjectRequest $request
     * @return ProjectResource
     */
    public function store(CreateProjectRequest $request): ProjectResource
    {
        $project = Project::query()->create($request->all());
        return new ProjectResource($project);
    }

}
