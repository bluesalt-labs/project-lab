<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{


    public function tasks() { // directTasks?
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}