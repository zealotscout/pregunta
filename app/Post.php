<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// 
	// $table->string('title');
	// $table->string('body');
	// $table->integer('user_id')->unsigned()->nullable();
	// $table->integer('category_id')->unsigned()->nullable();
	// $table->integer('tag_id')->unsigned()->nullable();
	protected $fillable = ['title', 'body', 'user_id', 'user_id', 'category_id', 'tag_id'];

	public function author() {
		return $this->belongsTo('App\User', 'user_id');
	}

	public static function rules() {
		return [
			'title' => 'required|min:10|max:200',
			'body' => 'required|min:50|max:500',
			'user_id' => 'integer', 
			'category_id' => 'integer',
			'tag_id' => 'integer'
		];
	}
}