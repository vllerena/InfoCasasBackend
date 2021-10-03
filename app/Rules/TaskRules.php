<?php

namespace App\Rules;

use App\Models\Info\TaskAttr;

trait TaskRules
{
    public function nameRules($required = true, $nullable = false)
    {
        $required = $required ? 'required' : ($nullable ? 'nullable' : 'filled');
        return [$required, 'string', 'max:255', 'min:3'];
    }

    public function completedRules($required = true, $nullable = false)
    {
        $required = $required ? 'required' : ($nullable ? 'nullable' : 'filled');
        return [$required, 'boolean'];
    }

    public function attributeNames()
    {
        return [
            TaskAttr::NAME => 'name',
            TaskAttr::COMPLETED => 'status',
        ];
    }

}
