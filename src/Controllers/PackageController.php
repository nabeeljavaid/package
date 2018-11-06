<?php

namespace Nabeeljavaid\Package\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PackageController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('package::package.index', compact('current_time'));
    }

}
