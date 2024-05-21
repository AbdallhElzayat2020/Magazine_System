<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use GuzzleHttp\Psr7\Request;

class SettingController extends Controller
{
    public function update(Request $request, Setting $setting)
    {
        // $setting = Setting::all();

        // return view('dashboard.settings', compact('setting'));
    }
}
