<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale($request)
    {
        if (in_array($request, ['en', 'cs'])) {
            App::setLocale($request);
            Session::put('locale', $request);
        }
        return back();
    }
}