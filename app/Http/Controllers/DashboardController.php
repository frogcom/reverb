<?php

namespace App\Http\Controllers;

use App\Events\reverbEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    //


    public function reverb(){

        reverbEvent::dispatch(Auth::user());

        return 'test';
    }
}
