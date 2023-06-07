<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use App\Models\Reservation;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ResevationMailController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('bar');
    }

    // public function foo()
    // {
    //      if(!Gate::allows('acess-admin')){
    //         abort('403');
    //      }
    //      return view('app.add-resevation.foo');
    // }

    public function bar( Reservation $reservation )
    {
        $user=Auth::user();
        Mail::to($user->email)->send(new ReservationMail($user,$reservation) );

       return redirect()->back();
    }
}
