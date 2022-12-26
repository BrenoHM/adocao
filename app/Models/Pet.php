<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'breed_id',
        'color',
        'phone',
        'birthday',
        'photo',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    // public function setBirthdayAttribute($date)
    // {
    //     return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    // }

    // public function getBirthdayAttribute()
    // {
    //     return Carbon::createFromFormat('Y-m-d', $this->attributes['birthday'])->format('d/m/Y');
    // }
}
