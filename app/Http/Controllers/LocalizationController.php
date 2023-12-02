<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index($lang = 'en')
    {
        App::setLocale($lang);
        $data = Localization::all();
        return view('index', compact('data','lang'));
    }
}
