<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    // Dashboard 

    public function dashboardAnalytics(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        $carbon = Carbon::now();

        return view('/pages/dashboard', [
            'pageConfigs' => $pageConfigs,
            'carbon' => $carbon
        ]);
    }

}

