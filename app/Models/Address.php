<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Address extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'thana_id',
        'district_id'
    ];

    public function student(){
        return $this->hasMany(Student::class);
    }
}
