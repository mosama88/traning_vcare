<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    use HasFactory;


    protected $table = 'services';
    protected $fillable = ['name', 'speciality_id'];


    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }
}
