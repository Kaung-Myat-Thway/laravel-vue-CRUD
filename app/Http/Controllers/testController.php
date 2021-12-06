<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class testController extends Controller
{
    public function index()
    {
        Log::info('hello');
        
    }
}
