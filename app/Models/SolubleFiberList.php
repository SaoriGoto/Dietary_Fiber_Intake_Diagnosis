<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolubleFiberList extends Model
{
    use HasFactory;

    protected $table = 'soluble_fiber_lists';
    protected $primaryKey = 'id';
}
