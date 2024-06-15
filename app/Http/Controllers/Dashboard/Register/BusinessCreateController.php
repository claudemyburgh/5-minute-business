<?php

	namespace App\Http\Controllers\Dashboard\Register;

	use App\Http\Controllers\Controller;
    use Illuminate\View\View;

    class BusinessCreateController extends Controller
	{


        public function __invoke(): View
        {
            return view('dashboard.register.business.create');
        }
    }
