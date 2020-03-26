<?php
namespace App\Scope;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ArticleGlobalScope implements Scope {
	
	public function apply(Builder $builder, Model $model) {
		$builder->where('user_id' ,1)->whereYear('created_at', 2020);
	}
}