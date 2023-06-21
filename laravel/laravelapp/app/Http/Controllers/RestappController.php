<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restdata;

class RestappController extends Controller
{
    public function index()
    {
        $items = Restdata::all();
        return $items->toArray();
    }

    public function create()
    {
        return view('rest.create');
    }

    public function store(Request $request)
    {
        $restdata = new Restdata;
        $form = $request->all();
        unset($form['_token']);
        $restdata->fill($form)->save();
        return redirect('/rest');
    }

    public function show(string $id)
    {
        $item = Restdata::find($id);
        return $item->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
