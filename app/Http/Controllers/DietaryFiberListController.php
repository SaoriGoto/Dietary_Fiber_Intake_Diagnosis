<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SolubleFiberList;

class DietaryFiberListController extends Controller
{
    //Dietary-fiber-list page display
    public function list()
    {
        $soluble_fiber_list = SolubleFiberList::all();
        return view('dietary_fiber_list', compact('soluble_fiber_list'));
    }
}