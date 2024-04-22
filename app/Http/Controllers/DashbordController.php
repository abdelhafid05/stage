<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dash()
    {
        return view('dashbord.index');
    }
    public function home()
    {
        $products = Article::all();
        return view('dashbord.home',['products'=>$products]);
    }
    
    public function create()
    {
        return view('dashbord.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
        return redirect()->route('dashbord.home')->with('success', 'Article has been created successfully.');
    }
    public function edit(int $id)
    {
        // Find the famille by ID
        $product = Article::findOrFail($id);
        // Pass the famille to the view
        return view('dashbord.edit', ['product' => $product]);
    }


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
    return redirect()->route('dashbord.home')->with('success', 'Article has been updated successfully.');
    }

    public function destroy(int $id)
    {
        $product = Article::findOrFail($id);
        $product->delete();
        return redirect()->route('dashbord.home')->with('success', 'Article has been deleted successfully');
    }
}
