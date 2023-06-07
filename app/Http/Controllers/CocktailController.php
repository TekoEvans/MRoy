<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails=Cocktail::all();
        return view('app.cocktail',compact('cocktails'));
    }

    public function admincocktail()
    {
        $cocktails=Cocktail::all();
        return view('appAdmin.products',compact('cocktails'));
    }


    public function index1()
    {
        $cocktails=Cocktail::inRandomOrder()->take(4)->get();
        return view('app.index',compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCocktail(Request $request)
    {
         $request->validate([
            'libelle' =>'required|max:225',
            'type_cocktail' =>'required|max:225',
            'description' =>'required|max:225',
            'prix' =>'required|max:5',
            'image1' =>'required|file|mimes:jpeg,png|max:2048',
            'image2' =>'required|file|mimes:jpeg,png|max:2048',

         ]);




         $cocktail= new Cocktail();
         $cocktail->libele=$request->input('libelle');
         $cocktail->type_cocktail=$request->input('type_cocktail');
         $cocktail->description=$request->input('description');
         $cocktail->prix=$request->input('prix');
         if( $request->hasfile('image1') && $request->hasfile('image2') ){
            $file1=$request->file('image1');
            $file2=$request->file('image2');
            $extension1=$file1->getClientOriginalExtension();
            $extension2=$file2->getClientOriginalExtension();
            $filename1=time().'.'.$extension1;
            $filename2=time().'.'.$extension2;
            $file1->move('adminAssets/images/product',$file1);
            $file2->move('adminAssets/images/product',$file2);
            $cocktail->photo1 = $file1;
            $cocktail->photo2= $file2;


        }else{
            return $request;
            $cocktail->iphoto1=' ';
            $cocktail->photo=' ';
        }

        $cocktail->save();
        $cocktails=Cocktail::orderBy('created_at', 'desc')->get();


        return view('appAdmin.products', compact('cocktails'))->with('message', "Cocktail ajouté avec succès");

    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cocktail $cocktail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

     Cocktail::where('id',$id )->delete();

     return redirect()->back()->with('message', "Un Cocktail #". $id." a été suprimer");
     ;
    }
}
