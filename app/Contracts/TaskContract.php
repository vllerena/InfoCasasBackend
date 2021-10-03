<?php

namespace App\Contracts;

use Illuminate\Http\Request;
use App\Models\Task;

interface TaskContract
{
    public function filterTasks(Request $request, $quantity = '*');

    public function createTask(array $data): Task;

    public function showTask(Task $task);

    public function editTask(Task $task, array $data);

    public function destroyTask(Task $task);
}
