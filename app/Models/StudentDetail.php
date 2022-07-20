<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    protected $fillable = [
        'id',
        'fullname',
        'namewithinitial',
        'student_id',
        'address',
        'dob',
        'gender',
        'photo',
        'registereddate',
        'status',
    ];

    public function guardians(){
        return $this->hasOne(GuardianDetail::class,'student_details_id');
    }
}
