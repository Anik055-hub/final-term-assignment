<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Add;

class busSummaryController extends Controller
{

	public function index()
    {
        $adds = Add::all();
        $users = User::all();
        return view('busSummary')->with(['adds'=>$adds])
                                 ->with(['users'=>$users]);
          
    }
    
    
    //
}
