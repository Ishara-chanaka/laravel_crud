<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianDetail extends Model
{
    use HasFactory;
    protected $table = 'guardian_details';
    protected $fillable = [
        'id',
        'guarname',
        'address',
        'contactno',
        'relationship_id',
        'student_details_id',
        'nic',
        'status',
    ];

    public function getDataFromStudentId($id){
        return GuardianDetail::where( 'student_details_id', $id)->get();
    }
}
