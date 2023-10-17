<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaryFiberData extends Model
{
    use HasFactory;

    protected $table = 'dietary_fiber_data';
    protected $primaryKey = 'id';
}