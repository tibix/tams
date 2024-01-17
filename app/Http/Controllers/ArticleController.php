<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('articles.index', [
			'articles' => Article::orderBy('created_at', 'DESC')->paginate(6)
		]);
	}

	public function category($category)
	{
		return view('articles.category', ['articles' => Article::where('category_id', '=', $category)->paginate(6)]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		$categories = DB::table('categories')->get();
		return view('articles.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$formFields = $request->validate([
			'title' => 'required',
			'content' => 'required',
			'category_id' => 'required',
		]);

		if($request->hasFile('image'))
		{
			$formFields['image'] = $request->file('image')->store('image','public');
		}

		$formFields['user_id'] = auth()->id();
		$formFields['state_id'] = 3;
		$formFields['featured'] = 0;

		$article = Article::create($formFields);
		if(!$article)
		{
			return back()->with('error', 'A aparut o eroare la salvarea articolului!');
		}

		return redirect('/')->with('success', 'Articolul a fost creat cu success!');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Article $article)
	{
		return view('articles.show', [
			'article' => $article
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Article $article)
	{
		$categories = DB::table('categories')->get();
		return view('articles.edit', ['article' => $article] ,compact('categories'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Article $article)
	{
		// dd($request->file());

		if($article->user_id != auth()->id())
		{
			abort(403, 'Unauthorized action!');
		}

		$formFields = $request->validate([
			'title' => 'required',
			'content' => 'required',
			'category_id' => 'required',
		]);

		if($request->hasFile('image'))
		{
			$formFields['image'] = $request->file('image')->store('image','public');
		}

		$formFields['state_id'] = $article->state_id;
		$formFields['featured'] = $article->featured;

		$article->update($formFields);

		return back()->with('success', 'Article updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function delete(Article $article)
	{
		if($article->user_id != auth()->id())
		{
			abort(403, 'Unauthorized action!');
		}

		$article->delete();
		return redirect('/')->with('success', 'Article deleted successfully!');
	}

	public function user()
	{
		return view('articles.user', [
			'articles' => Article::where('user_id', '=', auth()->id())->paginate(3)
		]);
	}
}
