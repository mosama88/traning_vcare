<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTitle extends Model
{
    //
    use HasFactory;


    protected $table = 'doctor_titles';
    protected $fillable = ['name'];


    //public function {{name}}{
    //return $this->belongsTo(DoctorTitle,{{relation}})
    //}
}