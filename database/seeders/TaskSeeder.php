<?php

namespace Database\Seeders;

use App\Models\Info\TaskAttr;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            TaskAttr::NAME => 'Create Info Casas Backend in Laravel',
            TaskAttr::COMPLETED => false,
        ]);

        Task::create([
            TaskAttr::NAME => 'Create Info Casas Frontend in React',
            TaskAttr::COMPLETED => true,
        ]);
    }
}
