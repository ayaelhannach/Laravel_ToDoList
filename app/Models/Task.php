<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

   
    protected $fillable = ['title', 'description', 'is_completed'];

    protected $attributes = [
        'is_completed' => false,
    ];
    public function scopeIncomplete($query)
    {
        return $query->where('is_completed', false);
    }
    public function scopeCompleted($query)
    {
        return $query->where('is_completed', true);
    }

    public function getStatusAttribute()
    {
        return $this->is_completed ? 'Completed' : 'Incomplete';
    }
}
