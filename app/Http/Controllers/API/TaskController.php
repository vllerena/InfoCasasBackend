<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\EditTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Contracts\TaskContract;

class TaskController extends Controller
{
    private TaskContract $taskService;

    public function __construct(TaskContract $taskService)
    {
        $this->taskService = $taskService;
    }

    public function filterTasks(Request $request)
    {
        $tasks = $this->taskService->filterTasks($request, 15);
        return response()->json($tasks);
    }

    public function createTask(CreateTaskRequest $request)
    {
        $task = $this->taskService->createTask($request->validated());
        return response()->json($task);
    }

    public function showTask(Task $task)
    {
        return response()->json($task);
    }

    public function editTask(EditTaskRequest $request, Task $task)
    {
        $this->taskService->editTask($task, $request->validated());
        return response()->json($task);
    }

    public function destroyTask(Task $task)
    {
        $this->taskService->destroyTask($task);
        return response()->json([], 204);
    }
}
