<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsolubleFiberList extends Model
{
    use HasFactory;

    protected $table = 'insoluble_fiber_lists';
    protected $primaryKey = 'id';
}
