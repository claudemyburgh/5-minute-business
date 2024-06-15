<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('home');
    }
}
