<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable=['titreForum', 'description'];

    public function sujets()
    {
        return $this->hasMany  (Sujet::class);
 }
}
