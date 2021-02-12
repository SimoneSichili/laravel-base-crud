<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    private $bookValidation = [
        'brand' => 'required|max:30',
        'type' => 'required|max:20',
        'price' => 'required|numeric',
        'cl' => 'required|numeric',
        'degrees' => 'required|numeric',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $beers = Beer::all();
        // dd($beers);
        return view("beers.index", compact("beers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("beers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //validazione campi
        $request->validate($this->bookValidation);
        
        $beer = new Beer();

        // metodo lungo
        // $beer->brand = $data["brand"];
        // $beer->type = $data["type"];
        // $beer->price = $data["price"];
        // $beer->cl = $data["cl"];
        // $beer->degrees = $data["degrees"];

        // metodo veloce 
        $beer->fill($data);

        $beer->save();

        
        return redirect()->route('beers.index');

        // dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        // $beer = Beer::find($id);
        // dd($beer);
        return view("beers.show", compact("beer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view("beers.edit", compact("beer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data= $request->all();
        $request->validate($this->bookValidation);

        $beer->update($data);
        return redirect()->route('beers.index')->with("successAlert", "Birra n.{$beer->id} {$beer->brand} aggiornata correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route('beers.index')->with("warningAlert", "Birra n.{$beer->id} {$beer->brand} eliminata correttamente");
    }
}
