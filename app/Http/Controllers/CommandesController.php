<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = \App\Commande::orderBy('created_at', 'DESC')->get();
        return view('commandes.index', compact('commandes'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commandes = new Commande();
        $commandes->num_commande = $request->input('num_commande');
        $commandes->pseudo_client = $request->input('pseudo_client');
        $commandes->liste_produits = $request->input('liste_produits');
        $commandes->quantite_produits = $request->input('quantite_produits');
        $commandes->price_commande = $request->input('price_commande');
        $commandes->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commandes = \App\Commande::find($id);//on recupere la comm
        return view('commandes.edit', compact('commandes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $commandes = \App\Commande::find($id);
        if($commandes){
            $commandes->update([
                'num_commande' => $request->input('num_commande'),
                'pseudo_client' => $request->input('price'),
                'liste_produits' => $request->input('liste_produits'),
                'quantite_produits' => $request->input('quantite_produits'),
                'price_commande' => $request->input('price_commande'),
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commandes = Commande::find($id);
        if($commandes)
            $commandes->delete();
        return redirect()->route('commandes.index');
    }
}
