<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TopController extends Controller
{
    //Topページの表示
    public function top()
    {
        return view('top');
    }
}