<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class OrderList extends Model
{
    use HasFactory;


    protected $fillable =[
        'oname',
        'oaddress',
        'ocity',
        'ocountry',
        'ocode',
        'oitems',
        'user_id',
        'product_id'
    ];


    /**
     * Get the user associated with the OrderList
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


     /**
     * Get the Product associated with the OrderList
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
