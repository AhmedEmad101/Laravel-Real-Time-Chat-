<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [


        'OwnerID',
        'Followers',
        'Following',
        'Viewers',
        'Photo'

    ];
protected function User()
{
    return $this->belongsTo(User::class);
}
protected function Education()
{
    return $this->hasOne(Education::class,'ProfileID');
}
}
