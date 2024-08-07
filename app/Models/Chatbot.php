<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chatbot extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'estado'];

    public function flows()
    {
        return $this->hasMany(Flow::class, 'id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
