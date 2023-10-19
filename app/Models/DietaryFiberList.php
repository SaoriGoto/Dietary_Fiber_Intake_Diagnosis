<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaryFiberList extends Model
{
    use HasFactory;

    protected $table = 'dietary_fiber_lists';
    protected $primaryKey = 'id';
}
