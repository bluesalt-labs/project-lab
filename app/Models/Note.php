<?php

namespace App\Models;

class Note extends BaseModel
{


    public function parent() {
        //return $this->belongsTo(/*$this->parentType or default*/)
    }

    // just text, does not have tasks
}