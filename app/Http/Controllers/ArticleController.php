<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function why()
    {
        return view('layouts.why');
    }
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('articles.index'), $filename);
            $data['photo'] = 'articles.index/' . $filename;
        }
    
        // Create a new Stagiare with the validated data
        Article::create($data);
        return redirect()->route('articles.index')->with('success', 'Article has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.detail', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        // Find the famille by ID
        $article = Article::findOrFail($id);
        // Pass the famille to the view
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Find the Stagiare with the given ID
    $article = Article::findOrFail($id);
    // Validate the incoming data
    $data = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'required',
            'prix' => 'required',
            'description' => 'required',
    ]);

    // If a new photo is uploaded, update the photo field
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move(public_path('articles.index'), $filename);
        $data['photo'] = 'articles.index/' . $filename;
    }
    // Update the Stagiare record with the new data
    $article->update($data);
    // Redirect to the index page with a success message
    return redirect()->route('articles.index')->with('success', 'Article has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article has been deleted successfully');
    }
}
