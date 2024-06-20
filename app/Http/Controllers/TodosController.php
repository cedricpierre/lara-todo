<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TodosController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return TodoResource::collection(Todo::all());
    }

    /**
     * @param CreateTodoRequest $request
     * @return TodoResource
     */
    public function store(CreateTodoRequest $request): TodoResource
    {
        $todo = Todo::query()->create($request->all());
        return new TodoResource($todo);
    }

    /**
     * @param Todo $todo
     * @return TodoResource
     */
    public function show(Todo $todo): TodoResource
    {
        $todo->load('project');
        $todo->newQuery()->increment('total_views',1);
        return new TodoResource($todo);
    }

    /**
     * @param UpdateTodoRequest $request
     * @param Todo $todo
     * @return int
     */
    public function update(UpdateTodoRequest $request, Todo $todo): int
    {
        return $todo->update($request->all());
    }

    /**
     * @param Todo $todo
     * @return int
     */
    public function destroy(Todo $todo): int
    {
        return $todo->delete();
    }
}
