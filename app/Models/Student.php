<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;


class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'thana_id',
        'district_id'
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }
}
