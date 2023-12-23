<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Address extends Model
{
    use HasFactory;


    protected $fillable = [
        'thana',
        'district'
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
