<?php

namespace App\Http\Requests\Task;

use App\Models\Info\TaskAttr;
use App\Rules\TaskRules;
use Illuminate\Foundation\Http\FormRequest;

class EditTaskRequest extends FormRequest
{
    use TaskRules;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            TaskAttr::NAME => $this->nameRules(false, true),
            TaskAttr::COMPLETED => $this->completedRules(false, true),
        ];
    }

    public function attributes()
    {
        return $this->attributeNames();
    }
}
