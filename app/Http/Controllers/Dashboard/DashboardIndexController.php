<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardIndexController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws \Exception
     */
    public function __invoke(Request $request): View
    {

        return view('dashboard.index', [
            'companies' => auth()->user()->companies()->get()
        ]);
    }
}
