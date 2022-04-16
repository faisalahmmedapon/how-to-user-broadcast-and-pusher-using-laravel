<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        event(new TaskEvent('Hi how are you?'));
    }



    public function listen(){

        return view('listen');
    }
}
