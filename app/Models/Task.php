<?php

namespace App\Models;

use App\Models\Info\TaskAttr;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use Filterable;

    public const CREATED_AT = TaskAttr::CREATED_AT;
    public const UPDATED_AT = TaskAttr::UPDATED_AT;

    protected $table = TaskAttr::TABLE_NAME;

    protected $fillable = [
        TaskAttr::NAME,
        TaskAttr::COMPLETED,
    ];

    protected $casts = [
        TaskAttr::COMPLETED => 'boolean',
    ];
}
