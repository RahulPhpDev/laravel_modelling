<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scope\ArticleGlobalScope;
class Article extends Model
{
    protected static function boot() {
    	parent::boot();
    	static::addGlobalScope(new ArticleGlobalScope());
    	// static::addGlobalScope('user_filer', function (Builder $builder) {
    	// 	$builder->where('user_id', 1)->whereYear('created_at', 2020);
    	// });
    }



    public function scopeCurrentYearArticle($query, $year = 2020) {
    	// dd(date('Y'));
    	return $query->whereUserId(1)->whereYear('created_at', $year);
    }


}
