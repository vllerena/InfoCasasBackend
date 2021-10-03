<?php

namespace App\Services;

use App\Contracts\TaskContract;
use App\Models\Info\TaskAttr;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskService implements TaskContract
{

    public function filterTasks(Request $request, $quantity = '*')
    {
        $query = Task::orderBy(TaskAttr::CREATED_AT, 'ASC');
        if ($quantity == '*')
            return $query->get();
        return $query->paginate($quantity);
    }

    public function createTask(array $data): Task
    {
        $task = Task::create($data);
        return $task;
    }

    public function showTask(Task $task)
    {
        return response()->json($task);
    }

    public function editTask(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function destroyTask(Task $task)
    {
        $task->delete();
        return $task;
    }
}
