<?php

namespace App\Models;

class ProjectItem extends BaseModel
{
    // TYPE_CATEGORY?
    // TYPE_UMBRELLA_TASK?
    // TYPE_TASK

    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function parent() {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function children() {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function notes() {
        //return $this->hasMany(Note::class);
    }


}