<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SolubleFiberList;
use App\Models\InsolubleFiberList;


class DietaryFiberListController extends Controller
{
    //Dietary-fiber-listページの表示
    public function list()
    {
        $soluble_fiber_list = SolubleFiberList::all();
        $insoluble_fiber_list = InsolubleFiberList::all();

        return view('dietary_fiber_list', compact('soluble_fiber_list', 'insoluble_fiber_list'));
    }
}