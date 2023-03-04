<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Get the parent imageable model (user or product).
     */
    
     //Create one to one polymorphism relation with User and Product 
    
     protected  $fillable = [
        'url',
        'imageable_id',
        'imageable_type',
    ];
    
    public function imageable()
    {
        return $this->morphTo();
    }
}
