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
        'district_id',
        'status',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'thana_id');
    }
}
