<?php

namespace App\Models;

use App\Models\Image;
use App\Models\OrderList;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'uname',
        'lname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the user's image.
     */
    // One to one polymorphism with image model
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //  Many products relationships

  /**
   * Get all of the OrderList for the User
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function orderLists()
  {
      return $this->hasMany(OrderList::class);
  }
}
