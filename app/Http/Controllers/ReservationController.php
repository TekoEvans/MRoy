<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cocktail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResevationMailController;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexadmin()
    {
        $cocktailcount=Cocktail::all()->count();

        $cocktail=Cocktail::all();
        $reservation = Reservation::all();
        $reservationrecents = Reservation::latest()->take(4)->get();
        $coctailrecents = Cocktail::latest()->take(3)->get();
        $reservationCount = Reservation::all()->count();
        $users= User::all();
        $userscount= User::all()->count();
        return view('appAdmin.index', compact('users',
                                             'reservationCount',
                                             'reservation',
                                             'cocktail',
                                             'cocktailcount',
                                             'userscount',
                                            'reservationrecents',
                                            'coctailrecents' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AllRervation()
    {
        $reservation = Reservation::where('user_id', Auth::user()->id)->get();
        $reservationCount = Reservation::where('user_id', Auth::user()->id)->count();


        return view('app.reservation',  compact('reservation', 'reservationCount' ));

    }
    public function AllRervations()
    {
        $reservation = Reservation::all();
        $reservationCount = Reservation::all()->count();


        return view('app.reservation',  compact('reservation', 'reservationCount' ));

    }
    public function AllRervationsadmin()
    {
        $reservations= Reservation::all();
        $reservationCount = Reservation::all()->count();


        return view('appAdmin.order-list',  compact('reservations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation =  new Reservation();
        $reservation->description =$request->description;
        $reservation->type_cocktail =$request->type_cocktail;
        $reservation->libelle=$request->libelle;
        $reservation->user_id=Auth::user()->id;
        $reservation->lieu=$request->lieu;
        $reservation->telephone = $request->telephone;
        $reservation->date= $request->Date;
        $reservation->nbrPeople=$request->nbrPeople;
        $reservation->save();

        $mail= new  ResevationMailController();
         $mail->bar($reservation);
        return redirect('/reservation')->with('message', "votre reservation a  bien été envoyer et un mail de ");

    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function Accept($id)
    {

     Reservation::where('id',$id )->update(['isAccept' => 1]);

     return redirect()->back()->with('message', 'vous avez accepeter une demande');;
    }

    public function Refus($id)
    {

     Reservation::where('id',$id )->update(['isAccept' => 0]);

     return redirect()->back()->with('message', 'vous avez refuser une demande');
    }
    public function Annuler($id)
    {

     Reservation::where('id',$id )->update(['isAccept' => 3]);

     return redirect()->back()->with('message', 'vous avez  vous annuler une resevation');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
