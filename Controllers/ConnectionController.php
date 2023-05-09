<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function connection_welcome() {
        return view('connection_welcome');
    }

    public function connection_create_read() {
        return view('connection_create_read');
    }

    public function connection_mypage() {
        return view('connection_mypage');
    }

    public function connection_userlist(){
        return view('connection_userlist');
    }
}