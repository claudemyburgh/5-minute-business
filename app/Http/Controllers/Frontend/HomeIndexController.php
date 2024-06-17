<?php

    namespace App\Http\Controllers\Frontend;

    use App\Http\Controllers\Controller;
    use Designbycode\LaravelBusinessNameGenerator\Facades\BusinessNameGenerator;
    use Illuminate\View\View;

    class HomeIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {


            return view('home', [
                'business_names' => BusinessNameGenerator::amount(100)->generate()->get()
            ]);
        }
    }
