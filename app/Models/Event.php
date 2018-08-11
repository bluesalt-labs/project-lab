<?php

namespace App\Models;

class Event extends BaseModel
{



    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function parent() {
        //return $this->belongsTo(/*$this->parentType or default*/), although....idk
    }

    public function tasks() {
        //return $this->hasMany(ProjectItem::class, ) has many where , or are we getting to where we need pivot tables?
    }

    public function projectItems() {
        // return $this->hasMany()
    }
}