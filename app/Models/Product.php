<?php

namespace App\Models;

use App\Models\Image;
use App\Models\OrderList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'pname',
        'price',
        'titems',
    ]; 
    
    /**
     * Get the post's image.
     */

    // One to one polymorphism with image model

    
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');

    }
    
    /**
     * Get all of the orderLists for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function orderList()
    {
        return $this->hasMany(OrderList::class);
    }
}
