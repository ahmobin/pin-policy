<?php

namespace AhMobin\PinPolicy\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PinHistory extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class);
    }
}
