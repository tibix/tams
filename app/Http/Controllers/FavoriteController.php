<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$favorites = Favorite::where('user_id', auth()->id())->get();
		return view('favorites.index', compact('favorites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get the article id and the id of the user id and add it to the favorites table
		$favorite = new Favorite();
		$favorite->article_id = $request->article_id;
		$favorite->user_id = $request->user_id;
		$favorite->save();

		return redirect()->back()->with('success', 'Article added to favorites');
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Favorite $favorite)
    {
		$favorite = Favorite::where('user_id', $request->user_id)->where('article_id', $request->article_id)->first();
		$favorite->delete();
		return redirect()->back()->with('success', 'Article removed from favorites');
    }
}
