<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'featured',
        'user_id',
        'category_id',
        'state_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

	public function getState($state_id)
    {
		$state = DB::table('states')->where('id', '=', $state_id)->first();
        return $state->state;
    }

	public function isFavorite($article_id, $user_id)
	{
		$check = DB::table('favorites')->where('user_id', '=', $user_id)->where('article_id', '=', $article_id)->first();
		if($check)
		{
			return true;
		} else {
			return false;
		}
	}
}
