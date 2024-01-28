<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Citation;
use App\Http\Requests\StoreCitationRequest;

class CitationController extends Controller
{
    public function index()
    {

        $citationes = Citation::with('category')->orderBy("id", "DESC")->paginate(12);
        return view('citations.index', compact('citationes'));

    }

    public function create()
    {
        $categories = Category::all();
        return view('citations.create', compact('categories'));
    }

    public function store(StoreCitationRequest $request)
    {
        $image_path = $request->hasFile('image') ? $request->file('image')->store('citations', 'public') : null;

        Citation::create(array_merge($request->validated(), ['image' => $image_path]));

        // return back()->with('success', 'Citation ajoutée avec succès');
        return redirect()->route('citations.index')->with('success','Citation créée avec succès');
    }

    public function destroy(Citation $citatione)
    {
        $citatione->delete();
        return back()->with('success', 'Citation Supprimée avec succès');
    }
}

