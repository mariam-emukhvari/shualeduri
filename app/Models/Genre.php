<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
      'Genre_name'
    ];

    use HasFactory;

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
