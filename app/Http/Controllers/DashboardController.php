<?php

namespace App\Http\Controllers;

use App\Events\reverbEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //


    public function reverb(){

        reverbEvent::dispatch(Auth::user());

        return response()->json(['success' => true, 'message' => 'Message sent successfully']);
    }
}
