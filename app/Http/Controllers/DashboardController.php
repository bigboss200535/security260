<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {   
        $today = date('Y-m-d');

        $current_hour = Carbon::now()->format('H');

            if($current_hour>=0 && $current_hour<=12)
            {
                $greeting = 'Good Morning';
            }
            elseif ($current_hour>=12 && $current_hour<=18)
            {
                $greeting = 'Good Afternoon';
            }
            elseif ($current_hour>=18 && $current_hour<=24) 
            {
                $greeting = 'Good Evening';
            }
            else{
                $greeting = 'Hello!';
            }

        return view('dashboard', compact('greeting'));
    }
}
