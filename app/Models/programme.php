<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    protected $table='tasks';
    protected $fillable = [
        'userId',
        'name',
        'programme',
        'title',
        'division',
        'description',
        'img',
    ];
    public function type()
    {
        return $this->belongsToMany(type::class);
    }
}
