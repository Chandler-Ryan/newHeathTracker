<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyRecord extends Model
{
    use HasFactory;
    protected $guarded = '';

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['workouts'];

    public function workouts(){
        return $this->hasMany(Workout::class);
    }
}
