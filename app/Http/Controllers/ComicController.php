<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $bluesections = config('bluesections');
        return view('comics.index', compact('comics', 'bluesections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($form_data);
        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);  
        return view('comics.edit', compact ('comic')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = $this->validation($request->all());
        $comic = Comic::find($id);
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index'); 
    }


    // per la validazione dei dati
    private function validation($data){
        $validator = Validator::make($data,
        [
            'title' => 'required|max:100',
            'description' => 'required',
            'price' => 'required|max:10',
            'thumb' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required',
        ],
        [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.max' => 'Il titolo deve avere massimo 100 caratteri',
            'description.required' => 'La descrizione è obbligatoria!',
            'price.required' => 'Il prezzo è obbligatorio!',
            'price.max' => 'Il prezzo deve avere massimo 10 cifre',
            'thumb.required' => 'L\'immagine è obbligatoria!',
            'series.max' => 'La serie deve avere massimo 100 caratteri',
            'series.required' => 'La serie è obbligatoria!',
            'sale_date.required' => 'La data di uscita è obbligatoria!',
            'type.required' => 'Il tipo è obbligatorio!',
            'artists.required' => 'Gli artisti sono obbligatori!',
            'writers.required' => 'Gli scrittori sono obbligatori!',
            

        ])->validate();

        return $validator;
    }
}
