<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StrawpollsController extends Controller
{
    public function showMyStrawpolls()
    {
        $user = Auth::user();

        $myStrawpolls = DB::table('strawpoll')->where('creator', $user->username)->get(); // Gauna visus registruotus vartotojus isskyrus save

        return view('pages.my-strawpolls')->with('myStrawpolls', $myStrawpolls);
    }
}
