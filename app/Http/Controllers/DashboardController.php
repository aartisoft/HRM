<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        return view('admin.dashboard',$data);
    }
}
