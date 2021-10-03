<?php

namespace App\ModelFilters;

use App\Models\Info\TaskAttr;
use EloquentFilter\ModelFilter;

class TaskFilter extends ModelFilter
{

    public function name($name)
    {
        return $this->where(TaskAttr::NAME, 'LIKE', "%$name%");
    }

    public function completed($completed)
    {
        $boolVal = boolval($completed);
        return $this->where(TaskAttr::COMPLETED, '=', $boolVal);
    }
}
