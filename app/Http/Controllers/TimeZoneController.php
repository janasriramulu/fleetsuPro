<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TimeZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$input = $request->all();
        Session::put('timeZone', $request->input('timeZone'));
    }
}
