<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable=['nomTopic', 'tag','groupe', 'forum_id'];

    public function forum()
    {
        return $this->belongsTo (Forum::class);
    }
}
