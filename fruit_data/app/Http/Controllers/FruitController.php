<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    // Make Table Page Appear
    public function index()
    {
        // Take Data
        $fruit = Fruit::all();
        return view('table', compact(['fruit']));
    }

    // Make Input page Appear
    public function create()
    {
        return view('input');
    }

    // Create Progress
    public function store(Request $request)
    {
        $fruit = Fruit::create($request->except(['_token']));
        return redirect('table');
    }

    // Make Edit Page Appear
    public function edit($id)
    {
        $fruit = Fruit::find($id);
        return view('update.edit', compact(['fruit']));
    }

    // Update Progress 
    public function update($id, Request $request)
    {
        $fruit = Fruit::find($id);
        $fruit -> update($request->all());
        return redirect('table');
    }

    // Delete Progress
    public function destroy($id, Request $request)
    {
        $fruit = Fruit::find($id);
        $fruit -> delete();
        return redirect('table');
    }
}
