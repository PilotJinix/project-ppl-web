<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewProduct extends Model
{
    protected $table = 'review_product';
	
	protected $fillable = [
		'rating',
		'review',
		'user_id',
		'produk_id'
	];
}