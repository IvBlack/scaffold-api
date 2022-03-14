<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'description', 'complexity', 'minPlayers', 'maxPlayers', 'isActive'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
