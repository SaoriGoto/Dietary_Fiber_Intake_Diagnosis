<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TopController extends Controller
{
    //Top page display
    public function top()
    {
        return view('top');
    }
}