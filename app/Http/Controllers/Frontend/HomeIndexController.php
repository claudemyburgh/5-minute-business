<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;

use Designbycode\LaravelBusinessNameGenerator\Facades\BusinessNameGenerator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {



        return view('home', [
            'business_names' => BusinessNameGenerator::generateMultiple('all', 'default', 100)
        ]);
    }
}
