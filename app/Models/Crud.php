<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $table='employee';  
    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'designation',
        'organisation'
    ];
}
