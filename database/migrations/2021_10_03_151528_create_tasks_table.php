<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\TaskAttr;

class CreateTasksTable extends Migration
{
    private const TASK_TABLE = TaskAttr::TABLE_NAME;

    public function up()
    {
        Schema::create(self::TASK_TABLE, function (Blueprint $table) {
            $table->id(TaskAttr::ID);
            $table->string(TaskAttr::NAME);
            $table->boolean(TaskAttr::COMPLETED)->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TASK_TABLE);
    }
}
